<?php

Route::get('/', ['before' => 'guest', function(){
    return View::make('login');
}]);

Route::get('/login', ['before' => 'guest', function(){
    return View::make('login');
}]);

Route::post('/login', ['uses' => 'AuthController@doLogin', 'before' => 'guest']);
Route::get('/logout', ['uses' => 'AuthController@doLogout', 'before' => 'auth']);


/* APP */

Route::get('/app', ['before' => 'auth', function(){
    return View::make('home');
}]);

Route::get('/listas', ['uses' => 'ListsController@index', 'before' => 'auth']);
Route::post('/listas', ['uses' => 'ListsController@post_list', 'before' => 'auth']);

Route::get('/lista/{id}', ['uses' => 'ListsController@get_list', 'before' => 'auth']);

Route::get('/contact/{id}/delete', ['uses' => 'ContactsController@delete', 'before' => 'auth']);



/*
Route::get('/listas', ['before' => 'auth', function(){
    return View::make('lists');
}]);

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

