<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/contact', 'HomeController@contact')->name('home.contact');
    Route::post('/contact', 'PostController@sendMsg')->name('home.sendMsg');;
    Route::post('/upload', 'FileUploadController@uploadFile')->name('upload.file');
    Route::get('/upload', 'FileUploadController@show');
    Route::post('/recaptcha', 'ReCaptchaController@recaptcha')->name('recaptcha.perform');
    Route::get('/recaptcha', 'ReCaptchaController@show');
    Route::post('/checkemail', 'RegisterController@checkemail');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');        
    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        Route::resource('user', UserController::class);
    });
        
    Route::group(['middleware' => 'admin'], function () {
        Route::resource('post', PostController::class);
    });
});
