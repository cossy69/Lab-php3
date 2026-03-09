<?php
use App\Http\Controllers\NewsController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NewsController::class, 'index']);
Route::get('/contact', [NewsController::class, 'contact']);

Route::get('/detail/{id}', [NewsController::class, 'getOneNews']);

Route::get('/student-info', [StudentController::class, 'index']);