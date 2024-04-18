<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// User routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

// Admin routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'can:admin',
])->group(function () {
    Route::get('/admin', function () {
        return Inertia::render('Admin/Dashboard');
    })->name('admin.dashboard');
    Route::get('/admin/users', function () {
        return Inertia::render('Admin/Users');
    })->name('admin.users');
    Route::get('/admin/table', function () {
        return Inertia::render('Admin/Table');
    })->name('admin.table');
});

Route::get('/social/google', [App\Http\Controllers\GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/social/google/callback', [App\Http\Controllers\GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');
