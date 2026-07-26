<?php

use Illuminate\Support\Facades\Route;

// Public / Auth
Route::get('/', function () { return view('landing'); })->name('landing');

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    // Core Navigation
    Route::get('/home', function () { return view('home'); })->name('home');
    Route::get('/games', function () { return view('games.index'); })->name('games');
    Route::get('/catalog', function () { return view('catalog.index'); })->name('catalog');
    Route::get('/develop', function () { return view('develop.index'); })->name('develop');
    Route::get('/robux', function () { return view('store.index'); })->name('robux');
    
    // User Profile & Social
    Route::get('/users/{id}/profile', function ($id) { return view('users.profile', compact('id')); })->name('users.profile');
    Route::get('/users/{id}/friends', function ($id) { return view('users.friends', compact('id')); })->name('users.friends');
    Route::get('/users/{id}/inventory', function ($id) { return view('users.inventory', compact('id')); })->name('users.inventory');
    
    // Personal Management
    Route::get('/my/avatar', function () { return view('my.avatar'); })->name('my.avatar');
    Route::get('/my/messages', function () { return view('my.messages'); })->name('my.messages');
    Route::get('/my/money.aspx', function () { return view('my.transactions'); })->name('my.transactions');
    Route::get('/my/account', function () { return view('my.settings'); })->name('my.settings');
    Route::get('/my/groups', function () { return view('my.groups'); })->name('my.groups');
});
