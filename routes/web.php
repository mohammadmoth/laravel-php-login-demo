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

Route::get('/', function () {
    return view('welcome');
});

/**
 * passwordless routers
 * passwordless : form view
 * /passwordless/sendemail : post controller
 */
Route::get('/passwordless', "Auth\PasswordlessController@sendLinkForm")->name("passwordless");
Route::post('/passwordless/sendemail', "Auth\PasswordlessController@sendLink")->name("passwordlessSendLink");

/**
 * active login passwordless
 *
 *
 *
 */
Route::get('/passwordless/{id}', "Auth\PasswordlessController@active")->middleware("signed")
->name("magiclink");






Route::get('/logout', "Auth\LoginController@logout")->name("logout.get");

Auth::routes(['verify' => true]);


