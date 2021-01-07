<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function finalizeRegister(Request $request, $encrypted_id){
        $id = Crypt::decryptString($encrypted_id);
        $new_user = User::findOrFail($id);
        $validated = $request->validate([
            'username' => 'required|unique:App\Models\User,name|max:255',
            'image' => 'required|mimetypes:image/jpeg,image/png',
        ]);
        $new_user->name = $request->input('username');
        $img_name = $new_user->name.".".$request->file('image')->extension();
        $request->file('image')->storePubliclyAs(
            'public/images/users/', $img_name
        );
        $new_user->image = 'storage/images/users/'.$img_name;
        $new_user->role_id = 3;
        $new_user->save();
        return redirect('/');
    }

    public function redirectToProvider($driver){
        return Socialite::driver($driver)->redirect();
    }

    public function handleProviderCallback($driver, Request $request){
        $request_user = Socialite::driver($driver)->user();
        $checkuser = User::where('provider_id', $request_user->id)->first();

        if($checkuser){
            Auth::loginUsingId($checkuser->id, false);
        }
        else{
            $new_user = new User;
            $new_user->provider_id = $request_user->id;
            $new_user->name = $request_user->name;
            $new_user->email = $request_user->email;
            $new_user->password = encrypt(Str::random(16));
            $new_user->save();
            Auth::login($new_user, false);
        }
        $request->session()->regenerate();
        return redirect('/');
    }
}
