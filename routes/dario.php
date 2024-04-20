<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\DarioController;
use Auth0\Laravel\Facade\Auth0;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YolovController;

Route::get('/dario', [DarioController::class, 'index'])->name('dario.index');