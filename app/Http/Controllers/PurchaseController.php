<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        $result = Purchase::paginate(10);
        return view('purchase.index', ['purchase' => $result]);
    }
}
