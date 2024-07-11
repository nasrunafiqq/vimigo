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

    public function UserPlaylist($user_id)
    {
        return User::find($user_id)->only('fav_genre', 'interest', 'playlist_history');
    }

    public function UserBilling($user_id)
    {
        return User::find($user_id)->only('name','email', 'physical_address', 'phone_number');
    }
}
