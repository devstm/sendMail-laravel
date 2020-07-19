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


Route::get('/saleh','firstController@index');
Route::get('/front','frontController@front_index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/aaa', 'ContacrsController@viewAll')->name('All Index');
Route::get('/creat', 'ContacrsController@creat')->name('creat');

Route::get('/view', 'ContacrsController@view')->name('view');
Route::post('/add', 'ContacrsController@creat')->name('creat');
Route::get('/cr', 'ContacrsController@cr')->name('cr');
Route::get('/de/{id}', 'ContacrsController@delete')->name('delete');
Route::get('/ed/{id}', 'ContacrsController@ed')->name('ed');
Route::post('/edit/{id}', 'ContacrsController@edit')->name('edit');
Route::get('/',
    function (){
    return view('welcome');
    });




