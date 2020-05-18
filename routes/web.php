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

Route::get('/', 'BooksController@home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/', function(){
        return view('layouts.admin');
    });

    Route::get('/books', 'AdminBooksController@index')->name('admin.books.index');
    Route::post('/books', 'AdminBooksController@store')->name('admin.books.store');
    Route::get('/books/create', 'AdminBooksController@create')->name('admin.books.create');
    Route::get('/books/{book}', 'AdminBooksController@show')->name('admin.books.show');
    Route::put('/books/{book}', 'AdminBooksController@update')->name('admin.books.update');
    Route::get('/books/{book}/edit', 'AdminBooksController@edit')->name('admin.books.edit');

    Route::get('/users', 'AdminUsersController@index')->name('admin.users.index');
    Route::post('/users', 'AdminUsersController@store')->name('admin.users.store');
    Route::get('/users/create', 'AdminUsersController@create')->name('admin.users.create');
    Route::put('/users/{user}', 'AdminUsersController@update')->name('admin.users.update');
    Route::get('/users/{user}/edit', 'AdminUsersController@edit')->name('admin.users.edit');

    Route::get('/reviews', 'AdminReviewsController@index')->name('admin.reviews.index');
    Route::post('/reviews', 'AdminReviewsController@store')->name('admin.reviews.store');
    Route::get('/reviews/create', 'AdminReviewsController@create')->name('admin.reviews.create');
    Route::get('/reviews/{review}', 'AdminReviewsController@show')->name('admin.reviews.show');
    Route::put('/reviews/{review}', 'AdminReviewsController@update')->name('admin.reviews.update');
    Route::get('/reviews/{review}/edit', 'AdminReviewsController@edit')->name('admin.reviews.edit');

    Route::get('/categories', 'AdminCategoriesController@index')->name('admin.categories.index');
    Route::post('/categories', 'AdminCategoriesController@store')->name('admin.categories.store');
    Route::get('/categories/{category}/edit', 'AdminCategoriesController@edit')->name('admin.categories.edit');
    Route::put('/categories/{category}', 'AdminCategoriesController@update')->name('admin.categories.update');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');
