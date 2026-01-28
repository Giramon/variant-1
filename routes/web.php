<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TourController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/order/{tour}', [TourController::class, 'create'])->name('orders.create');
    Route::post('/order', [TourController::class, 'store'])->name('orders.store');
});

require __DIR__.'/auth.php';
