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

Route::get('/home', 'MedicineController@index')->name('home');

Route::get('/delete/{id}','MedicineController@delete');

Route::post('/add','MedicineController@store');

Route::post('/update/{id}','MedicineController@update');

Route::get('/show/{id}','MedicineController@show');