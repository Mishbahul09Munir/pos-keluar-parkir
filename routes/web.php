<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\PosKeluar\Dashboard;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', Dashboard::class)->name('dashboard');
