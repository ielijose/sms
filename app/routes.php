<?php

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