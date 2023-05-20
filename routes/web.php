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
    return view('welcome');
    //Role::find(1)->givePermissionsTo('delete users');
    //auth()->user()->giveRolesTo('admin');
    //dd(auth()->user()->can('delete users'));
});

Route::prefix('panel')->group(function () {
    Route::get('users','UserController@index')->name('users.index');
    Route::get('users/{user}/edit','UserController@edit')->name('users.edit');
    Route::post('users/{user}/edit','UserController@update')->name('users.update');
    Route::get('roles','RoleController@index')->name('roles.index');
    Route::post('roles','RoleController@store')->name('roles.store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
