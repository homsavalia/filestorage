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


// admin1
Route::get('/', 'Auth\LoginController@login');
Route::post('/logincheck', 'Auth\LoginController@logincheck');
Route::post('/dashboard', 'Admin\DashboardController@index');

// company
Route::get('/company-add', 'Admin\CompanyController@index');
Route::get('/company-list', 'Admin\CompanyController@company_list');
Route::post('company-store', 'Admin\CompanyController@company_store');
Route::get('/company-delete/{id}', 'Admin\CompanyController@company_delete');
Route::get('/company-view/{id}', 'Admin\CompanyController@company_view');
Route::get('/company-edit/{id}', 'Admin\CompanyController@company_edit');
Route::put('/company-update/{id}', 'Admin\CompanyController@company_update');
Route::get('/company-customerid', 'Admin\CompanyController@company_customerid');
Route::post('/company-fileuploade', 'Admin\CompanyController@company_fileuploade');
// customer

Route::get('/customer-add', 'Company\CustomerController@index');
Route::post('customer-store', 'Company\CustomerController@customer_store');
Route::get('display-list', 'Company\CustomerController@customer_list');
Route::get('/customer-view/{id}', 'Company\CustomerController@customer_view');
Route::get('/customer-delete/{id}', 'Company\CustomerController@customer_delete');
Route::get('/customer-edit/{id}', 'Company\CustomerController@customer_edit');
Route::put('/customer-update/{id}', 'Company\CustomerController@customer_update');
Route::get('/file-downlode', 'Company\CustomerController@file_downlode');
//country
Route::get('countries', 'CountryController@countries');
Route::get('states/{id}', 'CountryController@states');
/*
Route::get('/registration', function () {
    return view('auth.registration');
});




*/