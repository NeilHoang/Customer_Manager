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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index','StudentController@index')->name('student.index');
Route::get('/create','StudentController@create')->name('student.create');
Route::post('/store','StudentController@store')->name('student.store');
Route::get('{id}/delete','StudentController@destroy')->name('student.delete');
Route::get('/{id}/edit','StudentController@edit')->name('student.edit');
Route::post('/{id}/update','StudentController@update')->name('student.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
