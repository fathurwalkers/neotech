<?php

use App\Http\Livewire\AuthLogin;
use App\Http\Livewire\Index;
use App\Http\Livewire\Homepage\Index as IndexHomepage;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/dashboard', 'middleware' => 'ceklogin'], function () {
    Route::get('/', Index::class)->name('dashboard');
});

Route::group(['prefix' => '/'], function () {
    Route::get('/', IndexHomepage::class)->name('home');
});

Route::get('/login', AuthLogin::class)->name('login');
