<?php

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

//ver os detalhes de um usuario
Route::get('user/{user}','UserController@show');

//marcar um post como visualizado
Route::get('/visualizado/post/{post}/usuario/{user}','PostController@visualized');


//******************************************************
//******************************************************
//                 ROTAS PARA A OFICINA
//******************************************************
//******************************************************

//ver a lista de posts
/*** EXERCÍCIO 1 SEU CÓDIGO AQUI ***/

//ver os detalhes de um post
/***EXERCÍCIO 2 SEU CÓDIGO AQUI ***/

//ver a lista de usuários
/***EXERCÍCIO 3 SEU CÓDIGO AQUI ***/

//dar um like
/***EXERCÍCIO 4 SEU CÓDIGO AQUI ***/

//dar um deslike
/***EXERCÍCIO 4 SEU CÓDIGO AQUI ***/

//criar um post simples
/***EXERCÍCIO 5 SEU CÓDIGO AQUI ***/

//estatisticas (post com mais curtidas)
/***EXERCÍCIO 6 SEU CÓDIGO AQUI ***/
