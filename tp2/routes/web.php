<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculController;
use App\Http\Controllers\ControllerTP1;


Route::get('/', function () {
    return view('tp-01.exercise01.index');
});
Route::get('/index', function () {
    return view('tp-01.exercise01.index');
});
Route::get('/home', function () {
    return view('tp-01.exercise01.home');
})->name('home');

Route::get('/about', function () {
    return view('tp-01.exercise01.about');
})->name('about');

Route::get('/contact', function () {
    return view('tp-01.exercise01.contact');
})->name('contact');

// Route::get('/user/{id}', function ($id) {
//     return "Utilisateur : ".$id;
// });

// Route::get('/user/{name?}', function ($name = 'Invité') {
//     return $name;
// });
Route::get('/somme/{a}/{b}', [CalculController::class, 'somme']);

Route::get('/produit/{a}/{b}', [CalculController::class, 'produit']);

Route::get('/etudiant',[ControllerTP1::class,'etudiant']);
