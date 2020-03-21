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

// Index 
Route::get('/index', 'PagesController@index')->name('index');
Route::get('/admin/index', 'AdminController@indexAdmin')->name('indexAdmin');

// About Department
// --- เกี่ยวกับภาควิชา
Route::get('/aboutDepartment', 'PagesController@aboutDepartment')->name('aboutDepartment');
Route::get('/admin/aboutDepartment', 'AdminController@aboutDepartment_Admin')->name('aboutDepartment_Admin');
Route::get('/admin/aboutDepartmentAdd', 'AdminController@aboutDepartment_Add')->name('aboutDepartment_Add');
Route::get('/admin/aboutDepartmentEdit', 'AdminController@aboutDepartment_Edit')->name('aboutDepartment_Edit');
// --- พันธกิจ วิสัยทัศน์
Route::get('/mission', 'PagesController@mission')->name('mission');
Route::get('/admin/mission', 'AdminController@mission_Admin')->name('mission_Admin');
Route::get('/admin/missionAdd', 'AdminController@mission_Add')->name('mission_Add');
Route::get('/admin/missionEdit', 'AdminController@mission_Edit')->name('mission_Edit');
// --- ข่าวสารประชาสัมพันธ์
Route::get('/news', 'PagesController@news')->name('news');
Route::get('/newsDetail', 'PagesController@newsDetail')->name('newsDetail');
Route::get('/admin/news', 'AdminController@news_Admin')->name('news_Admin');
Route::get('/admin/newsAdd', 'AdminController@news_Add')->name('news_Add');
Route::get('/admin/newsEdit', 'AdminController@news_Edit')->name('news_Edit');

// personal
// --- บุคลากร
Route::get('/personal', 'PagesController@personal')->name('personal');
Route::get('/admin/personal', 'AdminController@personal_Admin')->name('personal_Admin');
Route::get('/admin/personalAdd', 'AdminController@personal_Add')->name('personal_Add');
Route::get('/admin/personalEdit', 'AdminController@personal_Edit')->name('personal_Edit');

// course
// --- หลักสูตรอุตสากรรม
Route::get('/industry', 'PagesController@industry')->name('industry');




// Route::get('/admin', 'LoginAdminController@index')->name('admin');
// Route::post('/adminlogin', 'LoginAdmin@MakeLogin')->name('adminlogin');

// Route::get('/admin/login', 'LoginAdmin@showLogin')->name('showAdminLogin');
// Route::post('/admin/login', 'LoginAdmin@doLogin')->name('doAdminLogin');







// Route::resource('/project', 'ProjectController');

// Route::view('/upload', 'upload');
// Route::post('/uploadfile', 'ProjectController@uploadfile');

// Route::get('/project/{id}/list', 'TaskController@index')->name('task.index');
// Route::get('/project/{project_id}/task/create', 'TaskController@create')->name('task.create');
// Route::post('/project/{project_id}/task/store', 'TaskController@store')->name('task.store');
// Route::get('/task/{id}/edit', 'TaskController@edit')->name('task.edit');
// Route::put('/task/{id}/update', 'TaskController@update')->name('task.update');
// Route::delete('/task/{id}/destroy', 'TaskController@destroy')->name('task.destroy');


