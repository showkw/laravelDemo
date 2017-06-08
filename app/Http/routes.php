<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Entity\Member;

Route::get( '/', 'Home\HomeController@index' );
Route::auth();
Route::get('/imageCode/{tmp}', 'CodeController@getImageCode');
Route::get('/moblieCode/send', 'CodeController@getMoblieCode');
Route::get('/checkImgCode', 'CodeController@checkCode');
Route::get('/sendCode', 'SmsController@send');
Route::get('/sms/check', 'SmsController@check');
Route::auth();

Route::get('/home', 'HomeController@index');
