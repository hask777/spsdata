<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@index')->name('main');
Route::get('/competition/{id}', 'MainController@show')->name('comp_detail');
Route::get('/rounds/{roundsid}', 'MainController@rounds')->name('rounds');
Route::get('/game/{id}', 'MainController@show_game')->name('game');

Route::get('/teams', 'MainController@teams')->name('teams');
Route::get('/team/{teamid}', 'MainController@team')->name('team');
Route::get('/team/{teamid}/round/{roundid}', 'MainController@show_team')->name('team_detail');
Route::get('/player/{playerid}', 'MainController@player')->name('player');