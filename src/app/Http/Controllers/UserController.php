<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function AllUser()
    {
        return User::all();
    }

    public function user($user_id)
    {
        return User::find($user_id);
    }

    public function UpdateUser($user_id,Request $request)
    {
        dd($request);
        $user = User::find($user_id);

        $user->update([

        ]);

    }
}
