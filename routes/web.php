<?php

use Illuminate\Support\Facades\Route;

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
    Route::post('/checkemail', 'RegisterController@checkemail');
    Route::post('/upload', 'FileUploadController@uploadFile')->name('upload.file');
    Route::get('/upload', 'FileUploadController@show');
    Route::post('/recaptcha', 'ReCaptchaController@recaptcha')->name('recaptcha.perform');
    Route::get('/recaptcha', 'ReCaptchaController@show');

    
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

    });
});
