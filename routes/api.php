<?php

use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CategorieCustomer;
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
});
