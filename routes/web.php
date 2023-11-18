<?php

use App\Models\Adminsetting;
use App\Models\Product;
use App\Models\Project;
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
    return File::get(public_path() . '/index.html');
});

Route::get('/', function () {
    return view('home')
        ->with('data', [
            'adminsetting' => Adminsetting::query()->first(),
            'projects' => Project::query()->get(),
            'hot_projects' => Project::query()->whereRaw('is_hot = 1')->get(),


        ]);
});
Route::get('/marmergranit', function () {
    return view('marmergranit')->with('data', [
        'adminsetting' => Adminsetting::query()->first(),
        'products' => Product::query()->where('type', '=', 'Marmer Granit')->get()
    ]);
});

Route::get('/besi', function () {
    return view('besi')->with('data', [
        'adminsetting' => Adminsetting::query()->first(),
        'products' => Product::query()->where('type', '=', 'Besi')->get()
    ]);
});

Route::get('/aksesoris', function () {
    return view('aksesoris')->with('data', [
        'adminsetting' => Adminsetting::query()->first(),
        'products' => Product::query()->where('type', '=', 'Aksesoris')->get()
    ]);
});

Route::get('/portofolio', function () {
    return view('portofolio')->with('data', [
        'adminsetting' => Adminsetting::query()->first(),
        'projects' => Project::all()->map(function (Project $p) {
            $p->projectPhotos;

            return $p;
        })

    ]);
});

Route::get('/contact', function () {
    return view('contact')->with('data', [
        'adminsetting' => Adminsetting::query()->first()
    ]);
});
