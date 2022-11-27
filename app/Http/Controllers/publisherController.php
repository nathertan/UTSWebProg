<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\publisher;
use Illuminate\Http\Request;

class publisherController extends Controller
{
    public function publisher()
    {
        $category = category::all();
        $publisher = publisher::all();
        return view('publisher', compact('category', 'publisher'));
    }

    public function detail($id)
    {
        $category = category::all();
        $publisher = publisher::find($id);
        return view('publisher_detail', compact('category', 'publisher'));
    }
}
