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
Route::post('/welcome', 'HomeController@store');
Route::match(['get','post'],'/admin','AdminController@login');
Route::group(['middleware' =>['auth']],function (){
    Route::get('/admin/dashboard','AdminController@dashboard');
    Route::get('/logout','AdminController@logout');
    Route::match(['get','post'],'/admin/add-employee','EmployeeController@addEmployee');
    Route::get('/admin/view_employee','HomeController@viewEmployee');
    Route::match(['get','post'],'/admin/{id}/leave','HomeController@leaveEmployee')->name('leave');
    Route::post('/admin/leave','HomeController@leaveinsert');
    Route::get('/admin/message','HomeController@viewMessage');

});
