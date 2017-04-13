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
    return view('admin.dashboard');
})->middleware('auth');
// ->middleware('auth');
Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'cate'], function() {
		Route::get('list',['as'=>'admin.cate.list','uses'=>'CateController@getList']);
		Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'CateController@getAdd']);
		Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'CateController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.cate.getDel','uses'=>'CateController@getDel']);
		Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'CateController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'CateController@postEdit']);
	});
	Route::group(['prefix'=>'pro'], function() {
		Route::get('list',['as'=>'admin.pro.list','uses'=>'ProController@getList']);
		Route::get('add',['as'=>'admin.pro.getAdd','uses'=>'ProController@getAdd']);
		Route::post('add',['as'=>'admin.pro.postAdd','uses'=>'ProController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.pro.getDel','uses'=>'ProController@getDel']);
		Route::get('edit/{id}',['as'=>'admin.pro.getEdit','uses'=>'ProController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.pro.postEdit','uses'=>'ProController@postEdit']);
	});
    Route::group(['prefix'=>'user'],function(){
        Route::get('list',['as'=>'admin.user.getList','uses'=>'UserController@getList']);
        Route::get('add',['as'=>'admin.user.getAdd','uses'=>'UserController@getAdd']);
        Route::post('add',['as'=>'admin.user.postAdd','uses'=>'UserController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.user.getDelete','uses'=>'UserController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);
    });
    Route::group(['prefix'=>'store'], function() {
		Route::get('list',['as'=>'admin.store.list','uses'=>'StoreController@getList']);
		Route::get('add',['as'=>'admin.store.getAdd','uses'=>'StoreController@getAdd']);
		Route::post('add',['as'=>'admin.store.postAdd','uses'=>'StoreController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.store.getDel','uses'=>'StoreController@getDel']);
		Route::get('edit/{id}',['as'=>'admin.store.getEdit','uses'=>'StoreController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.store.postEdit','uses'=>'StoreController@postEdit']);
	});
	Route::group(['prefix'=>'order'],function(){
        Route::get('list',['as'=>'admin.order.getList','uses'=>'OrderController@getList']);
        Route::get('add',['as'=>'admin.order.getAdd','uses'=>'OrderController@getAdd']);
        Route::post('add',['as'=>'admin.order.postAdd','uses'=>'OrderController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.order.getDelete','uses'=>'OrderController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.order.getEdit','uses'=>'OrderController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.order.postEdit','uses'=>'OrderController@postEdit']);
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index');
