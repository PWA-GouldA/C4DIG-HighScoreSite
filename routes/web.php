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
Route::get('/home', 'Pages@welcome');
Route::get('/about', 'Pages@about');
Route::get('/contact', 'Pages@contact');


/********************************************************/
// games = the game resource
Route::resource('games', 'GameController');

Route::get('/games/{game}/delete', 'GameController@delete');

/*
 * The above is the equivalent to the following actions:
 * GET      /games              (index)
 * GET      /games/create       (create)
 * POST     /games              (store)
 * GET      /games/gameID       (show)
 * GET      /games/gameID/edit  (edit)
 * PUT      /games/gameID       (update)      [complete replacement, use patch instead]
 * PATCH    /games/gameID       (update)
 * DELETE   /games/gameID       (destroy)
 *
 * These actions are equivalent to the following Laravel code:
 * Route::get('/games', 'GameController@index');
 * Route::get('/games/{game}', 'GameController@show');
 * Route::get('/games/create', 'GameController@create');
 * Route::post('/games', 'GameController@store');
 * Route::get('/games/{game}/edit', 'GameController@edit');
 * Route::patch('/games/{game}', 'GameController@update');
 * Route::delete('/games/{game}', 'GameController@destroy');
 */


/********************************************************/
Route::get('/developers', 'DeveloperController@index');
Route::get('/developers/create', 'DeveloperController@create');

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
