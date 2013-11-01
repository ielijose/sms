<?php
/*
Route::get('/', function()
{
	return View::make('home');
});

Route::get('/listas', function()
{
	return View::make('lists');
});

Route::get('/mensajes', function()
{
	return View::make('messages');
});

Route::get('/login', function()
{
	return View::make('login');
});
*/


/* */


//Pagina principal donde está el formulario de identificación
Route::get('/', ['before' => 'auth', function(){
    return View::make('home');
}]);
Route::get('/login', ['before' => 'guest', function(){
    return View::make('login');
}]);
//Página oculta donde sólo puede ingresar un usuario identificado
Route::get('/home', ['before' => 'auth', function(){
    return View::make('home');
}]);
//Procesa el formulario e identifica al usuario
Route::post('/login', ['uses' => 'AuthController@doLogin', 'before' => 'guest']);
//Desconecta al usuario
Route::get('/logout', ['uses' => 'AuthController@doLogout', 'before' => 'auth']);