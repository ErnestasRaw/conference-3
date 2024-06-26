<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConferenceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ConferenceController::class, 'index'])->name('conference.index');

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('conferences', ConferenceController::class)
    ->middleware('auth');
