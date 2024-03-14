<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Console/Dashboard');
})->name('console.dashboard');

Route::get('/user', function () {
    return Inertia::render('Console/User/View');
})->name('console.user.view');
