<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function categoryShow(Category $category)
    {
        return view('insertions.index', compact('category'));
    }
}
