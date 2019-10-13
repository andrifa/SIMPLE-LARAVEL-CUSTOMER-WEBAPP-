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
    return view('welcome');
});

Route::get('/create-customer', 'CostumerController@create');
Route::post('/create-customer', 'CostumerController@create_post');
Route::get('/get-customer', 'CostumerController@get');
Route::get('/edit-customer/{id}',['as'=>'edit','uses'=>'CostumerController@edit']);
Route::post('/edit-customer/{id}',['as'=>'edit_post','uses'=>'CostumerController@edit_post']);

Route::get('/delete-customer/{id}',['as'=>'delete','uses'=>'CostumerController@delete']);
