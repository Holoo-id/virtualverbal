<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function finalizeRegister(Request $request, $encrypted_id){
        $id = Crypt::decryptString($encrypted_id);
        $new_user = User::findOrFail($id);
        $validated = $request->validate([
            'username' => 'required|unique:App\Models\User|max:255',
            'image' => 'required|mimetypes:image/jpeg,image/png|dimensions:ratio=1',
        ]);
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
