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

Route::get('/hilal', function () {
    return view('index');
});


Route::get('/admin/users', 'AdminUsersController@index')->name('admin.users.index');
Route::post('/admin/users', 'AdminUsersController@store')->name('admin.users.store');
Route::get('/admin/users/create', 'AdminUsersController@create')->name('admin.users.create');
Route::put('/admin/users/{user}', 'AdminUsersController@update')->name('admin.users.update');
Route::get('/admin/users/{user}/edit', 'AdminUsersController@edit')->name('admin.users.edit');


Route::get('/admin/books', 'AdminBooksController@index')->name('admin.books.index');
Route::post('/admin/books', 'AdminBooksController@store')->name('admin.books.store');
Route::get('/admin/books/create', 'AdminBooksController@create')->name('admin.books.create');
Route::get('/admin/books/{book}', 'AdminBooksController@show')->name('admin.books.show');
Route::put('/admin/books/{book}', 'AdminBooksController@update')->name('admin.books.update');
Route::get('/admin/books/{book}/edit', 'AdminBooksController@edit')->name('admin.books.edit');


Route::get('/admin/reviews', 'AdminReviewsController@index')->name('admin.reviews.index');
Route::post('/admin/reviews', 'AdminReviewsController@store')->name('admin.reviews.store');
Route::get('/admin/reviews/create', 'AdminReviewsController@create')->name('admin.reviews.create');
Route::get('/admin/reviews/{review}', 'AdminReviewsController@show')->name('admin.reviews.show');
Route::put('/admin/reviews/{review}', 'AdminReviewsController@update')->name('admin.reviews.update');
Route::get('/admin/reviews/{review}/edit', 'AdminReviewsController@edit')->name('admin.reviews.edit');


Route::get('/admin/categories', 'AdminCategoriesController@index')->name('admin.categories.index');
Route::post('/admin/categories', 'AdminCategoriesController@store')->name('admin.categories.store');
Route::get('/admin/categories/{category}/edit', 'AdminCategoriesController@edit')->name('admin.categories.edit');
Route::put('/admin/categories/{category}', 'AdminCategoriesController@update')->name('admin.categories.update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
