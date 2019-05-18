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

Route::get('/products',  function(){


	$products = ['mobile','laptop','condom','pussy','vagina'];

	return json_encode($products);
})->middleware('throttle:2,1');

Route::fallback(function(){
	//fallback route 
	return 'No Match Found sir!!!';
});
