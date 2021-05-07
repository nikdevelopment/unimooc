<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\SocialiteAccount;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SocialiteAccountController extends Controller
{
    public function create()
    {

    }

    public function handleAuthRedirect($provider)
    {
        if ($provider == "microsoft")
        {
            return Socialite::driver('microsoft')
                ->scopes(['user.read', 'profile'])
                ->redirect();
        }
        else
        {
            return Socialite::driver($provider)->redirect();
        }
    }

    public function handleAuthCallback($provider)
    {
        try{
            $user = Socialite::driver($provider)->user();
            $findSC = SocialiteAccount::where('socialite_id', $user->id)->first();
            if($findSC)
            {
                $auth_user = User::where('id', $findSC->user_id)->first();
                Auth::login($auth_user);
                return redirect()->intended('dashboard');
            }
            else if($finduser = User::where('email', $user->email)->first())
            {             
                DB::table('socialite_accounts')->insert([
                    'user_id' => $finduser->id,
                    'socialite_id' => $user->id,
                    'provider' => $provider,
                    'name' => $user->name,
                    'email' => $user->email,
                    'token' => $user->token,
                    'avatar' => $user->avatar,
                ]);
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            }
            else
            {
                $finduser = User::where('email', $user->email)->first();
                return view("auth.input-username", ['provider' => $provider], ['user' => $user]);
            }
            
        }catch(\Exeption $e){}
    }

    public function createSocialiteUser(Request $user)
    {
        $newuser = new User;
        $newuser->name = $user->name;
        $newuser->email = $user->email;
        $newuser->username = $user->username;
        $newuser->password = Hash::make("Kilop123");
        $newuser->profile_photo_path = $user->avatar;
        $newuser->save();
        
        DB::table('socialite_accounts')->insert([
            'user_id' => $newuser->id,
            'socialite_id' => $user->id,
            'provider' => $user->provider,
            'name' => $user->name,
            'email' => $user->email,
            'token' => $user->token,
            'avatar' => $user->avatar,
        ]);

        Auth::login($newuser);
        return redirect()->intended('dashboard');
    }
}
