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

Route::get('/',[
    'uses' => 'ContactController@getContactIndex',
    'as' => 'contact.index',
]);
Route::get('/contact',[
    'uses' => 'ContactController@getContactIndex',
    'as' => 'contact.index',
]);
Route::get('/contact/add',[
    'uses' => 'ContactController@getContactAdd',
    'as' => 'contact.index',
]);

Route::group(['middleware' => ['web']], function () {

//    Route::get('/', [
//        'uses' => 'ContactController@getContactIndex',
//        'as' => 'contact.index',
//    ]);
//
//    Route::get('/contact', [
//        'uses' => 'ContactController@getContactIndex',
//        'as' => 'contact.index',
//    ]);
});
