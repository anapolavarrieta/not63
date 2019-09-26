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

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/notario', function()
{
	return View::make('notario');
});

Route::get('/directorio', function()
{
	return View::make('directorio');
});

Route::get('/servicios', function()
{
	return View::make('servicios');
});

Route::get('/ligas', function()
{
	return View::make('ligas');
});

Route::get('/contacto', function()
{
	return View::make('contacto');
});