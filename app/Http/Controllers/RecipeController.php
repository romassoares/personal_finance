<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $result = Recipe::paginate(10);
        return view('recipe.index', ['recipe' => $result]);
    }
}
