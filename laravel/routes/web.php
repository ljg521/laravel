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
    return view('welcome');
});

Route::resource('photo','PhotoController');

Route::get('/user/{id}',function($id){
    return $id;
});


Route::get('/code/{id}','CodeController@show');

Route::get('/num/{id?}','CodeController@par');

//路由群组

Route::group(['prefix'=>'user'],function(){
    Route::get('id','CodeController@getId');
    Route::get('name','CodeController@getName');


});

//指定命名空间的路由
Route::group(['namespace'=>'NpT'],function(){
    Route::get('test','TController@test');
});
//定义一条传递参数的路由
Route::get('/student/show/{id}','StudentController@show');


Route::get('/student','StudentController@index');

Route::get('/student/display','StudentController@display');
//重定向路由
Route::get('/student/red','StudentController@red');
//使用redirect 跳转到控制器的具体方法
Route::get('/student/red2','StudentController@redToAction');
//使用redirect  带上参数 传递到控制器具体方法
Route::get('/student/red3','StudentController@redToActionWithPar');



Route::post('/req/add','RequestController@add');
Route::get('/form',function(){
    return view('form');
});

Route::get('/view','ViewController@show');

Route::get('/view/template','ViewController@template');

Route::get('/model/update','UserController@update');

Route::get('/login','LoginController@login');