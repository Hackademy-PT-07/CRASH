<?php

namespace App\Http\Controllers;

use App\Models\Insertions;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index()
    {
        $insertionToCheck = Insertions::where('is_accepted', null)->first();
        return view('revisor.index', compact('insertionToCheck'));
    }
}
