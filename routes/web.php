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

Route::get('/users/create', 'App\Http\Controllers\UserController@createUser');
//route to create a user 
Route::post('/users/create', 'App\Http\Controllers\UserController@saveUser')->name('createUser');
//route to show all user 
Route::get('/users', 'App\Http\Controllers\UserController@showUsers')->name('showusers');
//route to show the user data 
Route::get('/users/view/{id}', 'App\Http\Controllers\UserController@viewUser')->name('viewuser');
//route to update the user data 
Route::post('/users/update/{id}', 'App\Http\Controllers\UserController@updateUser')->name('updateuser');
//route to delete the user 
Route::post('/users/delete/{id}', 'App\Http\Controllers\UserController@deleteUser')->name('deleteuser');
