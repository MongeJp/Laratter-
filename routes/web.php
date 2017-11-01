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

Route::get('/', 'pagesController@Home');
// Route::get('messages/{{message}}', 'MessagesController@show');
Route::get('/messages/{message}', 'MessagesController@show');
