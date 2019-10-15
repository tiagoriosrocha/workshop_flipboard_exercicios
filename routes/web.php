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

//gerencia as rotas de autenticação
Auth::routes();


//rota toDo
Route::get('/toDo', function(){
	return view('toDo');
});

//exibe timeline
Route::get('/home', 'HomeController@index')->name('home');


//visualizar todas as revistas
Route::get('/journals','JournalController@index');

//visualizar os detalhes de uma revista
Route::get('/journal/{journal}','JournalController@show')->name('journals.show');

//seguir uma revista
Route::get('/seguir/revista/{journal}/usuario/{user}','JournalController@follow');

//deixar de seguir uma revista
Route::get('/naoseguir/revista/{journal}/usuario/{user}','JournalController@unfollow');

//ver os detalhes de um post
Route::get('post/{post}','PostController@show');

//ver a lista de usuários
Route::get('/users','UserController@index');

//ver os detalhes de um usuario
Route::get('user/{user}','UserController@show');

//dar um like
Route::get('/curtir/post/{post}/usuario/{user}','PostController@like');

//dar um deslike
Route::get('/descurtir/post/{post}/usuario/{user}','PostController@dislike');

//marcar um post como visualizado
Route::get('/visualizado/post/{post}/usuario/{user}','PostController@visualized');
