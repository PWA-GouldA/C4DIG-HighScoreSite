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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/l/404',function(){return view('layouts.404');});
Route::get('/l/blank',function(){return view('layouts.blank');});
Route::get('/l/buttons',function(){return view('layouts.buttons');});
Route::get('/l/cards',function(){return view('layouts.cards');});
Route::get('/l/charts',function(){return view('layouts.charts');});
Route::get('/l/forgot-password',function(){return view('layouts.forgot-password');});
Route::get('/l/index',function(){return view('layouts.index');});
Route::get('/l/login',function(){return view('layouts.login');});
Route::get('/l/register',function(){return view('layouts.register');});
Route::get('/l/tables',function(){return view('layouts.tables');});
Route::get('/l/utilities-animation',function(){return view('layouts.utilities-animation');});
Route::get('/l/utilities-border',function(){return view('layouts.utilities-border');});
Route::get('/l/utilities-color',function(){return view('layouts.utilities-color');});
Route::get('/l/utilities-other',function(){return view('layouts.utilities-other');});
