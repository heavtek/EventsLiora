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
Route::get('/pricing',function(){
    return view('pricing');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/service',function(){
    return view('service');
});
Route::get('/service_detail',function(){
    return view('service_detail');
});
Route::get('/gallary',function(){
    return view('gallary');
});
Route::get('/service_detail',function(){
    return view('service_detail');
});
Route::get('/socoal_service',function(){
    return view('socoal_service');
});
Route::get('/coporate_service',function(){
    return view('coporate_service');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/contact-wedding',function(){
    return view('contact-wedding');
});
Route::get('/contact-engagement',function(){
    return view('contact-engagement');
});