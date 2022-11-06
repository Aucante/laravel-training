<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    public function testValidRegistration()
    {
        $count = User::count();

        $response = $this->post('/register', [
            'email' => 'jean@doe.com',
            'name' => 'test',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $newCount = User::count();

        $this->assertNotEquals($count, $newCount);
    }
}
