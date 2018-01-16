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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tickets/new', 'HomeController@newtick')->name('createticket');
Route::post('/ticket/create', 'HomeController@createtick');
Route::get('/tickets', 'HomeController@tick')->name('userticket');
Route::get('/ticket/open/{id}', 'HomeController@opentick');
Route::post('/ticket/reply', 'HomeController@replytick');

Route::get('/staff/home', 'StaffController@index');
Route::get('/staff/tickets', 'StaffController@tick')->name('staffticket');
Route::get('/staff/ticket/open/{id}', 'StaffController@opentick');
Route::post('/ticket/reply', 'StaffController@replytick');