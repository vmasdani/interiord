<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin', function () {
    return File::get(public_path().'/index.html');
});

Route::get('/', function () {
    return view('home');
});
Route::get('/marmergranit', function () {
    return view('marmergranit');
});

Route::get('/besi', function () {
    return view('besi');
});

Route::get('/aksesoris', function () {
    return view('aksesoris');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/contact', function () {
    return view('contact');
});

