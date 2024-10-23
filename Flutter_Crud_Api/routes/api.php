<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Resource\CrudController;
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

Route::post('/register', [RegisterController::class ,'register']);
Route::post('/login',[LoginController::class,'login']);

Route::get('/produk', [CrudController::class, 'index']);
Route::post('/produk/create', [CrudController::class, 'store']);
Route::get('/produk/show/{id}', [CrudController::class, 'show']);
Route::post('/produk/update/{id}', [CrudController::class, 'update']);
Route::delete('/produk/delete/{id}', [CrudController::class, 'destroy']);