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
    return view('auth.login');
});

Route::get('/admin/dashboard', function () {
    return view('admin.page.dashboard');
});

Route::get('/admin/page2', function () {
    return view('admin.page.page2');
});

Route::get('/user/dashboard', function () {
    return view('user.page.dashboard');
});

Route::get('/user/page2', function () {
    return view('user.page.page2');
});