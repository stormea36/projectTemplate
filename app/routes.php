<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('landing');
});

Route::get('users', function()
{
	return View::make('users');
});

Route::get('product/edit', array('as' => 'product.edit', 'uses' => 'ProductController@newForm'));

//post method to capture data and save in JSON form
Route::post('ajax/save', array('as' => 'ajax.save', 'uses' => 'DataController@ajaxSave'));