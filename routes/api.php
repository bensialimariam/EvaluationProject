<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['jwt.auth']], function () {
    Route::group(['middleware' => ['student']], function () {
     //add student route here
    
    });
    Route::group(['middleware' => ['professor']], function () {
    //add professor route here    
    });
    Route::group(['middleware' => ['administration']], function () {
             //add admin route here
        Route::post('user/register', 'UserController@register');
    });
});
    // The login requests doesn't come with tokens 
    // as users at that point have not been authenticated yet
    // Therefore the jwtMiddleware will be exclusive of them
Route::post('user/login', 'UserController@login');