<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NewsController::class, 'home']);
Route::get('/detail/{id}', [NewsController::class, 'detail']);
Route::get('/listof/{idLT}', [NewsController::class, 'listof']);