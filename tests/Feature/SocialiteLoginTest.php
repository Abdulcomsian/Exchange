<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Faker\Generator as Faker;
use Tests\TestCase;
use App\Models\User;
use Socialite;


class SocialiteLoginTest extends TestCase
{
    public function testGoogleSignIn()
    {
        $providerMock = \Mockery::mock('Laravel\Socialite\Contracts\Provider');

        $providerMock->shouldReceive('redirect')->andReturn(new RedirectResponse($this->socialLoginRedirects['google']));

        Socialite::shouldReceive('driver')->with('google')->andReturn($providerMock);

        //Check that the user is redirected to the Social Platform Login Page
        $loginResponse = $this->call('GET', route('auth.google', ['provider' => 'google']));

        $loginResponse->assertStatus(302);

        $redirectLocation = $loginResponse->headers->get('Location');

        $this->assertContains(
            $this->socialLoginRedirects[$provider],
            $redirectLocation,
            sprintf(
                'The Social Login Redirect does not match the expected value for the provider %s. Expected to contain %s but got %s',
                $provider,
                $this->socialLoginRedirects[$provider],
                $redirectLocation
            )
        );

    }

}
