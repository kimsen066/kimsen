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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('hello', function () {
    return 'Hello';
});*/

//use APP\Http\Middleware\HelloMiddleware;をzhuijqi
//Route::get('hello','HelloController@index');
//Route::post('hello','HelloController@index');
//Route::get('book','BookController@index');
Route::get('book','BookController@index');
Route::post('book/find','BookController@search');
Route::get('find/{id?}','BookController@find');

Route::get('book/add','BookController@add');
Route::post('book/add','BookController@add');

Route::get('edit/{id}','BookController@edit');
Route::post('edit/{id}','BookController@edit');

Route::get('book/delete/{id?}','BookController@delete');
Route::post('book/delete/{id?}','BookController@remove');

Route::get('author','AuthorController@index');
Route::post('author','AuthorController@index');

Route::get('author/add','AuthorController@add');
Route::post('author/add','AuthorController@add');

Route::get('message','MessageController@index');
Route::get('message/add','MessageController@add');
Route::post('message/add','MessageController@add');








//Route::post('author/add','AuthorController@create');


//->middleware(HelloMiddleware::class);
//Route::get('hello/{id?}/{pass?}','HelloController@index');
/*Route::get('hello', function () {
    return view('hello.index');
  });*/
?>
