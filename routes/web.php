<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\SocialiteAccountController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/auth/redirect/{provider}', [SocialiteAccountController::class, 'handleAuthRedirect']);
Route::get('/auth/callback/{provider}', [SocialiteAccountController::class, 'handleAuthCallback']);

Route::post('/auth/socialite/register', [SocialiteAccountController::class, 'createSocialiteUser']);