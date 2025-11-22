<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\TanosvenyController;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/database', [TanosvenyController::class, 'index'])
    ->name('database-table');


Route::middleware(['auth', 'verified'])->group(function () {
Route::get('dashboard', function () {
return Inertia::render('dashboard');
})->name('dashboard');
});



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
});



Route::view('/generic', 'generic');
Route::view('/elements', 'elements');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
