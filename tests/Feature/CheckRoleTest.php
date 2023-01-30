<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Artisan;
use DB;

class CheckRoleTest extends TestCase
{
    public function testAdminCanAccessRoutes()
    {

        $faker = \Faker\Factory::create();

        $admin = User::create([
            'name' => 'Admin',
            'email' => rand().'@domain.com',
            'password' => bcrypt('12345678')
        ]);

        $admin = $admin->assignRole('admin');

        $response = $this->actingAs($admin)->get(route('admin.dashboard'));

        $response->assertStatus(200);
    }

    public function testNonAdminCannotAccessRoutes()
    {
        $faker = \Faker\Factory::create();

        $user = User::create([
            'name' => 'User',
            'email' => $faker->email,
            'password' => bcrypt('12345678')
        ]);

        $user = $user->assignRole('user');


        $response = $this->actingAs($user)->get(route('admin.dashboard'));

        $response->assertStatus(403);

    }

}
