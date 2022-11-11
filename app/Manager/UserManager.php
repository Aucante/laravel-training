<?php

namespace App\Manager;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserManager
{
    public function uploadAvatar($data)
    {
        $content = file_get_contents($data->avatar);

        $path = 'users/' . $data->id . '_' . Str::random(18) . '.jpg';

        Storage::disk('public')->put($path, $content);

        return $path;
    }
}
