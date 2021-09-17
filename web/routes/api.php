<?php

use App\Http\Controllers\API\Customer;
use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\v1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function(){
    Route::apiResource('customer',v1\PostController::class);

    // Route::apiResource('customer',v1\PostController::class)->only(['create']);
    
    Route::apiResource('category',v1\CategoryPostController::class)->only('create','store','show','index');

    Route::apiResource('category',v1\CategoryPostController::class)->only('update','destroy');

    Route::apiResource('post',v1\PostStoriesController::class)->only('create','store','show','index');

    Route::apiResource('post',v1\PostStoriesController::class)->only('update','destroy');

    Route::apiResource('danhmuc',v1\DanhMuc::class)->only('create','store','show','index');

    Route::apiResource('danhmuc',v1\DanhMuc::class)->only('update','destroy');

});

Route::prefix('v2')->group(function(){});