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

Route::get('/home', 'HomeController@index');

//Order
Route::get('/order', 'OrderController@getOrders');
Route::get('/orderRegister', 'OrderController@orderRegister');
Route::get('/orderRegister', 'OrderController@getData');
Route::post('/orderSet', 'OrderController@orderSet');

//Employee
Route::get('/employee', 'EmployeeController@index');
Route::get('/employeeRegister', 'EmployeeController@employeeRegister');

//Client
Route::get('/client', 'ClientController@index');
Route::get('/clientRegister', 'ClientController@clientRegister');

//Admin
Route::get('/admin', 'AdminController@getAdmin');
Route::get('/adminRegister', 'AdminController@adminRegister');
Route::post('/adminSet', 'AdminController@adminSet');
Route::get('adminDetail/{id}', 'AdminController@adminDetail');
Route::post('adminUpdate/{id}', 'AdminController@adminUpdate');
Route::get('adminDelete/{id}', 'AdminController@adminDelete');
