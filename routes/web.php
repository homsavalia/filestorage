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
Route::get('/company-add', 'Company\CompanyController@index');
Route::get('/display-list', 'Company\CompanyController@company_list');
Route::post('company-store', 'Company\CompanyController@company_store');
Route::get('/company-delete/{id}', 'Company\CompanyController@company_delete');
Route::get('/company-view/{id}', 'Company\CompanyController@company_view');
Route::get('/company-edit/{id}', 'Company\CompanyController@company_edit');
Route::put('/company-update/{id}', 'Company\CompanyController@company_update');
// customer

Route::get('/customer-add', 'Customer\CustomerController@index');
Route::post('customer-store', 'Customer\CustomerController@customer_store');
Route::get('display-list', 'Customer\CustomerController@customer_list');
Route::get('/customer-view/{id}', 'Customer\CustomerController@customer_view');
Route::get('/customer-delete/{id}', 'Customer\CustomerController@customer_delete');
Route::get('/customer-edit/{id}', 'Customer\CustomerController@customer_edit');
Route::put('/customer-update/{id}', 'Customer\CustomerController@customer_update');

//country
Route::get('countries', 'CountryController@countries');
Route::get('states/{id}', 'CountryController@states');
/*
Route::get('/registration', function () {
    return view('auth.registration');
});




*/