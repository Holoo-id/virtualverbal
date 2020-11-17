<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
            return redirect('/');
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
}
