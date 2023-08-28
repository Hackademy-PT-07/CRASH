<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $categories = \App\Models\Category::all();
        $insertions = \App\Models\Insertions::where('is_accepted', true)->take(6)->get()->sortByDesc('created_at');
        return view('home', compact('insertions', 'categories'));
    }

    public function categoryShow(Category $category)
    {
        return view('categoryShow', compact('category'));
    }
    public function setLanguage($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
