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
    return view('landing-page');
});


Route::get('/menu', function () {
    return view('menu/index');
});

Route::get('/menu/{slug}', function () {
    return view('menu/single-menu');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/waitlist', function () {
    return view('pages/waitlist');
});

Route::get('/reservation', function () {
    return view('pages/reservation');
});

Route::get('/offers', function () {
    return view('pages/offers');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
});

Route::get('/admin/food-categories', function () {
    return view('admin/food-categories/all');
});

Route::get('/admin/food-categories/create', function () {
    return view('admin/food-categories/create');
});

Route::get('/admin/food-categories/edit', function () {
    return view('admin/food-categories/edit');
});

// food categories

Route::get('/admin/food-items', function () {
    return view('admin/food-items/all');
});

Route::get('/admin/food-items/create', function () {
    return view('admin/food-items/create');
});

Route::get('/admin/food-items/edit', function () {
    return view('admin/food-items/edit');
});

///customers

Route::get('/admin/offers-members', function () {
    return view('admin/customers/all-offers-members');
});

Route::get('/admin/reservations', function () {
    return view('admin/customers/all-reservations');
});

///users

Route::get('/admin/users', function () {
    return view('admin/users/all');
});

Route::get('/admin/users/create', function () {
    return view('admin/users/create');
});

Route::get('/admin/users/edit', function () {
    return view('admin/users/edit');
});


//admin regerstration
Route::get('/admin/register', function () {
    return view('admin/register');
});

Route::get('/admin/login', function () {
    return view('admin/login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
