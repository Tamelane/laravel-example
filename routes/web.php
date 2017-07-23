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


Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/product/{id}', 'ProductsController@show')->name('product');
Route::get('/product/filter_by_name/{name}', 'ProductsController@filterByName')->name('filter_product_by_name');
Route::get('/search/', 'ProductsController@search')->name('search');
Route::get('/product/filter_by_category/{name}', 'ProductsController@filterByCategoryName')->name('filter_product_by_category_name');

//Posts
Route::get('/posts/all', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show')->name('posts');
Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::get('/createposts/create', 'PostController@create')->name('create')->middleware('auth');
Route::post('/createposts/', 'PostController@store')->name('apc_store(key, var)');

//Admin
Route::get('/add/category','AdminController@addCategory')->name('addCategory');
Route::post('/add/category','AdminController@storeCategory')->name('StoreCategory');
Route::post('/delete/category','AdminController@deleteCategory')->name('DeleteCategory');
Route::post('/add/product','AdminController@storeProduct')->name('StoreProduct');
Route::post('/delete/product','AdminController@deleteProduct')->name('DeleteProduct');
//Shop
Route::post('/add/cart','OrderController@addToCart')->name('addToCart');
Route::get('/add/cart','OrderController@addItemToCart')->name('addItemToCart');

Route::get('/categories', 'CategoriesController@index')->name('categories');
Route::get('/category/{id}', 'CategoriesController@show')->name('category');
Route::get('/category/filter_by_name/{name}', 'CategoriesController@filterByName')->name('filter_category_by_name');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('index', ['active_menu' => 'home']);
})->name('home');

Route::get('ajax',function(){
   return view('message');
});
Route::get('/getmsg','AjaxController@index')->name('ajax');