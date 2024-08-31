<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bS', function () {
    return view('login');
});
Route::get('/usman', function () {
    return view('welcome');
});