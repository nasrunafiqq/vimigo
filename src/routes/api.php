<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('user', [UserController::class, 'AllUser']);
Route::get('user/playlist/{id}', [UserController::class, 'UserPlaylist']);
Route::get('user/billing/{id}', [UserController::class, 'userBilling']);
Route::post('user/edit/{id}', [UserController::class, 'UpdateUser']);