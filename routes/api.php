<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', [ProductController::class, 'all']);
Route::get('/products/{id}', [ProductController::class, 'get']);
Route::post('/products', [ProductController::class, 'save']);

Route::get('/projects', [ProjectController::class, 'all']);
Route::get('/projects/{id}', [ProjectController::class, 'get']);
Route::post('/projects', [ProjectController::class, 'save']);

