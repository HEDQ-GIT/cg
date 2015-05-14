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
//Route::get('/', 'WelcomeController@index');
//
//Route::get('home', 'HomeController@index');
//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);

get('/', 'WelcomeController@index');
get('about', 'WelcomeController@about');
get('service', 'WelcomeController@service');
get('partner', 'WelcomeController@partner');
get('contact', 'WelcomeController@contact');

get('service/prevtting', 'WelcomeController@prevtting');
get('service/consultancy', 'WelcomeController@consultancy');
get('service/delivery', 'WelcomeController@delivery');
get('service/pilotage', 'WelcomeController@pilotage');
get('service/management', 'WelcomeController@management');

get('copy', 'WelcomeController@copy');



