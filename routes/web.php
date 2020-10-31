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

Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker');


/* Admin Panel */

Route::get('/admin', 'Admin\AdminController@admin')->name('admin.login');
Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {

    Route::get('/index', 'Admin\AdminController@index')->name('index');
    Route::get('/users', 'Admin\AdminController@users')->name('users');
    Route::get('/orders', 'Admin\AdminController@orders')->name('orders');
    Route::get('/goods', 'Admin\AdminController@goods')->name('goods');
    Route::get('/catalog', 'Admin\AdminController@catalog')->name('catalog');
    Route::get('/guests', 'Admin\AdminController@guests')->name('guests');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
