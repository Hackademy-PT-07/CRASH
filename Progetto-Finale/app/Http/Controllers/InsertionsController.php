<?php

namespace App\Http\Controllers;

use App\Models\insertions;
use Illuminate\Http\Request;

class InsertionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $insertions = \App\Models\Insertions::where('is_accepted', true)->get()->sortByDesc('created_at');
        return view('insertions.index', compact('insertions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('insertions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insertions = Insertions::search($request->searched)->where('is_accepted', true)->paginate(16);
        return view('insertions.index', compact('insertions'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Insertions $insertion)
    {
        
        return view('insertions.show', compact('insertion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(insertions $insertions)
    {
        return view('insertions.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, insertions $insertions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(insertions $insertions)
    {
        //
    }
}
