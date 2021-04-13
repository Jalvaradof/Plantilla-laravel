<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'home')->name('home');

Route::resource('contacto', 'ContactController')
    ->parameters(['contacto' => 'contact'])
    ->names('contacts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');