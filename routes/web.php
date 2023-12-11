<?php

use App\Models\Adminsetting;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;
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

Route::get('/', function (Request $r) {
    return view('home')
        ->with('data', [
            'adminsetting' => Adminsetting::query()->first(),
            'projects' => Project::all()->map(function (Project $p) {
                $p->projectPhotos;

                return $p;
            }),
            'hot_projects' => Project::query()->whereRaw('is_hot = 1')->get(),

        ]);
});
Route::get('/marmergranit', function (Request $r) {
    $sortBy = $r->query('sort_by')  ?? 'recommended';
    $products = Product::query()->where('type', '=', 'Marmer Granit');

    if ($sortBy == 'recommended') {
        $products = $products->orderBy('recommended_order', 'DESC');
    } else if ($sortBy == 'bestseller') {
        $products = $products->orderBy('bestseller_order', 'DESC');
    } else {
        $products = $products->orderBy('recommended_order', 'DESC');
    }

    $products = $products->get();
    return view('marmergranit')->with('data', [
        'adminsetting' => Adminsetting::query()->first(),
        'products' => $products,
        'sort_by' => $sortBy
    ]);
});

Route::get('/besi', function (Request $r) {
    $sortBy = $r->query('sort_by') ?? 'recommended';
    $products = Product::query()->where('type', '=', 'Besi');

    if ($sortBy == 'recommended') {
        $products = $products->orderBy('recommended_order', 'DESC');
    } else if ($sortBy == 'bestseller') {
        $products = $products->orderBy('bestseller_order', 'DESC');
    } else {
        $products = $products->orderBy('recommended_order', 'DESC');
    }

    $products = $products->get();
    return view('besi')->with('data', [
        'adminsetting' => Adminsetting::query()->first(),
        'products' => $products,
        'sort_by' => $sortBy
    ]);
});

Route::get('/aksesoris', function (Request $r) {
    $sortBy = $r->query('sort_by')  ?? 'recommended';
    $products = Product::query()->where('type', '=', 'Aksesoris');

    if ($sortBy == 'recommended') {
        $products = $products->orderBy('recommended_order', 'DESC');
    } else if ($sortBy == 'bestseller') {
        $products = $products->orderBy('bestseller_order', 'DESC');
    } else {
        $products = $products->orderBy('recommended_order', 'DESC');
    }

    $products = $products->get();

    return view('aksesoris')->with('data', [
        'adminsetting' => Adminsetting::query()->first(),
        'products' => $products,
        'sort_by' => $sortBy
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
