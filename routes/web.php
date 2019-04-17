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
Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','DashboardController@index')->name('dashboard');

Route::get('/admin/pelayan','PelayanController@index')->name('pelayan');

Route::get('/admin/pelayan/wl','PelayanController@listWl')->name('wl');

Route::get('/pelayan','PelayanController@formPelayan')->name('addPelayan');

Route::post('/pelayan/proses/', 'PelayanController@addPelayan');
