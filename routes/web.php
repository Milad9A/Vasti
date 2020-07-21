<?php

use Spatie\Activitylog\Models\Activity;

Route::get('/', 'BooksController@home');

Route::get('/act', function () {
   return Activity::all()->last();
});

Route::view('/logins', 'site.login')->name('site.login');
Route::view('/registers', 'site.register')->name('site.register');

Route::get('/books', 'BooksController@index')->name('site.books.index');
Route::get('/books/{book}', 'BooksController@show')->name('site.show');

Route::group(['middleware' => 'auth'], function () {
    Route::post('books/{book}/reviews', 'ReviewsController@store')->name('site.reviews.store');
    Route::post('books/reviews/{review}/like', 'LikeReviewController@store');
    Route::delete('books/reviews/{review}/like', 'LikeReviewController@destroy');

    Route::get('/cart/{user}', 'CartController@index')->name('site.cart.index');
    Route::get('/cart/banker/login', 'CartController@login')->name('site.cart.banker.login');
    Route::post('/cart/banker/login', 'BankerController@login')->name('site.cart.banker.apilogin');
    Route::post('/cart/banker/confirm', 'BankerController@purchase')->name('site.cart.banker.purchase');
    Route::delete('cart/{user}/delete', 'CartController@destroy')->name('site.cart.destroy');
    Route::post('cart/pdf', 'CartController@downloadPDF')->name('site.cart.pdf');

    Route::get('/user/profile', 'UsersController@profile')->name('site.user.profile');
    Route::put('/user/profile', 'UsersController@update')->name('site.user.profile.update');
    Route::put('/user/profile/password', 'UsersController@updatePassword')->name('site.user.profile.update.password');
    Route::get('/user/profile/edit', 'UsersController@edit')->name('site.user.profile.edit');

    Route::get('user/reading_list', 'ReadingListController@index')->name('site.user.reading_list');
});


Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {

    Route::view('/', 'layouts.admin');

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

    Route::get('/authors', 'AdminAuthorsController@index')->name('admin.authors.index');
    Route::post('/authors', 'AdminAuthorsController@store')->name('admin.authors.store');
    Route::get('/authors/{author}/edit', 'AdminAuthorsController@edit')->name('admin.authors.edit');
    Route::put('/authors/{author}', 'AdminAuthorsController@update')->name('admin.authors.update');

    Route::get('/publishinghouses', 'AdminPublishingHousesController@index')->name('admin.houses.index');
    Route::post('/publishinghouses', 'AdminPublishingHousesController@store')->name('admin.houses.store');
    Route::get('/publishinghouses/{publishinghouse}/edit', 'AdminPublishingHousesController@edit')->name('admin.houses.edit');
    Route::put('/publishinghouses/{publishinghouse}', 'AdminPublishingHousesController@update')->name('admin.houses.update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');

Route::post('/emails', 'EmailsController@handleForm');
