<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/design_system', [App\Http\Controllers\PageController::class, 'designSystem'])->name('designSystem');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/{any}', [App\Http\Controllers\HomeController::class, 'index'])->where('any', '.*');
});
