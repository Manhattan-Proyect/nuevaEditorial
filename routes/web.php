<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'MainController@home');

Route::get('/carrito','ShoppingCartsController@index');
Route::post('/carrito','ShoppingCartsController@checkout');

Auth::routes();

Route::get('/payments/store','PaymentsController@store');

Route::resource('products','ProductsController');

Route::resource('users','UsersController');

Route::resource('in_shopping_carts','InShoppingCartsController',[
	'only'=> ['store','destroy']
	]);

Route::resource('permisos','PermisosController');

Route::get('/home', 'MainController@home');

Route::resource('compras','ShoppingCartsController',[
	'only'=> ['show']
	]);

Route::resource('orders','OrdersController',['only'=>['index','update']]);

Route::get('products/image/{filename}',function($filename){
	$path = storage_path("app/images/$filename");

	if (!\File::exists($path)) abort(404);

	$file = \File::get($path);

	$type = \File::mimeType($path);

	$response = Response::make($file,200);

	$response->header("Content-type",$type);

	return $response;
});