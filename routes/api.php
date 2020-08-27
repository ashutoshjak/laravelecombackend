<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController; 

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

// catgories start
Route::get('categories','Api\CategoryController@index');
// categories end

// sliders start
Route::get('sliders','Api\SliderController@index');
// sliders end

// product start
Route::get('products','Api\ProductController@index');
Route::get('get-all-hot-products','Api\ProductController@getAllHotProducts');
Route::get('get-all-new-products','Api\ProductController@getAllNewProducts');
Route::get('get-products-by-category/{categoryId}','Api\ProductController@getProductsByCategoryId');
// product end


