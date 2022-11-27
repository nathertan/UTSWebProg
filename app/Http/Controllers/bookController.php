<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\category;
use Illuminate\Http\Request;

class bookController extends Controller
{
    public function book_cat($id)
    {
        $category = category::all();
        $book  = book::find($id);
        return view('books', compact('book', 'category'));
    }
}
