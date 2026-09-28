<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WatchlistController;

Route::get('/', function () {
    return redirect()->route('watchlist.index');
});

Route::get('/watchlist', [WatchlistController::class, 'index'])
    ->name('watchlist.index');

Route::get('/watchlist/create', [WatchlistController::class, 'create'])
    ->name('watchlist.create');

Route::post('/watchlist', [WatchlistController::class, 'store'])
    ->name('watchlist.store');