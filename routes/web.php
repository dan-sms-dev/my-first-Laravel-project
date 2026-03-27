<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Login;

Route::get('/', [SiteController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
