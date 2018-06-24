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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@root')->name('root');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {

    // 需要把这个路由放在 auth 这个中间件的路由组里面，因为只有已经登录的用户才能看到这个提示界面。
    Route::get('/email_verify_notice', 'PagesController@emailVerifyNotice')->name('email_verify_notice');

    Route::get('/email_verification/verify', 'EmailVerificationController@verify')->name('email_verification.verify');

    // 手动触发发送邮件
    Route::get('/email_verification/send', 'EmailVerificationController@send')->name('email_verification.send');

    // 已登录并且进行了邮箱验证的操作
    Route::group(['middleware' => 'email_verified'], function() {
        Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
        Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
        Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');


        /*
        Route::get('/test', function() {
            return 'Your email is verified';
        });
        */

    });
    // 结束
});
