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

Route::get('/', function() {
    return view('index');
});

//shirts + single shirt
Route::get('/shirts', 'ShirtsController@index');
Route::get('/shirts/{id}', 'ShirtsController@show');

//search bar and filters
Route::get('/search', 'ShirtsController@index');
Route::get('/filter', 'ShirtsController@filter');

//CRUD operations
Route::get('/admin', 'ShirtsController@adminIndex');

Route::get('/admin/create', 'ShirtsController@create');
Route::post('/admin/create', 'ShirtsController@store');

Route::get('/admin/edit/{id}', 'ShirtsController@edit');
Route::post('/admin/edit/{id}', 'ShirtsController@update');

Route::delete('/admin/delete/{id}', 'ShirtsController@destroy');




Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});
