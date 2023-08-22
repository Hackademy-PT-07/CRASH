<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $insertions = \App\Models\Insertions::where('is_accepted', true)->take(4)->get()->sortByDesc('created_at');
        return view('home', compact('insertions'));
    }

    public function categoryShow(Category $category)
    {
        return view('categoryShow', compact('category'));
    }
}
