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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop',function(){
    return view('shop.home');
});
Route::get('/admin',function(){
    return view('admin.home');
});
Route::get('/auth/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');
// Route::group(['prefix' => '/','as'=>'shop.', 'namespace'=>'Shop'], function () {

    Route::get('/','Shop\HomeController@index')->name('home');
    Route::get('/menu','Shop\MenuController@index')->name('shop.menu');
    Route::post('/addCart','CartController@addCart')->name('addCart');
    Route::get('/cart','CartController@index')->name('cart');
    Route::post('/cart/deleteCart','CartController@deleteCart');
    Route::post('/cart/updateCart','CartController@updateCart');
    Route::post('cart/promotion','CartController@promotion');
    Route::get('dang-nhap','Auth\LoginController@getLogin');
    
// });