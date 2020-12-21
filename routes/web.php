<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/', function () {
    return view('home');
}); */

// Route::get('/', 'TestController@index');

Route::get('/categories', 'TestController@categories');

// Route::get('/{category}', 'TestController@category');
Route::get(
    '/{category?}',
    'TestController@category'
)->where('category', '[A-Za-z-]{1,50}');

Route::get('/{category}/products', 'TestController@products');

Route::get('/{category}/{product}', 'TestController@product');