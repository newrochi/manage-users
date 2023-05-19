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

use App\Role;

Route::get('/', function () {
    //return view('welcome');
    //Role::find(1)->givePermissionsTo('delete users');
    //auth()->user()->giveRolesTo('admin');
    //dd(auth()->user()->can('delete users'));

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
