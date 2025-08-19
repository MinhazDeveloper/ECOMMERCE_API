<?php

use Database\Factories\ProductFactory;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewsController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('product', ProductController::class);

Route::group(['prefix'=>'prdct'],function(){
    Route::apiResource('/{product}/reviews',ReviewsController::class);
});