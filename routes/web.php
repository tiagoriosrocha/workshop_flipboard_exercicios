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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//visualizar todas as revistas
Route::get('/journals','JournalController@index');

//visualizar os detalhes de uma revista
Route::get('/journals/{journal}','JournalController@show')->name('journals.show');

//seguir uma revista
Route::get('/seguir/revista/{journal}/usuario/{user}','JournalController@follow');

//deixar de seguir uma revista
Route::get('/naoseguir/revista/{journal}/usuario/{user}','JournalController@unfollow');