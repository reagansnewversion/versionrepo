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

Route::get('/', 'HomeController@home');

Route::get('/newgame', 'HomeController@newgame');

Route::post('/newgame', 'HomeController@savetrainer');

Route::get('/start', 'HomeController@start');

Route::get('/pokedex', 'DexController@index');

Route::get('/pokedex/{id}', 'DexController@show');

