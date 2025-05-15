<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'view'])->name('home');
Route::post('/', [HomeController::class, 'sendMail'])->name('home.sendMail');
