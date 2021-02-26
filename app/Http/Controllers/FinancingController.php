<?php

namespace App\Http\Controllers;

use App\Models\Financing;
use Illuminate\Http\Request;

class FinancingController extends Controller
{
    public function index()
    {
        $result = Financing::paginate(10);
        return view('financing.index', ['financing' => $result]);
    }
}
