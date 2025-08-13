<?php

use App\Http\Controllers\GlobalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [GlobalController::class, 'home'])->name('home');
Route::get('/contact', [GlobalController::class, 'contact'])->name('contact');
Route::post('/store', [GlobalController::class, 'store'])->name('store');

Route::get('/employe', [GlobalController::class, 'employe'])->name('employe');
route::post('/storeEmploye', [GlobalController::class, 'storeEmploye'])->name('storeEmploye');