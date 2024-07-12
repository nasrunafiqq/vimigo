<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// to get all user profile data
Route::get('user', [UserController::class, 'AllUser']);

// to get user playlist data (fav_genre, history,playlist history )
Route::get('user/playlist/{id}', [UserController::class, 'UserPlaylist']);

// to get user billing data (name,email, physical address, no phone)
Route::get('user/billing/{id}', [UserController::class, 'userBilling']);

// for billing service to update user email
Route::post('user/edit/{id}', [UserController::class, 'UpdateUser']);