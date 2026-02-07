<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evenements = \App\Models\Evenement::all(); // [cite: 511]
        return view('evenements.index', compact('evenements'));
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $evenement = \App\Models\Evenement::with(['expert', 'ateliers'])->findOrFail($id); // [cite: 512]
        return view('evenements.show', compact('evenement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        \App\Models\Evenement::findOrFail($id)->delete(); // [cite: 513]
        return redirect()->route('evenements.index')->with('success', 'Deleted!');
    }
}
