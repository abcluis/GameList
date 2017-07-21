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

Route::get('/', [
    'uses' => 'GameController@getIndex',
    'as' => 'home.index'
]);


Route::get('game/create', [
    'uses' => 'GameController@getCreateGame',
    'as' => 'game.create',
    'middleware' => 'auth'
]);

Route::post('game/create', [
    'uses' => 'GameController@postCreateGame',
    'as' => 'game.create'
]);

Route::get('game/{id}', [
    'uses' => 'GameController@getGame',
    'as' => 'game.single'
]);

Route::get('delete/game/{id}', [
    'uses' => 'GameController@deleteGame',
    'as' => 'game.delete',
    'middleware' => 'creator.game'
]);

Route::get('add/favorite/{id}', [
    'uses' => 'GameController@getFavoriteGame',
    'as' => 'game.favorite',
    'middleware' => ['auth','favorite']
]);

Route::get('mygames/',[
   'uses' => 'GameController@getMyGames',
    'as' => 'game.myfavorites',
    'middleware' => ['auth']
]);
Route::get('delete/favorite/{id}', [
    'uses' => 'GameController@getNoFavoriteGame',
    'as' => 'game.nofavorite',
    'middleware' => ['auth']
]);

Route::post('game/newcomment',[
    'uses' => 'GameController@postComment',
    'as' => 'game.newcomment',
    'middleware' => ['auth']
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
