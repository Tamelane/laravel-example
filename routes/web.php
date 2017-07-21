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
    return view('index', ['active_menu' => 'home']);
})->name('home');

Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/product/{id}', 'ProductsController@show')->name('product');
Route::get('/product/filter_by_name/{name}', 'ProductsController@filterByName')->name('filter_product_by_name');
Route::get('/search/', 'ProductsController@search')->name('search');
Route::get('/product/filter_by_category/{name}', 'ProductsController@filterByCategoryName')->name('filter_product_by_category_name');


Route::get('/categories', 'CategoriesController@index')->name('categories');
Route::get('/category/{id}', 'CategoriesController@show')->name('category');
Route::get('/category/filter_by_name/{name}', 'CategoriesController@filterByName')->name('filter_category_by_name');
