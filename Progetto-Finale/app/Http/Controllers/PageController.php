<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $insertions =  \App\Models\Insertions::all();
        return view('home', compact('insertions'));
    }
}
