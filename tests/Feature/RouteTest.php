<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class RouteTest extends TestCase
{
    public function testAccessAdminWithGuestRole(): void
    {
        $response = $this->get('/admin');
        $response->assertRedirect('/admin/login');
    }

    public function testAccessAdminWithAdminRole(): void
    {
        $admin = Auth::loginUsingId(1);
        $this->actingAs($admin);
        $response = $this->get('/admin');
        $response->assertStatus(200);
    }

    public function testAccessAdminWithUserRole(): void
    {
        $user = Auth::loginUsingId(5);
        $this->actingAs($user);
        $response = $this->get('/admin');
        $response->assertStatus(302);
    }
}
