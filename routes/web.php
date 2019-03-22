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

/********************************************************/
Route::get('/', function () { return view('home'); });
Route::get('/home', function () { return view('welcome'); });
Route::get('/about', function () { return view('about'); });
Route::get('/contact', function () { return view('contact'); });


/********************************************************/
Route::get('/games', 'GameController@index');

/********************************************************/
Route::get('/developers', 'DeveloperController@index');

/********************************************************/

/********************************************************/


/********************************************************/
Route::get('/layout/',function(){return view('layouts.layout');});


/********************************************************/
Route::get('/l/404',function(){return view('samples.404');});
Route::get('/l/blank',function(){return view('samples.blank');});
Route::get('/l/buttons',function(){return view('samples.buttons');});
Route::get('/l/cards',function(){return view('samples.cards');});
Route::get('/l/charts',function(){return view('samples.charts');});
Route::get('/l/forgot-password',function(){return view('samples.forgot-password');});
Route::get('/l/index',function(){return view('samples.index');});
Route::get('/l/login',function(){return view('samples.login');});
Route::get('/l/register',function(){return view('samples.register');});
Route::get('/l/tables',function(){return view('samples.tables');});
Route::get('/l/utilities-animation',function(){return view('samples.utilities-animation');});
Route::get('/l/utilities-border',function(){return view('samples.utilities-border');});
Route::get('/l/utilities-color',function(){return view('samples.utilities-color');});
Route::get('/l/utilities-other',function(){return view('samples.utilities-other');});
