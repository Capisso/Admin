<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
 * Login routes
 */
Route::group(array('prefix' => 'account'), function () {
    Route::get('/', function () {
        return Redirect::to('/');
    });

    Route::get('login', array('as' => 'account.login', 'uses' => 'AccountController@getLogin'));
    Route::post('login', array('uses' => 'AccountController@postLogin'));
    Route::get('forgot', array('as' => 'account.forgot', 'uses' => 'AccountController@getForgot'));
    Route::post('forgot', array('uses' => 'AccountController@postForgot'));
});

// 404 for unauthed users
App::missing(function ($exception) {
    return Redirect::route('account.login');
});


/*
 * Authenticated routes, everything but account
 */
Route::group(array('before' => 'auth'), function () {


    Route::get('/', array('as' => 'home', 'uses' => 'HomeController@showWelcome'));
    Route::resource('customers', 'CustomerController');


    Route::group(array('prefix' => 'account'), function () {
        Route::get('/', function () {
            return Redirect::to('/');
        });

        Route::get('settings', array('as' => 'account.settings', 'uses' => 'AccountController@getSettings'));
        Route::get('logout', array('as' => 'account.logout', 'uses' => 'AccountController@getLogout'));
    });


    // Different 404 handler for authed users
    App::missing(function ($exception) {
        return Response::view('errors/404', array(), 404);
    });


});


