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

Route::get('/', array('as' => 'main', 'uses' => 'HomeController@mainPage'));

Route::get('landing', function()
{
    return View::make('landing');
});

/*
 * routes for user page
 */
Route::model('user', 'User');
//model for user


Route::get('user', array('as' => 'user.app', 'uses' => 'UserController@userSite'));
//admin page
Route::get('user/login', array('as' => 'login.view', 'uses' => 'UserController@login'));
//create form for logging in
Route::post('login', array('as' => 'user.login', 'uses' => 'UserController@validate'));
//form post for user validation
Route::get('user/register', array('as' => 'user.register', 'uses' => 'UserController@newForm'));
//create registration form
Route::post('user/save', array('as' => 'user.create', 'uses' => 'UserController@create'));
//save new user registration
Route::get('user/detail/{user}', array('as' => 'user.detail', 'uses' => 'UserController@userView'));
//user detail view
Route::post('user/update/{user}', array('as' => 'user.update', 'uses' => 'UserController@userUpdate'));
//form to update user
Route::get('user/delete/{user}', array('as' => 'user.delete', 'uses' => 'UserController@delete'));
//form to delete user
Route::get('user/logout', array('as' => 'user.logout', 'uses' => 'UserController@logOut'));

/*
 * routes for Enso
 *
 */
Route::get('upload', 'UploadController@home');
//create the home page for enso


Route::get('uploads/upload', array('as' => 'upload.upload', 'uses' => 'UploadController@upload'));
//create the upload view
Route::post('uploads/upload/create', array('as' => 'upload.create', 'uses' => 'UploadController@create'));
//create the form for uploading images