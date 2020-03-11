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
    return redirect()->route('project.index');
});


Auth::routes();

// name
Route::get('/index', 'PagesController@index')->name('index');
Route::get('/personal', 'PagesController@personal')->name('personal');


// Route::get('/admin', 'LoginAdminController@index')->name('admin');
// Route::post('/adminlogin', 'LoginAdmin@MakeLogin')->name('adminlogin');

Route::get('/admin/login', 'LoginAdmin@showLogin')->name('showAdminLogin');
Route::post('/admin/login', 'LoginAdmin@doLogin')->name('doAdminLogin');


// name
Route::get('/home', 'HomeController@index')->name('home');





Route::resource('/project', 'ProjectController');

Route::view('/upload', 'upload');
Route::post('/uploadfile', 'ProjectController@uploadfile');

Route::get('/project/{id}/list', 'TaskController@index')->name('task.index');
Route::get('/project/{project_id}/task/create', 'TaskController@create')->name('task.create');
Route::post('/project/{project_id}/task/store', 'TaskController@store')->name('task.store');
Route::get('/task/{id}/edit', 'TaskController@edit')->name('task.edit');
Route::put('/task/{id}/update', 'TaskController@update')->name('task.update');
Route::delete('/task/{id}/destroy', 'TaskController@destroy')->name('task.destroy');


