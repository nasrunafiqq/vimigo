<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('user', [UserController::class, 'AllUser']);
Route::get('user/{id}', [UserController::class, 'user']);
Route::post('user/edit/{id}', [UserController::class, 'UpdateUser']);