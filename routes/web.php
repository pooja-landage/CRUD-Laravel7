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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('category','CategoryController@getCategories')->name('category.form');
Route::post('category/submit','CategoryController@submitForm')->name('category.submit');
Route::get('category/table','CategoryController@gettable')->name('category.table');
Route::get('category/edit/form/{id}','CategoryController@edit')->name('category.edit');
Route::put('category/update/form/{id}','CategoryController@update')->name('category.form.update');
Route::get('category/delete/form/{id}','CategoryController@deleteform')->name('category.form.delete');

Route::get('product','ProductController@getForm')->name('product.form');
Route::post('product/submit','ProductController@submitForm')->name('product.form.submit');
Route::get('product/table','ProductController@gettable')->name('product.table');
Route::get('product/edit/form/{id}','ProductController@editform')->name('product.form.edit');
Route::put('product/update/form/{id}','ProductController@updateform')->name('product.form.update');
Route::get('product/delete/form/{id}','ProductController@deleteform')->name('product.form.delete');

Route::get('/','FrontController@index')->name('index');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/service', function () {
    return view('service');
});