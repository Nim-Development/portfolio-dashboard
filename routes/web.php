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

Route::get('/add', 'ProjectsController@add')->name('add.project');;
Route::post('/add', 'ProjectsController@new')->name('new.project');

Route::get('/edit/{id}', 'ProjectsController@single')->name('single.project');
Route::put('/edit/{id}', 'ProjectsController@edit')->name('edit.project');;

Route::get('/list', 'ProjectsController@list')->name('list');

Route::get('/image', 'ImageController@view')->name('image.view');
Route::post('/image', 'ImageController@upload')->name('upload.image');