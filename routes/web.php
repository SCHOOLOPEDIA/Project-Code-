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
    return view('dashboard');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/addteacher', function () {

    $name="name";
    return view('addteacher',['name'=>'PICH LYHEANG SOFTWARE ENGINEER']);
});
Route::get('/addclass', function () {
    return view('addclass');
});
Route::get('/addstudent', function () {
    return view('addstudent');
});
Route::get('/viewteacher', function () {
    return view('viewteacher');
});
Route::get('/viewstudent', function () {
    return view('viewstudent');
});
