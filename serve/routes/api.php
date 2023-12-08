<?php

use Illuminate\framework\factory\Route;
use App\controllers\API\ProductController;
use App\controllers\API\AttributeOptionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application.
|
*/

Route::get('/api/product-category', [ProductController::class, 'getProductCategory']);
Route::get('/api/product', [ProductController::class, 'getProduct']);
Route::get('/api/product-detail', [ProductController::class, 'getProductDetail']);
Route::get('/api/product-media', [ProductController::class, 'getProductMedia']);
Route::get('/api/product-more', [ProductController::class, 'getProductMore']);
Route::get('/api/product-configuration', [ProductController::class, 'getProductConfiguration']);
Route::get('/api/product-variation', [ProductController::class, 'getProductVariation']);
Route::get('/api/attribute-option/{param}', [AttributeOptionController::class, 'getAttributeOption']);
Route::post('/api/product/new', [ProductController::class, 'store']);
Route::post('/api/product/edit', [ProductController::class, 'update']);
Route::get('/api/product/list/all/{param}',  [ProductController::class, 'searchByName']);
Route::post('/api/product/delete/{param}',  [ProductController::class, 'softDelete']);
Route::get('/api/product/{param}', [ProductController::class, 'showProduct']);
Route::get('/api/product-detail/{param}', [ProductController::class, 'showProductDetail']);