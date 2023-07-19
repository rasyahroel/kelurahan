<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelurahan = Kelurahan::orderBy('created_at', 'DESC')->get();

        return view('kelurahan.index', compact('kelurahan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelurahan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kelurahan::create($request->all());

        return redirect()->route('kelurahan')->with('success', 'Kelurahan added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelurahan = Kelurahan::findOrFail($id);

        return view('kelurahan.show', compact('kelurahan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kelurahan = Kelurahan::findOrFail($id);

        return view('kelurahan.edit', compact('kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kelurahan = Kelurahan::findOrFail($id);

        $kelurahan->update($request->all());

        return redirect()->route('kelurahan')->with('success', 'kelurahan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelurahan = Kelurahan::findOrFail($id);

        $kelurahan->delete();

        return redirect()->route('kelurahan')->with('success', 'kelurahan deleted successfully');
    }
}
