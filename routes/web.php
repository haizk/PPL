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
    Route::get('/dashboard/upload', function () {
        return view('dashboard.upload');
    })->name('dashboard.upload');
    Route::post('/dashboard/upload', [App\Http\Controllers\APIController::class, 'upload'])->name('dashboard.upload');
    Route::get('/dashboard/history', [App\Http\Controllers\VideoController::class, 'history'])->name('dashboard.history');
    Route::get('/dashboard/details/{video}', [App\Http\Controllers\VideoController::class, 'details'])->name('dashboard.details');
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

// OAuth routes
Route::get('/auth/google', [App\Http\Controllers\OAuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [App\Http\Controllers\OAuthController::class, 'handleGoogleCallback']);


// main dashboard
Route::get('/dashboard-index', function () {
       return view('dashboard.index');
   })->name('dashboard-index1');

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

         Route::get('/tabel', function () {
       return view('dashboard.table');
   })->name('tabel');