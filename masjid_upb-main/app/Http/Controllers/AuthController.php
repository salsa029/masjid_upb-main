<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {
        // Tidak menggunakan stateless
        $googleUser = Socialite::driver('google')->user(); // tanpa stateless()

        $existingUser = User::where('email', $googleUser->getEmail())->first();

        if ($existingUser) {
            Auth::login($existingUser);
            return redirect('/Home');
        } else {
            // Simpan data user Google sementara di session
            session([
                'temp_google_user' => [
                    'email' => $googleUser->getEmail(),
                    'name' => $googleUser->getName(),
                ]
            ]);
            return redirect('/confirm-register');
        }
    }
}