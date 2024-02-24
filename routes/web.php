<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/praktikum', function() {
    return view('pages.praktikum');
});

Route::get('/table1', function() {
    return view('pages.table1');
});

Route::get('/table2', function() {
    return view('pages.table2');
});

Route::get('/table3', function() {
    return view('pages.table3');
});

Route::get('/simple', function() {
    return view('pages.simple_table');
});

// Route::get('/table4', function() {
//     return view('pages.table4');
// });

