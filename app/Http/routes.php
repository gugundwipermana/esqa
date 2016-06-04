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

Route::get('/', function () {
    return view('app');
});

Route::auth();

Route::get('/home', 'HomeController@index');


/**
 * ------------------------------------------------------------------
 * API
 *
 */

Route::group(['prefix' => 'api/v1'], function() {

    Route::get('products/relateds', 'Api\ProductsController@relateds');
    Route::get('products/vote/{slug}', 'Api\ProductsController@vote');

    Route::resource('categories', 'Api\CategoriesController');
    Route::resource('products', 'Api\ProductsController');
    Route::resource('colors', 'Api\ColorsController');
    Route::resource('subimages', 'Api\SubimagesController');
    Route::resource('votes', 'Api\VotesController');

    Route::resource('infos', 'Api\InfosController');
    Route::resource('abouts', 'Api\AboutsController');
    Route::resource('contacts', 'Api\ContactsController');

    Route::resource('orders', 'Api\OrdersController');
    Route::resource('orderdetails', 'Api\OrderdetailsController');
});