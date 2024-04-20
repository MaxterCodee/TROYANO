<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LeoController;
use Auth0\Laravel\Facade\Auth0;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YolovController;

Route::get('/leo', [LeoController::class, 'index'])->name('leo.index');