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

Route::get('register',[
    'uses'=>'AdminController@getRegister',
    'as'=>'dang_ki'
]);
Route::post('register',[
    'uses'=>'AdminController@postRegister',
    'as'=>'dang_ki'
]);


Route::get('login',[
    'uses'=>'AdminController@getLogin',
    'as'=>'dang_nhap'
]);
Route::post('login',[
    'uses'=>'AdminController@postLogin',
    'as'=>'dang_nhap'
]);

Route::get('logout',[
    'uses'=>'AdminController@getLogout',
    'as'=>'dangxuat'
]);

Route::group(['prefix'=>'admin', 'middleware'=> 'adminCheck'], function(){

    Route::get('/', function () {
        return view('welcome');
    })->name('trangchu');
    

    Route::get('home',[
        'uses'=>'AdminController@getHomePage',
        'as' => 'home'
    ]);
    Route::get('edit/{id}-{alias}',[
        'uses'=>'AdminController@getEditFood',
        'as' => 'edit'
    ]);
    Route::get('delete/{id}-{alias}',[
        'uses'=>'AdminController@getDeleteFood',
        'as' => 'delete'
    ]);
});

