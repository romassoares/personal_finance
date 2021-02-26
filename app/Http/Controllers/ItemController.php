<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $result = Item::paginate(10);
        return view('item.index', ['items' => $result]);
    }
}
