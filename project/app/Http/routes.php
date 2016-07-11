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

Route::get('/', function () {
    return view('welcome');
});

Route::get('edit/{id}', array('as' => 'edituser', 'uses' => 'RegisterController@Edituser'));

Route::get('deleteuser/{id}', array('as' => 'deleteuser', 'uses' => 'RegisterController@Deleteuser'));

Route::get('/data', array('as' => 'getreg', 'uses' => 'RegisterController@index'));

Route::post('edit/update', array('as' => 'upuser', 'uses' => 'RegisterController@Updateuser'));

Route::get('/delete', array('as' => 'delreg', 'uses' => 'RegisterController@delete'));

Route::post('/register', array('as' => 'register', 'uses' => 'RegisterController@User'));

Route::get('/logintemp', function () {
    return view('login');
});
Route::post('/login', array('as' => 'register', 'uses' => 'RegisterController@Login'));

Route::get('/admin', function () {
    return view('adminlogin');
});

Route::post('register/adminlogin', array('as' => 'register', 'uses' => 'RegisterController@adminlogin'));

Route::get('/logout', array('as' => 'logout', 'uses' => 'RegisterController@logout'));
Route::get('/userlogout', array('as' => 'userlogout', 'uses' => 'RegisterController@userLogout'));

Route::get('/chpwd', function () {
    return view('changepwd');
});
Route::post('/chngpwd', array('as' => 'register', 'uses' => 'RegisterController@chngpwd'));

Route::post('/userupdate', array('as' => 'upuser', 'uses' => 'RegisterController@myacntupdate'));
