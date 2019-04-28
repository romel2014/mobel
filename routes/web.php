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
    return view('pages.home');
});


Route::get('/home', function () {
    return view('pages.home');
});


Route::get('/customize', function () {
    return view('pages.customize');
});


Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});




/* admin routes */



Route::get('/products', function () {
    return view('admin.products');
});

Route::get('/sizes', function () {
    return view('admin.sizes');
});

Route::get('/frame', function () {
    return view('admin.frame');
});

Route::get('/front-door', function () {
    return view('admin.front-door');
});

Route::get('/messages', function () {
    return view('admin.messages');
});

Route::get('/orders', function () {
    return view('admin.orders');
});





