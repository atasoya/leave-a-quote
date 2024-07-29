<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;

Route::get('/', [QuoteController::class, 'index'])->name('quotes.index');

Route::get('/create', [QuoteController::class, 'create'])->name('quotes.create');
Route::post('/store', [QuoteController::class, 'store'])->name('quotes.store');
