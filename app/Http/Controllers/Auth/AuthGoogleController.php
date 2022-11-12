<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Manager\UserManager;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthGoogleController extends Controller
{
    private $manager;

    public function __construct(UserManager $manager)
    {
        $this->manager = $manager;
    }

    public function auth()
    {
        return Socialite::driver('google')->redirect();
    }

    public function redirect()
    {
        $userInfos = Socialite::driver('google')->stateless()->user();

        $user = User::firstOrCreate([
            'email' => $userInfos->email
        ], [
            'name' => $userInfos->name,
            'password' => Hash::make(Str::random(24)),
            'avatar' => ($userInfos->avatar && !empty($userInfos->avatar))
                ? $this->manager->uploadAvatar($userInfos)
                : User::DEFAULT_AVATAR_PATH
        ]);

        Auth::login($user);

        return redirect()->route('articles');
    }
}
