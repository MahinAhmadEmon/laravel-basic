<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/incomes', function () {
    return view('incomes');
});

Route::get('/add-income', function () {
    return view('add-income');
});

Route::get('/expenses', function () {
    return view('expenses');
});

Route::get('/add-expense', function () {
    return view('add-expense');
});