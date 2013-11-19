<?php
/* LOGIN */
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

/* LISTAS */
Route::get('/listas', ['uses' => 'ListsController@index', 'before' => 'auth']);
Route::post('/listas', ['uses' => 'ListsController@post_list', 'before' => 'auth']);
Route::get('/lista/{id}', ['uses' => 'ListsController@get_list', 'before' => 'auth']);

/* CONTACTOS */
Route::get('/contact/{id}/delete', ['uses' => 'ContactsController@delete', 'before' => 'auth']);
Route::post('/contact/{id}', ['uses' => 'ContactsController@post_add', 'before' => 'auth']);
Route::get('/contact/{id}/edit', ['uses' => 'ContactsController@get_edit', 'before' => 'auth']);
Route::get('/contact/{id}/json', ['uses' => 'ContactsController@get_json', 'before' => 'auth']);
Route::put('/contact/{id}', ['uses' => 'ContactsController@put_edit', 'before' => 'auth']);

/* MENSAJES */
Route::get('/mensajes/{id}', ['uses' => 'MessagesController@get_list', 'before' => 'auth']);
Route::post('/mensajes/{id}', ['uses' => 'MessagesController@send_message', 'before' => 'auth']);
Route::get('/send', ['uses' => 'MessagesController@send', 'before' => 'auth']);
