<?php

use App\Http\Middleware;

use Illuminate\Support\Facades\Route;
use App\Models\Reservation;
use App\Models\GeneralSetting;
use App\Models\SocialSetting;
use App\Models\SeoSetting;
use App\Http\Views\Composers\MultiComposer;


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

Route::post('/reservation', 'App\Http\Controllers\StaticPagesController@saveReservation');

Route::get('/reservation/thank-you2', 'App\Http\Controllers\StaticPagesController@reservationThankYou');

//offrs

Route::get('/offers', 'App\Http\Controllers\StaticPagesController@offers');

Route::post('/offers', 'App\Http\Controllers\StaticPagesController@registerMember');

Route::get('/offers/thank-you', 'App\Http\Controllers\StaticPagesController@offersThankYou');

//reservation

Route::get('/contact', 'App\Http\Controllers\StaticPagesController@contact');


///admin

Route::get('/admin', 'App\Http\Controllers\admin\AdminController@index');

Route::get('/admin/estimated-revenue-daily', 'App\Http\Controllers\admin\AdminController@dailyRevenueLast30');

/// food items

Route::get('/admin/food-items', 'App\Http\Controllers\admin\FoodItemsController@index')->middleware('role:Admin');

Route::get('/admin/food-items/create', 'App\Http\Controllers\admin\FoodItemsController@create')->middleware('role:Admin');

Route::get('/admin/food-items/{id}/edit', 'App\Http\Controllers\admin\FoodItemsController@edit')->middleware('role:Admin');

Route::put('/admin/food-items/{id}/', 'App\Http\Controllers\admin\FoodItemsController@update')->middleware('role:Admin');

Route::get('/admin/food-items/{id}/delete', 'App\Http\Controllers\admin\FoodItemsController@delete')->middleware('role:Admin');

Route::post('/admin/food-items', 'App\Http\Controllers\admin\FoodItemsController@store')->middleware('role:Admin');

// food categories

Route::get('/admin/food-categories', 'App\Http\Controllers\admin\FoodCategoriesController@index')->middleware('role:Admin');

Route::get('/admin/food-categories/create', 'App\Http\Controllers\admin\FoodCategoriesController@create')->middleware('role:Admin');

Route::get('/admin/food-categories/{id}/edit', 'App\Http\Controllers\admin\FoodCategoriesController@edit')->middleware('role:Admin');

Route::put('/admin/food-categories/{id}/', 'App\Http\Controllers\admin\FoodCategoriesController@update')->middleware('role:Admin');

Route::get('/admin/food-categories/{id}/delete', 'App\Http\Controllers\admin\FoodCategoriesController@delete')->middleware('role:Admin');

Route::post('/admin/food-categories', 'App\Http\Controllers\admin\FoodCategoriesController@store')->middleware('role:Admin');

/// admin customers
// admin members
Route::get('/admin/members', 'App\Http\Controllers\admin\MemberController@index');

Route::get('/admin/members/{id}/delete', 'App\Http\Controllers\admin\MemberController@delete');

//admin reservations
Route::get('/admin/reservations', 'App\Http\Controllers\admin\ReservationController@index');

Route::post('/admin/reservations', 'App\Http\Controllers\admin\ReservationController@store');

Route::get('/admin/reservations/{id}/edit', 'App\Http\Controllers\admin\ReservationController@edit');

Route::put('/admin/reservations/{id}/', 'App\Http\Controllers\admin\ReservationController@update');

Route::get('/admin/reservations/{id}/delete', 'App\Http\Controllers\admin\ReservationController@delete');

///admin users
Route::get('/admin/users', 'App\Http\Controllers\admin\UsersController@index')->middleware('role:Admin');

Route::get('/admin/users/create', 'App\Http\Controllers\admin\UsersController@create')->middleware('role:Admin');

Route::post('/admin/users', 'App\Http\Controllers\admin\UsersController@store')->middleware('role:Admin');

Route::get('/admin/users/{id}/edit', 'App\Http\Controllers\admin\UsersController@edit')->middleware('role:Admin');

Route::put('/admin/users/{id}/', 'App\Http\Controllers\admin\UsersController@update')->middleware('role:Admin');

Route::get('/admin/users/{id}/delete', 'App\Http\Controllers\admin\UsersController@delete')->middleware('role:Admin');


//admin regerstration
Route::get('/admin/register', function () {
    return view('admin/register');
});

Route::get('/admin/login', function () {
    return view('admin/login');
});

//admin settings

Route::get('/admin/settings/general', 'App\Http\Controllers\admin\SettingController@general')->middleware('role:Admin');

Route::put('/admin/settings/general', 'App\Http\Controllers\admin\SettingController@saveGeneral')->middleware('role:Admin');

Route::get('/admin/settings/seo', 'App\Http\Controllers\admin\SeoController@seo')->middleware('role:Admin');

Route::put('/admin/settings/seo', 'App\Http\Controllers\admin\SeoController@saveSeo')->middleware('role:Admin');

Route::get('/admin/settings/social', 'App\Http\Controllers\admin\SocialController@social')->middleware('role:Admin');

Route::put('/admin/settings/social', 'App\Http\Controllers\admin\SocialController@saveSocial')->middleware('role:Admin');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

View::composer(['home', 'pages/about', 'pages/contact', 'pages/offers', 'pages/reservation', 'pages/thank-you', 'pages/thank-you2', 'landing-page', 'menu/all-categories', 'menu/single-menu'], function ($view) {
    $generalSettings = GeneralSetting::find(1);
    $socialSettings = SocialSetting::find(1);
    $seoSettings = SeoSetting::find(1);

    $view->with("settings", [
        "general"=> $generalSettings,
        "social" => $socialSettings,
        "seo" => $seoSettings
    ]);
});

Auth::routes();
