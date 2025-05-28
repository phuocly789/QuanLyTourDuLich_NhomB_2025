<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Booking;
use App\Models\Tour;
use App\Models\Notification;
use App\Models\Guide;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\FavoriteTour;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

      $user = User::firstOrCreate(
    ['google_id' => $googleUser->getId()], // Tìm kiếm bằng Google ID
    [
        'name' => $googleUser->getName(),
        'email' => $googleUser->getEmail(),
        'password' => Hash::make(uniqid()), // Tạo pass giả
    ]
);
        Auth::login($user);

        return redirect()->intended('/login');
    }
}
