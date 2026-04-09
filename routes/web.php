<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;

// Redirect home to view
Route::get('/', function () {
    return redirect()->route('words-view');
});

// Custom view route
Route::get('/view', [WordController::class, 'index'])->name('words-view');

// Resource routes (optional, for CRUD forms)
Route::resource('words', WordController::class)->except(['index']);
