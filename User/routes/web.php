<?php

use App\Users;
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


//    Route::get('add','ProductController@getadd');
Route::get('new',['as'=>'addget','uses'=>'UserController@getadd']);

Route::post('add',['as'=>'addpost','uses'=>'UserController@postadd']);

Route::get('list','UserController@getlist');

Route::post('delete',['as'=>'deletepost','uses'=>'UserController@postdelete']);

//Route::get('edit',['as'=>'editget','uses'=>'UserController@getedit']);
Route::post('edit',['as'=>'editpost','uses'=>'UserController@postedit']);


