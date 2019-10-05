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

Route::get('/journals','JournalController@index');
Route::get('/journals/{journal}','JournalController@show')->name('journals.show');



Route::get('/seguir','JournalController@seguir');

Route::get('/user', function () {
    $user = App\User::find(1)->with('seguindo');
    dd($user);
});