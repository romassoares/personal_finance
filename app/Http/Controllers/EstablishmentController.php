<?php

namespace App\Http\Controllers;

use App\Models\Establishment;
use Illuminate\Http\Request;

class EstablishmentController extends Controller
{
    public function index()
    {
        $result = Establishment::paginate(10);
        return view('establishment.index', ['establishment' => $result]);
    }
}
