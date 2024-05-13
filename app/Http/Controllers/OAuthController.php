<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OAuthController extends Controller
{
    public function redirectToGoogle()
    {
        try {
            if (Auth::check()) {
                return redirect()->route('dashboard');
            }
            return Socialite::driver('google')->redirect();
        } catch (\Exception $e) {
            return redirect()->route('login');
        }
    }


    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            $user = User::where('email', $googleUser->email)->first();
            if (!$user) {
                $user = User::create(['name' => e($googleUser->name), 'email' => $googleUser->email, 'password' => Hash::make(bin2hex(random_bytes(16)))]);
            }

            if (!$user->email_verified_at) {
                $user->email_verified_at = now();
                $user->save();
            }

            Auth::login($user);
            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            return redirect()->route('login');
        }
    }
}
