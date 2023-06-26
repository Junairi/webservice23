<?php

use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CategorieCustomer;
use App\Http\Controllers\API\JurusanController;
use App\Http\Controllers\API\MahasiswaController;
use App\Http\Controllers\API\MatakuliahController;
use App\Http\Controllers\API\NilaiController;
use App\Http\Controllers\API\OrderController;

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

Route::group(['prefix' => 'v1'], function () {
    //customers
    Route::group(['prefix' => 'customers'], function () {
        Route::get('/', [CustomerController::class, 'index']);
        Route::get('/{id}', [CustomerController::class, 'show']);
        Route::post('/store', [CustomerController::class, 'store']);
        Route::patch('/{id}', [CustomerController::class, 'update']);
        Route::delete('/{id}', [CustomerController::class, 'delete']);
    });

    //products
    Route::group(['prefix' => 'products'], function () {
        Route::get('/', [ProductController::class, 'index']);
        Route::get('/{id}', [ProductController::class, 'show']);
        Route::post('/store', [ProductController::class, 'store']);
        Route::patch('/{id}', [ProductController::class, 'update']);
        Route::delete('/{id}', [ProductController::class, 'delete']);
    });

    Route::group(['prefix' => 'categories'], function() {
        Route::get('/', [CategorieCustomer::class, 'index']);
        Route::get('/{id}', [CategorieCustomer::class, 'show']);
        Route::post('/store', [CategorieCustomer::class, 'store']);
        Route::patch('/{id}', [CategorieCustomer::class, 'update']);
        Route::delete('/{id}', [CategorieCustomer::class, 'delete']);
    });

    Route::group(['prefix' => 'orders'], function() {
        Route::get('/', [OrderController::class, 'index']);
        Route::get('/{id}', [OrderController::class, 'show']);
        Route::post('/store', [OrderController::class, 'store']);
        Route::patch('/{id}', [OrderController::class, 'update']);
        Route::delete('/{id}', [OrderController::class, 'delete']);
    });

    Route::group(['prefix' => 'mahasiswa'], function() {
        Route::get('/', [MahasiswaController::class, 'index']);
        Route::get('/{id}', [MahasiswaController::class, 'show']);
        Route::post('/store', [MahasiswaController::class, 'store']);
        Route::patch('/{id}', [MahasiswaController::class, 'update']);
        Route::delete('/{id}', [MahasiswaController::class, 'delete']);
    });

    Route::group(['prefix' => 'jurusan'], function() {
        Route::get('/', [JurusanController::class, 'index']);
        Route::get('/{id}', [JurusanController::class, 'show']);
        Route::post('/store', [JurusanController::class, 'store']);
        Route::patch('/{id}', [JurusanController::class, 'update']);
        Route::delete('/{id}', [JurusanController::class, 'delete']);
    });

    Route::group(['prefix' => 'nilai'], function() {
        Route::get('/', [NilaiController::class, 'index']);
        Route::get('/{id}', [NilaiController::class, 'show']);
        Route::post('/store', [NilaiController::class, 'store']);
        Route::patch('/{id}', [NilaiController::class, 'update']);
        Route::delete('/{id}', [NilaiController::class, 'delete']);
    });

    Route::group(['prefix' => 'matakuliah'], function() {
        Route::get('/', [MatakuliahController::class, 'index']);
        Route::get('/{id}', [MatakuliahController::class, 'show']);
        Route::post('/store', [MatakuliahController::class, 'store']);
        Route::patch('/{id}', [MatakuliahController::class, 'update']);
        Route::delete('/{id}', [MatakuliahController::class, 'delete']);
    });
});
