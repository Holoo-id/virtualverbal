<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function finalizeRegister(Request $request, $encrypted_id){
        $id = Crypt::decryptString($encrypted_id);
        $new_user = User::findOrFail($id);
        $new_user->name = $request->input('username');
        $img_name = $new_user->name.".".$request->file('image')->extension();
        $request->file('image')->storePubliclyAs(
            'public/images/users/', $img_name
        );
        $new_user->image = 'storage/images/users/'.$img_name;
        $new_user->save();
        return redirect('/');
    }
}
