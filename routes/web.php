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

Route::get('/home' , 'App\Http\Controllers\HomeController@index')->name('home');

// User Controller function
Route::get('/create-user' , 'App\Http\Controllers\UserController@create');
Route::get('/show-user' , 'App\Http\Controllers\UserController@view');
Route::get('/specific-user/{id}' , 'App\Http\Controllers\UserController@user');
Route::get('/delete/{id}' , 'App\Http\Controllers\UserController@delete');

//Crud Controller function route go here.....
Route::get('/add-user','App\Http\Controllers\CrudController@user_create');
Route::get('/all-users','App\Http\Controllers\CrudController@users');
Route::get('/user/{id}','App\Http\Controllers\CrudController@user');
Route::get('/user/{id}/delete','App\Http\Controllers\CrudController@delete');
Route::get('/user/{id}/update','App\Http\Controllers\CrudController@edit');

//practice crude
Route::get('/test' , 'App\Http\Controllers\PracticeCrud@index');

/******************** Class of routing (Router Method...........***********************/

/*** Specific vabe route name na diyeo shudhu matro akta route name diyei sob kaj kora jabe ***/

Route::get('user-data','App\Http\Controllers\PracticeRouting@getRoute'); //'get' for making route

Route::post('data' , 'App\Http\Controllers\PracticeRouting@posttest'); // 'post' for submit form
//Route::redirect('/user-data','my-route');
Route::put('data' , 'App\Http\Controllers\PracticeRouting@data_update'); // 'put' for update data in database
Route::patch('data' , 'App\Http\Controllers\PracticeRouting@s_data_update'); // 'patch' for update specific data in database
Route::delete('data' , 'App\Http\Controllers\PracticeRouting@data_delete'); // 'delete ' for delete data in database

/*** There has no any restiction ***/
Route::any('any-test',function(){
	return "I am from any";
});

/*** There can be used only 'POST' and 'GET' method ***/
Route::any('match-test',function(){
	return "I am from Match";
});

/**** Shortcut route system ****/
Route::view('/shortcut','welcome');

/*** Data type specification or conditional perameters ***/
Route::get('perameter/{id}','App\Http\Controllers\PracticeRouting@display')->where('id','[0-9]+');


/**** Optional/ By default perameter set up and multiple conditional perameter set****/
Route::get('perameter/{id}/profile/{email?}','App\Http\Controllers\PracticeRouting@show')->where(['id'=>'[0-9]+' , 'email'=>'[A-Za-z]+']); // By default/optional perameter set up system er jonno '?' dite hobe and array er maddhome condition set kore dite hobe AND COTO HATER JONNO ([a-z]+)//

/*** Route name specification ***/
Route::get('any_name','App\Http\Controllers\PracticeRouting@any_name')->name('specific_name');
Route::view('view_any_name','any_name');
/*** Route a jekono nam dileo link er name change korte hobe na (any_name view page theke)***/

/*** Route grouping ***/
Route::prefix('admin')->group(function(){
	Route::get('hello',function(){
		return "hello";
	});
	Route::get('world',function(){
	return "world";
	});

});