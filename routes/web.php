<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin_dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('admin_dashboard');

