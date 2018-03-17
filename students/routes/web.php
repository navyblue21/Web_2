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

Route::get('/sinhvien', [
	'as' => 'sinhvien',
	'uses' => 'StudentController@index'
]);

/*Route::get('/', function () {
    return 'Hello World';
});*/
