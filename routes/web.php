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

Route::get('/', function () {
    return view('index');
});

Route::resource('homestay','HomestayController');
Route::resource('facilities','FacilitiesController');

Auth::routes();

Route::get('/logout', 'AuthController@logout');
Route::get('/home','HomeController@index')->name('home')->middleware('auth');
Route::get('/admin','AdminController@index')->name('admin')->middleware('admin');
Route::get('/owner','OwnerController@index')->name('owner')->middleware('owner');
Route::get('/visitor','VisitorController@index')->name('visitor')->middleware('visitor');

Route::get('/infoaccount', 'VisitorController@info')->name('infoaccount')->middleware('VisitorMiddleware');