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

//admin
Route::get('/admin/index','Admin\AdminController@index')->name('index');
//category
Route::get('/admin/category/index','Admin\CategoryController@index')->name('category');
//product
Route::get('/admin/product/index','Admin\ProductController@index')->name('product');
//menu
Route::get('/admin/menu/index','Admin\MenuController@index')->name('menu');
Route::post('/admin/menu/create','Admin\MenuController@create')->name('create');
Route::get('/admin/menu/edit/{id}','Admin\MenuController@edit');
Route::post('/admin/menu/update/{id}','Admin\MenuController@update');
Route::get('/admin/menu/delete/{id}','Admin\MenuController@delete');

//user
Route::get('/admin/user/index','User@index')->name('user');
//body
Route::get('/admin/body/index','Body@index')->name('body');
//source
Route::get('/admin/source/index','Source@index')->name('source');
//header
Route::get('/admin/header/index','Header@index')->name('header');
//type
Route::get('/admin/type/index','Type@index')->name('type');



Auth::routes();
Route::get ('/about','HomeController@about');
Route::get('/home', 'HomeController@index')->name('home');

