<?php

// Home
Route::get('/', [
	'uses' => 'HomeController@index', 
	'as' => 'home'
]);

// Acerca de Nosotros
Route::get('acerca', 'AcercaController@Acerca');

// Portafolio
Route::get('galeria', 'PostController@galeria');

// Servicios
Route::get('servicios','ServiciosController@servicios');

// Admin
Route::get('admin', [
	'uses' => 'AdminController@admin',
	'as' => 'admin',
	'middleware' => 'admin'
]);

// Contact
Route::resource('contact', 'ContactController', [
	'except' => ['show', 'edit']
]);

Route::resource('posts', 'PostController', [
	'except' => ['show', 'edit']
]);

Route::delete('post/destroy/{id}', [
	'uses' => 'PostController@destroy', 
	'as' => 'post.destroy'
]);

Route::post('post/store', [
	'uses' => 'PostController@store', 
	'as' => 'post.store'
]);

Route::get('post/create', [
	'uses' => 'PostController@create', 
	'as' => 'post.create'
]);

Route::get('post/edit/{id}', 'PostController@edit')->name('post.edit');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/confirm/{token}', 'Auth\AuthController@getConfirm');
