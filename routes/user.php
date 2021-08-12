<?php

/*
|--------------------------------------------------------------------------
| Authenticates Users Routes
|--------------------------------------------------------------------------
|
| These routes are loaded by the RouteServiceProvider within a group which contains the "auth" middleware group.
|
|
|
*/


Route::get('/home', "UserController@dashboard")->name("home");
Route::get('/dashboard', "UserController@dashboard");
