<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index() {
        $income = DB::table('income')->sum('amount');
        $expense = DB::table('expense')->sum('amount');
        $balance = $income - $expense;
        
        $data = [
            'income' => $income,
            'expense' => $expense,
            'balance' => $balance
        ];
        return view("index", $data);
    }

    public function incomes() {
        $incomes = DB::table('income')->get();
        $data = [
            'incomes' => $incomes
        ];
        return view("incomes", $data);
    }
}
