<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/users', 'UserController@user');
Route::get('/adduser', 'UserController@add_user');
Route::post('/createuser', 'UserController@create');
Route::get('/user/{id}/delete', 'UserController@delete');
// Tender
Route::get('/tender', 'TenderController@tender');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
