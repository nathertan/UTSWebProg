<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    public function index()
    {
        $category = category::all();
        $book  = book::all();
        return view('index', compact('book', 'category'));
    }
}
