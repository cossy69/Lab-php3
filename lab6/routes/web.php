<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/login', function() {
    return view('auth.login');
})->name('login');  

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', function() {
    Auth::logout();
    return redirect('/login')->with('success', 'Đăng xuất thành công!');
})->name('logout');

Route::get('/', function() {
    return view('client.home');
})->name('home');

Route::middleware('client')->group(function() {
    Route::get('/list', function() {
        return view('client.list');
    });
});
Route::middleware('admin')->group(function() {
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
});