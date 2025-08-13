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
Route::get('/employe/create', [GlobalController::class, 'createEmploye'])->name('employe.create');
Route::post('/storeEmploye', [GlobalController::class, 'storeEmploye'])->name('storeEmploye');
Route::delete('/employe/{employe}', [GlobalController::class, 'destroyEmploye'])->name('employe.destroy');

Route::get('/mail', [GlobalController::class, 'mail'])->name('mail');
Route::delete('/mail/{message}', [GlobalController::class, 'mailDestroy'])->name('mail.destroy');