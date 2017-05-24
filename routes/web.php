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
Route::get('/getOrders', 'OrderController@getOrders');
Route::get('/getOrdersFin', 'OrderController@getOrdersFin');
Route::get('/orderRegister', 'OrderController@orderRegister');
Route::get('/orderRegister', 'OrderController@getData');
Route::post('/orderSet', 'OrderController@orderSet');

Route::get('orderUpdate/{id}/{status}', 'OrderController@orderUpdate');

Route::get('orderDelete/{id}', 'OrderController@orderDelete');
Route::get('/generatePDF/{id}', 'OrderController@generatePDF');
Route::get('sendEmail', 'OrderController@sendEmail');

//Employee
Route::get('/employee', 'EmployeeController@getEmployee');
Route::get('/employeeRegister', 'EmployeeController@employeeRegister');
Route::post('/employeeSet', 'EmployeeController@employeeSet');
Route::get('employeeDelete/{id}', 'EmployeeController@employeeDelete');
Route::get('employeeDetail/{id}', 'EmployeeController@employeeDetail');
Route::post('employeeUpdate/{id}', 'EmployeeController@employeeUpdate');

//Client
Route::get('/client', 'ClientController@getClient');
Route::get('/clientRegister', 'ClientController@clientRegister');
Route::post('/clientSet', 'ClientController@clientSet');
Route::get('clientDelete/{id}', 'ClientController@clientDelete');
Route::get('clientDetail/{id}', 'ClientController@clientDetail');
Route::post('clientUpdate/{id}', 'ClientController@clientUpdate');


//Admin
Route::get('/admin', 'AdminController@getAdmin');
Route::get('/getAdmin', 'AdminController@getAdmin');
Route::get('/adminRegister', 'AdminController@adminRegister');
Route::post('/adminSet', 'AdminController@adminSet');
Route::get('adminDetail/{id}', 'AdminController@adminDetail');
Route::post('adminUpdate/{id}', 'AdminController@adminUpdate');
Route::get('adminDelete/{id}', 'AdminController@adminDelete');
