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


///static pages

Route::get('/', 'App\Http\Controllers\StaticPagesController@home');

Route::get('/menu', 'App\Http\Controllers\StaticPagesController@menu');

Route::get('/menu/{slug}', 'App\Http\Controllers\StaticPagesController@singleMenu');

Route::get('/about', 'App\Http\Controllers\StaticPagesController@about');

Route::get('/contact', 'App\Http\Controllers\StaticPagesController@waitlist');

Route::get('/reservation', 'App\Http\Controllers\StaticPagesController@reservation');

Route::get('/offers', 'App\Http\Controllers\StaticPagesController@offers');

Route::get('/contact', 'App\Http\Controllers\StaticPagesController@contact');


///admin

Route::get('/admin', 'App\Http\Controllers\admin\AdminController@index');

/// food items

Route::get('/admin/food-items', 'App\Http\Controllers\admin\FoodItemsController@index');

Route::get('/admin/food-items/create', 'App\Http\Controllers\admin\FoodItemsController@create');

Route::get('/admin/food-items/{id}/edit', 'App\Http\Controllers\admin\FoodItemsController@edit');

// food categories

Route::get('/admin/food-categories', 'App\Http\Controllers\admin\FoodCategoriesController@index');

Route::get('/admin/food-categories/create', 'App\Http\Controllers\admin\FoodCategoriesController@create');

Route::get('/admin/food-categories/{id}/edit', 'App\Http\Controllers\admin\FoodCategoriesController@edit');

/// admin customers

Route::get('/admin/offers-members', 'App\Http\Controllers\admin\CustomersController@allOffersMembers');

Route::get('/admin/reservations', 'App\Http\Controllers\admin\CustomersController@allReservation');

///admin users

Route::get('/admin/users', 'App\Http\Controllers\admin\UsersController@index');

Route::get('/admin/users/create', 'App\Http\Controllers\admin\UsersController@create');

Route::post('/admin/users', 'App\Http\Controllers\admin\UsersController@store');

Route::get('/admin/users/{id}/edit', 'App\Http\Controllers\admin\UsersController@edit');


//admin regerstration
Route::get('/admin/register', function () {
    return view('admin/register');
});

Route::get('/admin/login', function () {
    return view('admin/login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
