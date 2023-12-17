<?php

use App\Http\Controllers\AdminsettingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductionProcessPhotoController;
use App\Http\Controllers\ProjectController;
use App\Models\ProductionProcessPhoto;
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
Route::get('/products/{id}/photo', [ProductController::class, 'photo']);
Route::post('/products/{id}/photo', [ProductController::class, 'sendPhoto']);

Route::get('/projects', [ProjectController::class, 'all']);
Route::get('/projects/{id}', [ProjectController::class, 'get']);
Route::post('/projects', [ProjectController::class, 'save']);
Route::get('/projects/{id}/photo', [ProjectController::class, 'photo']);
Route::post('/projects/{id}/photo', [ProjectController::class, 'sendPhoto']);
Route::get('/project_photos/{id}/photo', [ProjectController::class, 'projectPhoto']);

Route::get('/productionprocessphotos', [ProductionProcessPhotoController::class, 'all']);
Route::post('/productionprocessphotos-save-bulk', [ProductionProcessPhotoController::class, 'save']);
Route::get('/prod_process_photos_photo/{id}', [ProductionProcessPhotoController::class, 'prodProcessPhoto']);


Route::get('/adminsetting', [AdminsettingController::class, 'first']);
Route::post('/adminsetting', [AdminsettingController::class, 'save']);
