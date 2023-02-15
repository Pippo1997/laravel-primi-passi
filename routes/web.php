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
    return view('index');
})->name('index');

Route::get('/uno', function () {
    $data = 'Pagina-1';
    return view('uno', compact('data'));
})->name('uno');

Route::get('/due', function () {
    $data = 'Pagina-2';
    return view('due', compact('data'));
})->name('due');