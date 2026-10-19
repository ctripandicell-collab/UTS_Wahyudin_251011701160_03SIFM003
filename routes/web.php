<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CraftController;

Route::get('/', [CraftController::class, 'index'])->name('home');

Route::get('/katalog', [CraftController::class, 'catalog'])->name('katalog');

Route::get('/katalog/{id}', [CraftController::class, 'show'])->name('detail');

Route::get('/kontak', [CraftController::class, 'contact'])->name('kontak');
Route::post('/kontak', [CraftController::class, 'sendContact'])->name('kontak.send');

Route::get('/about', [CraftController::class, 'about'])->name('about');