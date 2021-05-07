<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;



class SocialiteController extends Controller
{
    public function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function redirectMicrosoft()
    {
        return Socialite::driver('microsoft')
        ->scopes(['read:user'])
        ->redirect();
    }

    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleGoogleCallback()
    {
        try{
            $user = Socialite::driver('google')->user();
            dd($user);
            $finduser = SocialiteAccount::where('socialite_id', $user->id)->first();
            if($finduser)
            {
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            }
            else
            {
                return view("auth.input-username", ['provider' => 'Google'], ['user' => $user]);
            }
        }catch(\Exeption $e){}
    }

    public function handleMicrosoftCallback()
    {
        try{
            $user = Socialite::driver('microsoft')->user();
            dd($user);
            $finduser = SocialiteAccount::where('socialite_id', $user->id)->first();
            if($finduser)
            {
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            }
            else
            {
                return view("auth.input-username", ['provider' => 'Google'], ['user' => $user]);
              /*  
                ]);
                Auth::login($newuser);
                return rediret()-> */
            }
        }catch(\Exeption $e){}
    }

    public function handleFacebookCallback()
    {
        try{
            $user = Socialite::driver('facebook')->user();
            dd($user);
            $finduser = SocialiteAccount::where('socialite_id', $user->id)->first();
            if($finduser)
            {
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            }
            else
            {
                return view("auth.input-username", ['provider' => 'Facebook'], ['user' => $user]);
              /*  
                ]);
                Auth::login($newuser);
                return rediret()-> */
            }
        }catch(\Exeption $e){}
    }

    public function createSocialiteUser(Request $user)
    {
        $newuser = new User;
        $newuser->name = $user->name;
        $newuser->email = $user->email;
        $newuser->username = $user->username;
        $newuser->socialite_id = $user->id;
        $newuser->password = Hash::make(Str::random(10));
        $newuser->profile_photo_path = $user->avatar;

        $newuser->save();
        Auth::login($newuser);
        return redirect()->intended('dashboard');
    }
}
