<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::view('/', 'index')->name('home');


Route::middleware(['auth', 'verified'])->group(function () {
Route::get('dashboard', function () {
return Inertia::render('dashboard');
})->name('dashboard');
});


Route::view('/generic', 'generic');
Route::view('/elements', 'elements');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
