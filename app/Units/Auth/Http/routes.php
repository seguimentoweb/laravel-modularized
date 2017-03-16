<?php

Route::get('/', function () {
   return redirect()->route('login');
});

// Authentication routes...
Route::get('login',['as'=>'login','uses'=>'Auth\AuthController@getLogin']);
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'site.auth.logout']);

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

