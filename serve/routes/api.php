<?php

use Illuminate\framework\factory\Route;
use App\controllers\seller\ApiController as SellerApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application.
|
*/

Route::get('/api/product-category', [SellerApiController::class, 'getProductCategory']);
Route::get('/api/attribute-option/{param}', [SellerApiController::class, 'getAttributeOption']);
Route::post('/api/product/new', [SellerApiController::class, 'store']);
Route::post('/api/product/edit', [SellerApiController::class, 'update']);
Route::get('/api/product/list/all',  [SellerApiController::class, 'index']);
Route::get('/api/product/list/all/{param}',  [SellerApiController::class, 'searchByName']);
Route::get('/api/product/list/out-of-stock',  [SellerApiController::class, 'outOfStock']);
Route::post('/api/product/delete/{param}',  [SellerApiController::class, 'softDelete']);