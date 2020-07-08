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
Route::get('/', 'HomeController@showWelcome');
Route::get('hello', 'HomeController@showWelcome1');
Route::get('index', 'HomeController@showIndex');
Route::get('contact', 'HomeController@showContact');
Route::get('about/{subject}', 'HomeController@showSubject');
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('bookedroom', 'BookedController@getRoom')->name('datphong');
//Route::post('bookedroom','BookedController@store');
Route::get('about',function (){
    return view('about');
});
Route::get('rooms',function (){
    return view('rooms');
});
Route::get('dives',function (){
    return view('dives');
});
Route::get('foods',function (){
    return view('foods');
});
Route::get('news',function (){
    return view('news');
});
Route::get('admin/manageHome',function (){
    return view('admin/manageHome');
});
Route::get('admin/adminIndex',function (){
    return view('admin/adminIndex');
});
Route::get('admin/adminrooms',function (){
    return view('admin/adminrooms');
});
Route::get('admin/adminfoods',function (){
    return view('admin/adminfoods');
});
Route::get('admin/adminabout',function (){
    return view('admin/adminabout');
});
Route::get('admin/adminabout',function (){
    return view('admin/admincontact');
});

//Route::get('index',function (){
//    return view('index');
//});
Route::get('bookedroom','BookedController@getRoom')->name('datphong');
//Route::get('bookedroom','BookedController@create');
//
Route::get( 'index','BookedController@home')->name('index');

Route::post('bookedroom','BookedController@postRoom')->name('post_datphong');

//Route::resources('bookedroom','BookedController');
Route::get('/admin', function () {
    return view('admin/manageHome');
})->middleware('checklogin::class');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
