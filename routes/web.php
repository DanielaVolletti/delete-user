<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'UtentiController@index')->name('home');
Route::get('/utente/{id}', 'UtentiController@show')->name('showUtente');
Route::get('/deleteUtente/{id}', 'UtentiController@delete')->name('deleteUtente');
