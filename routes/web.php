<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SociosController;
use App\Http\Controllers\Api\LibroController;
Route::get('/', function () {
    return view('welcome');
});
Route::apiResource('libros', LibroController::class);
Route::resource('libro', LibrosController::class);
Route::resource('socios', SociosController::class);
Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');