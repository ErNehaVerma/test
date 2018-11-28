<?php

use App\User;
use App\Coupon;
use Illuminate\Http\Request;

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
    $coupons = Coupon::get()->load('category');
    return view('welcome', compact('coupons'));
});

Route::post('filter', function (Request $request) {
    $coupons = Coupon::whereCategoryId($request->cat_id)->get()->load('category');
    return view('welcome', compact('coupons'));
});

Route::get('showimage/{name}', function ($name) {
    return response()->file(storage_path('/app/public/'.$name));
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('users', 'CouponController@seeUsers');
Route::resource('coupons', 'CouponController');
Route::resource('category', 'CouponCategoryController');


