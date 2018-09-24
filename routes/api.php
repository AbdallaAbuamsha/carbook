<?php

use Illuminate\Http\Request;

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

Route::apiResource("car", "CarController");

Route::get("brands", "BrandController@index");
Route::get("colors", "ColorsController@index");
Route::get("models", "ModelController@index");
Route::get("models/{id}", "ModelController@show");
Route::get("features", "FeatureController@index");
Route::get("fuel_types", "FuelTypeController@index");
Route::get("styles", "StyleController@index");
Route::get("statuses", "StatusController@index");
