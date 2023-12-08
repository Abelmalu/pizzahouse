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


Route::get('/test', function () {
$family=[

['name'=>'abel','major'=>'cs'],
['name'=>'malu','major'=>'humanresource'],
['name'=>'beletu','major'=>'accounting']
];


  
  return view('test',['key'=>$family]);
});





Route::get('/pizzas/create', 'App\Http\Controllers\PizzaControl@create');
Route::get('/pizzas/{id}','App\Http\Controllers\PizzaControl@show')->middleware('auth');
Route::post('/pizzas', 'App\Http\Controllers\PizzaControl@store');
Route::get('/pizzas', 'App\Http\Controllers\PizzaControl@index')->middleware('auth');
Route::delete('/pizzas/{id} ', 'App\Http\Controllers\PizzaControl@destroy');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index' )->name('home');
