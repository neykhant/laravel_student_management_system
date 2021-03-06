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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", "studentController@index");
Route::get("/create", "studentController@create");
Route::post("/store", "studentController@store");
Route::get("/edit/{id}", "studentController@edit");
Route::get("/show/{id}", "studentController@show");
Route::post("/update/{id}", "studentController@update");
Route::delete("/delete/{id}", "studentController@destroy");



Route::get('/home', 'HomeController@index')->name('home');

//authentication
Route::get('/admin/registershow', 'Auth\RegisterController@showRegistrationForm')->name('registershow');
Route::post('/admin/registerstore', 'Auth\RegisterController@register');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/admin/login', 'Auth\LoginController@login')->name('login');
