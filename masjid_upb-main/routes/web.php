<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('login/google', [AuthController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [AuthController::class, 'handleGoogleCallback']);



Route::get('/', function () {
    return view('home');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/charity', function () {
    return view('charity');
});

Route::get('/login', function () {
    return view('login');
});
