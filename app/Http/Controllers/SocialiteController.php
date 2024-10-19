<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
class SocialiteController extends Controller
{
    public function login($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function redirect($provider)
    {
        $socialiteUser = Socialite::driver($provider)->user();

        $user = User::updateOrCreate(
            [
                'provider' => $provider,
                'provider_id' => $socialiteUser->getId()
            ],
            [
                'name' => $socialiteUser->getNickname() ?? $socialiteUser->getName(),
                'email' => $socialiteUser->getEmail(),
                'provider_id' => $socialiteUser->getId(),
            ]
        );

        auth()->login($user, true);
        return redirect()->route('theme.index');
        // dd($socialiteUser);
    }

}
