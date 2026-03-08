<?php

use App\Livewire\Counter;
use App\Livewire\TestPage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/counter', Counter::class)->name('counter');

    Route::get('/test-page', TestPage::class)->name('test-page');
});
