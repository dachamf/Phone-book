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
    'uses' => 'ContactController@index',
    'as' => 'contact.index',
]);
Route::get('/contact',[
    'uses' => 'ContactController@index',
    'as' => 'contact.index',
]);
Route::get('/contact/create',[
    'uses' => 'ContactController@create',
    'as' => 'contact.create',
]);
Route::post('/contact',[
    'uses' => 'ContactController@store',
    'as' => 'contact.store',
]);
Route::get('/contact/{id}/edit',[
    'uses' => 'ContactController@edit',
    'as' => 'contact.edit',
]);

Route::delete('/contact/{id}',[
    'uses' => 'ContactController@delete',
    'as' => 'contact.delete',
]);

Route::patch('/contact/{id}',[
    'uses' => 'ContactController@update',
    'as' => 'contact.update',
]);

Route::post('/contact/search', [
    'uses' => 'ContactController@executeSearch',
    'as' => 'contact.search',
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
