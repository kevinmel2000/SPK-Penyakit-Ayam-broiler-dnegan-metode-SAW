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


Route::get('/',[
	'uses' => 'usercontroller@getHome',
	'as' => 'home',
	'middleware' => 'guest'
]);

Route::post('/signin',[
	'uses' => 'usercontroller@postSignin',
	'as' => 'user.signin',
	'middleware' => 'guest'
]);




Route::get('/logout',[
	'uses' => 'usercontroller@getLogout',
	'as' => 'user.logout',
	'middleware' => 'auth'
]);

Route::get('/user/profile',[
	'uses'=> 'usercontroller@getUserProfile',
	'as' => 'user.profile', 
	'middleware' => 'user'
]);

Route::get('/user/tambah_diagnosa',[
	'uses' => 'usercontroller@getTambah',
	'as' => 'user.tambah_diagnosa',
	'middleware' => 'user'
]);

Route::post('/user/tambah_diagnosa',[
	'uses' => 'usercontroller@postTambah',
	'as'=> 'user.tambah_diagnosa',
	'middleware' =>'user'
]);

Route::get('/user/histori',[
	'uses' => 'usercontroller@getHistori',
	'as' => 'user.histori_diagnosa',
	'middleware' => 'user'
]);

Route::get('/user/knowledge',[
	'uses' => 'usercontroller@getKnowledge',
	'as' => 'user.knowledge',
	'middleware' => 'user'
]);

Route::get('/user/hasil_diagnosa/{id_diagnosa}',[
	'uses' => 'usercontroller@getHasil',
	'as'=> 'user.hasil',
	'middleware'=>'user'
]);





Route::get('/admin/profile',[
	'uses' => 'AdminController@getProfile',
	'as' => 'admin.profile',
	'middleware' => 'admin'
]);

Route::get('/admin/tambah_diagnosa',[
	'uses' => 'AdminController@getTambah',
	'as' => 'admin.tambah_diagnosa',
	'middleware' => 'admin'
]);

Route::post('/admin/tambah_diagnosa',[
	'uses'=> 'usercontroller@postTambah',
	'as'=> 'admin.tambah_diagnosa',
	'middleware' => 'admin'
]);

Route::get('/admin/histori',[
	'uses' => 'AdminController@getHistori',
	'as' => 'admin.histori',
	'middleware' => 'admin'
]);

Route::get('/admin/hasil_diagnosa/{id_diagnosa}',[
	'uses' => 'AdminController@getHasil',
	'as'=> 'admin.hasil',
	'middleware'=>'admin'
]);

Route::get('/admin/knowledge',[
	'uses' => 'AdminController@getKnowledge',
	'as'=> 'admin.knowledge',
	'middleware'=>'admin'
]);

Route::get('/admin/knowledge/tambah',[
	'uses' => 'AdminController@getTambahKnowledge',
	'as'=> 'admin.tambah_knowledge',
	'middleware'=>'admin'
]);

Route::post('/admin/knowledge/tambah',[
	'uses' => 'AdminController@postTambahKnowledge',
	'as' => 'admin.tambah_knowledge',
	'middleware' => 'admin'
]);