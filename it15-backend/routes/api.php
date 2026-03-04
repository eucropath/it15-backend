<?php 

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/token', function () {
    $user = \App\Models\User::first();
    return $user->createToken('auth-token')->plainTextToken;
});

Route::post('/login', [AuthController::class, 'login']);