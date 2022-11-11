<?php

namespace App\Http\Controllers;

use App\Manager\UserManager;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthGithubController extends Controller
{
    private $manager;

    public function __construct(UserManager $manager)
    {
        $this->manager = $manager;
    }

    public function auth()
    {
        return Socialite::driver('github')->redirect();
    }

    public function redirect()
    {
        $userInfos = Socialite::driver('github')->stateless()->user();

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
