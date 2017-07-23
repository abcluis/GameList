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

/*
 * ROUTES GAMES
 */

// INDEX

Route::get('/', [
    'uses' => 'GameController@index',
    'as' => 'home.index'
]);

// CREATE

Route::get('games/create', [
    'uses' => 'GameController@create',
    'as' => 'games.create',
    'middleware' => 'auth'
]);


// STORE

Route::post('games', [
    'uses' => 'GameController@store',
    'as' => 'games.store'
]);

// SHOW

Route::get('games/{game}', [
    'uses' => 'GameController@show',
    'as' => 'games.show'
]);

// DESTROY

Route::delete('games/{game}', [
    'uses' => 'GameController@destroy',
    'as' => 'games.destroy',
    'middleware' => 'creator.game'
]);

/*
 * ROUTES FAVORITES
 */

// INDEX

Route::get('favorites/',[
    'uses' => 'FavoriteController@index',
    'as' => 'favorites.index',
    'middleware' => ['auth']
]);

// STORE

Route::post('favorites/', [
    'uses' => 'FavoriteController@store',
    'as' => 'favorites.store',
    'middleware' => ['auth','favorite']
]);

// DESTROY

Route::delete('favorites/{id}', [
    'uses' => 'FavoriteController@destroy',
    'as' => 'favorites.destroy',
    'middleware' => ['auth']
]);

/*
 * ROUTE COMMENTS
 */

// STORE

Route::post('games/{game}/comments',[
    'uses' => 'CommentController@store',
    'as' => 'comments.store',
    'middleware' => ['auth']
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
