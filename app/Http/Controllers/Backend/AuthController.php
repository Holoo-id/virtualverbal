<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function authenticate(Request $request)
    {
        $login_data = $request->all();
        if($request->has('login_remember_ep')){
            $remember = true;
        }
        else{
            $remember = false;
        }

        if (Auth::attempt(['email' => $login_data['login_email'], 'password' => $login_data['login_pwd']], $remember)) {
            // Authentication passed...
            return redirect()->route('home');
        }
        else{
            return redirect('/gagal');
        }
    }

    public function logout()
    {
        # code...
        Auth::logout();
        return redirect('/');
    }

    public function register(Request $request)
    {
        $new_user = new User;
        $new_user->email = $request->register_email;
        $new_user->password = Hash::make($request->register_pwd);

        $new_user->save();

        Auth::login($new_user);

        event(new Registered($new_user));

        return redirect()->route('verification.notice');
    }
}
