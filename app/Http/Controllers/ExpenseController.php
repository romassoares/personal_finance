<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        $result = Expense::paginate(10);
        return view('expense.index', ['expense' => $result]);
    }
}
