<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    public function testValidRegistration()
    {

        $response = $this->post('/register', [
            'email' => 'jean@doe.com',
            'name' => 'test',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertSessionHasErrors();
    }
}
