<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\TonoController;
use Auth0\Laravel\Facade\Auth0;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YolovController;

Route::get('/tono', [TonoController::class, 'index'])->name('toño.index');