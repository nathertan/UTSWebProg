<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\book_category;
use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function category($id)
    {
        $category = category::all();
        $book = book_category::where('category_id', $id)->get();
        return view('category', compact('category', 'book'));
    }
}
