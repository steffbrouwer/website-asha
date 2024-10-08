<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('welcome'); // Home Page
})->name('home');

// Projecten Route
Route::get('/projecten', function () {
    return view('projecten'); // Return the projecten.blade.php view
})->name('projecten');

// Agenda Route
Route::get('/agenda', function () {
    return view('agenda'); // Return the agenda.blade.php view
})->name('agenda');

// Contact Route
Route::get('/contact', function () {
    return view('contact'); 
})->name('contact');

require __DIR__.'/auth.php';
