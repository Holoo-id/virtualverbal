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
        if(!$login_data['login_remember_ep']){
            $remember = false;
        }
        else{
            $remember = true;
        }

        if (Auth::attempt(['email' => $login_data['login_email'], 'password' => $login_data['login_pwd']], $remember)) {
            // Authentication passed...
            dd($login_data);
            return redirect('/');
        }
    }
}
