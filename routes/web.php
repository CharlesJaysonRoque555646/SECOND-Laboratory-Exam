<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;

Route::get('/', function () {
    return redirect()->route('words-view');
});

Route::get('/view', [WordController::class, 'index'])->name('words-view');

Route::resource('words', WordController::class)->except(['index']);
