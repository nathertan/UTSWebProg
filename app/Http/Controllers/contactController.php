<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contact()
    {
        $category = category::all();
        return view('contact', compact('category'));
    }
}
