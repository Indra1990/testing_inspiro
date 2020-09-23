<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/detail/{item}', [HomeController::class, 'detail']);
Route::post('/detail/{item}', [HomeController::class, 'detailsave']);
