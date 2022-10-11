<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UkdwEntryController;
use App\Http\Controllers\DashboardAdminController;

Route::get('/', [UkdwEntryController::class, 'index'])->middleware('auth');
Route::get('/users', [UkdwEntryController::class, 'users'])->middleware('auth');
Route::get('/rooms', [UkdwEntryController::class, 'rooms'])->middleware('auth');
Route::get('/komplain', [UkdwEntryController::class, 'komplain'])->middleware('auth');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',  [LoginController::class, 'authenticate']);


Route::get('/logout', [LoginController::class, 'logout']);

