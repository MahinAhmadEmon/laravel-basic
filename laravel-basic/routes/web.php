<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/incomes', [HomeController::class, 'incomes']);

Route::get('/add-income', function () {
    return view('add-income');
});

Route::get('/expenses', function () {
    return view('expenses');
});

Route::get('/add-expense', function () {
    return view('add-expense');
});