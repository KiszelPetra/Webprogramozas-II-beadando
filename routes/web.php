<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('front.pages.front-example');
})->name('home');

Route::get('/database', function () {
    return view('front.pages.database-table');
})->name('database-table');

Route::middleware(['auth', 'verified'])->group(function () {
Route::get('dashboard', function () {
return Inertia::render('dashboard');
})->name('dashboard');
});


Route::view('/generic', 'generic');
Route::view('/elements', 'elements');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
