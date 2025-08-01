<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Redirect home to users list
Route::get('/', function () {
    return redirect()->route('users.index');
});

// User CRUD routes
Route::resource('users', UserController::class); 