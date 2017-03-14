<?php
/*
|--------------------------------------------------------------------------
| Panel Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
| For example http://localhost:8000/panel/something 
|
| The prefix of routes is defined in Providers/PanelServiceProvider.php
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
