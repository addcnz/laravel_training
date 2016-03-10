<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get("/phpinfo.php",function(){
    echo phpinfo();
});

Route::get('/', 'HousingController@home');

//Route::get('/layout-zhang.html', 'HousingController@layout');

//Route::get('/', 'HousingController@index');

Route::get("eloquent_test.html","FlightController@store");
Route::get("eloquent_test_update.html","FlightController@update");
//queries 查詢構造器
Route::get("db_index.html","FlightController@index");
//orm
Route::get("orm_index.html","FlightController@create");

