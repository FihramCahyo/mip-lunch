<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', [PageController::class, 'beranda'])->name('dashboard');
    Route::get('/menu-makan', function () {
        return view('menu-makan');
    })->name('menu-makan');
});
