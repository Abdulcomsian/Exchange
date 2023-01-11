<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirect($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $userSocial =   Socialite::driver($provider)->user();
        $user= User::where(['email' => $userSocial->getEmail()])->first();
        if($user){
            Auth::login($user);
            return redirect('/');
        }else{
        $user = User::create([
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'image'         => $userSocial->getAvatar(),
                'provider_id'   => $userSocial->getId(),
                'provider'      => $provider,
                'password'  =>  Hash::make('11234'),
            ]);
         return back();
        }

        dd('1');
    }

    public function logout(Request $request) {
        Auth::logout();
        dd('logout');
        return redirect('/login');
    }
}
