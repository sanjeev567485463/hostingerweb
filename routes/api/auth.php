<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Auth', 'middleware' => ['api.request.type']], function () {

    Route::post('/register/step/{step}', ['as' => 'register', 'uses' => 'RegisterController@stepRegister']);
    Route::post('/login', ['as' => 'login', 'uses' => 'LoginController@login']);

    Route::post('/forget-password', ['as' => 'forgot', 'uses' => 'ForgotPasswordController@forgot']);
    Route::post('/reset-password/{token}', ['as' => 'updatePassword', 'uses' => 'ResetPasswordController@updatePassword']);
    Route::post('/verification', ['as' => 'verification', 'uses' => 'VerificationController@confirmCode']);
   // Route::get('/reff/{code}', 'ReferralController@referral');

});

Route::post('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout', 'middleware' => ['api.auth']]);

