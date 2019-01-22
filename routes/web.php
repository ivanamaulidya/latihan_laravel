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

Route::get('/lemot', function () {
    echo "kenapa kok lemot?";
});

Route::get('/home', function () {
    return "disini omah";
});

Route::get('/sama', function () {
    return "sama saja sami mawon omah";
});

Route::get('/pohong', function () {
    return view ('telo');
});

//pakai kontroller
//capung dengan fungsi pujangga
Route::get('/brokoli','CapungController@pujangga');

Route::get('/brokoli/dewa','CapungController@siti');

//sekarang bikin route untuk customer
Route::get('/Customer', 'CustomerController@index');

//bikin yang supplier
Route::get('/Supplier', 'SupplierController@index');

Route::get('/Employee', 'EmployeeController@index');

Route::resource('Customer','CustomerController');

Route::resource('Supplier','SupplierController');

Route::resource('Employee','EmployeeController');
