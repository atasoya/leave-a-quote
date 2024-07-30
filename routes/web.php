<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

Route::get('/', [QuoteController::class, 'index'])->name('quotes.index');

Route::get('/create', [QuoteController::class, 'create'])->name('quotes.create');
Route::post('/store', [QuoteController::class, 'store'])->name('quotes.store');

Route::post('/quotes/like', [QuoteController::class, 'handleInteraction'])->name('quotes.like');
Route::post('/quotes/flag', [QuoteController::class, 'handleInteraction'])->name('quotes.flag');

Route::post('/quotes/interaction', [QuoteController::class, 'handleInteraction'])->name('quotes.interaction');

Route::get('/popular', [QuoteController::class, 'popular'])->name('quotes.popular');
Route::get('/hot-qoutes', [QuoteController::class, 'hot'])->name('quotes.hot');

Route::get('/login', [LoginController::class, 'loginGet'])->name('login.admin');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::delete('/quote/{id}', [AdminController::class, 'deleteQuote'])->name('quote.delete');

