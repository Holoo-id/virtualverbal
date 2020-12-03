<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function finalizeRegister(Request $request, $id)
    {
        $new_user = User::findOrFail($id);
        $new_user->name = $request->input('username');
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $validated = $request->validate([
                    'image' => 'mimes:jpeg,png|max:1014'
                ]);
                $request->image->storeAs('/storage/images/users/', $request->image->getClientOriginalName());
                $url = "/storage/images/users/".$request->image->getClientOriginalName();
                $new_user->image = $url;
                $new_user->save();
                return redirect('/');
            }
        }
        abort(500, 'Could not upload image :(');
    }
}
