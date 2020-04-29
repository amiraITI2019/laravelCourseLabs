<?php

use Illuminate\Support\Facades\Route;

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
Route::post('/', function () {
    return "rfrr";
});
Route::get('/about',function(){
    return ("hello");
});
Route::get('/about/me',function(){
    return ("hello me");
});
Route::get('/about/{id}/{age?}',function($id,$age=0){
    return ($id." and ".$age);
});
Route::redirect('/a','/',301);
Route::permanentRedirect('/there','/');
Route::get("/form",function(){
    return view('form');
});

Route::match(['get','post'],'/rrr',function(){
    return $_REQUEST;
});
Route::view("/amira","welcome",["name"=>"amira"]);


Route::get('/user/{name}', function ($name) {
    //
    return "name is ".$name;
})->where('name', '[A-Za-z]+');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
