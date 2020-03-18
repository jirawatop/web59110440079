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
    return view('welcome');
});

// Route::resource('/setdata','UsersController');
// Route::get('/profile','UserController@profile');
// Route::post('profile','UserController@update_avatar');
Route::get('/delete/{id}','HomeController@deletepost')->name('delete.post');
Auth::routes();

Route::get('/delete','HomeController@amindelete')->name('delete');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products','HomeController@products');
Route::get('/products/{id}','HomeController@products')->name('products');
Route::post('post','HomeController@stor')->name('post');

//Route for normal user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
});
//Route for admin
Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => ['admin']], function(){
        Route::get('/dashboard', 'admin\AdminController@index');
    });
});

