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
    public function acceptInsertion(Insertions $insertion)
    {
        $insertion->setAccepted(true);
        return redirect()->back()->with('message', "L'annuncio è stato accettato");
    }
    public function rejectInsertion(Insertions $insertion)
    {
        $insertion->setAccepted(false);
        return redirect()->back()->with('message', "L'annuncio è stato rifiutato");
    }
};
