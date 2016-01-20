<?php
Route::group(['middleware' => ['web']], function () {
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('logout',function(){
    Auth::logout();
    return redirect('auth/login');
});
Route::get('bookmark','HogeController@input');
});

Route::post('in','HogeController@in');
Route::get('out','HogeController@out');

Route::group(['middleware' => ['web']], function () {
});
