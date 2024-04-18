<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// User routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
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
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// main dashboard
Route::get('/dashboard-index', function () {
       return view('dashboard.index');
   })->name('dashboard-index');

//    add video
   Route::get('/list', function () {
       return view('dashboard.add-video.list');
   })->name('list');
     Route::get('/edit', function () {
       return view('dashboard.add-video.edit');
   })->name('edit');
   Route::get('/create', function () {
       return view('dashboard.add-video.create');
   })->name('create');

      Route::get('/detail', function () {
       return view('dashboard.detail-video');
   })->name('detail');