<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all_user()
    {
        return User::all();
    }

    public function user($user_id)
    {
        return User::find($user_id);
    }
}
