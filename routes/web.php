<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\GeneralController::class, 'index'])->name("index");