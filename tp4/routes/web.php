<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;


Route::get('/', [ProduitController::class, 'index']);

Route::get('/create', [ProduitController::class, 'create']);
Route::post('/store', [ProduitController::class, 'store']);

Route::get('/edit/{id}', [ProduitController::class, 'edit']);
Route::post('/update/{id}', [ProduitController::class, 'update']);

Route::get('/delete/{id}', [ProduitController::class, 'destroy']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
