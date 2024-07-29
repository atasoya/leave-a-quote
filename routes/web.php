<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;

Route::get('/', [QuoteController::class, 'index'])->name('quotes.index');

Route::get('/create', [QuoteController::class, 'create'])->name('quotes.create');
Route::post('/store', [QuoteController::class, 'store'])->name('quotes.store');

Route::post('/quotes/like', [QuoteController::class, 'handleInteraction'])->name('quotes.like');
Route::post('/quotes/flag', [QuoteController::class, 'handleInteraction'])->name('quotes.flag');

Route::post('/quotes/interaction', [QuoteController::class, 'handleInteraction'])->name('quotes.interaction');

Route::get('/popular', [QuoteController::class, 'popular'])->name('quotes.popular');
