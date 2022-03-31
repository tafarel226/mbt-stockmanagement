<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;



Route::group(['middleware'=>'auth:sanctum'],function(){
    Route::get('/me', [AuthController::class, 'me']);
});

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login'])->name('login');
// routes/api.php



