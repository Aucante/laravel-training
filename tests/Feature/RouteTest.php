<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class RouteTest extends TestCase
{
    public function testAccessAdminWithGuestRole()
    {
        $response = $this->get('/admin');
        $response->assertRedirect('/admin/login');
    }

    public function testAccessAdminWithAdminRole()
    {
        $admin = Auth::loginUsingId(1);
        $this->actingAs($admin);
        $response = $this->get('/admin');
        $response->assertStatus(200);
    }

//    public function testAccessAdminWithUserRole()
//    {
//        $admin = Auth::loginUsingId(2);
//        $this->actingAs($admin);
//        $response = $this->get('/admin/articles');
//        $response->assertStatus(302);
//    }
}
