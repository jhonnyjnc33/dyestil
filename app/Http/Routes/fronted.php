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

Route::group(['prefix' => '/','namespace' => 'Fronted'],function(){
	Route::get('/',['as' => 'home','uses' => 'HomeController@index']);
	Route::get('/about',['as' => 'about','uses' => 'HomeController@about']);
	Route::get('/contacto',['as' => 'contact','uses' => 'HomeController@contact']);
});