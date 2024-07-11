<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('user', [UserController::class, 'all_user']);
Route::get('user/{id}', [UserController::class, 'user']);
