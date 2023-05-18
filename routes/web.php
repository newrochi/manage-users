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
    //return view('welcome');
    //auth()->user()->givePermissionsTo('add users');
    auth()->user()->giveRolesTo('user');
    //auth()->user()->withdrawPermissions('delete users');
    //dd(auth()->user()->hasPermission('hahahahaha'));
    //dd(auth()->user()->can('hahahahaha'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
