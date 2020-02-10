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
Route::get('/course/{id}', 'CourseController@index')->name('course');
Route::get('/permissions','PermissionsController@index')->name('permissions');
Route::get('/permissions/{user}/{role}','PermissionsController@edit')->name('permissions.edit');
