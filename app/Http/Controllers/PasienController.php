<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasien = Pasien::orderBy('created_at', 'DESC')->with('kelurahan')->get();
        // $pasien = Pasien::orderBy('created_at', 'DESC')->get();

        return view('pasien.index', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelurahan = Kelurahan::all();
        
        return view('pasien.create', compact('kelurahan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'id_pasien' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan_id' => 'required',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
        ]);

        $data['id'] = Pasien::generateID();

        Pasien::create($data);

        return redirect()->back()->with('success', 'pasien added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_pasien)
    {
        $pasien = Pasien::where('id_pasien', $id_pasien)->with('kelurahan')->firstOrFail();

        return view('pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pasien = Pasien::findOrFail($id);

        return view('pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pasien = Pasien::findOrFail($id);

        $pasien->update($request->all());

        return redirect()->route('pasien')->with('success', 'pasien updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = Pasien::findOrFail($id);

        $pasien->delete();

        return redirect()->route('pasien')->with('success', 'pasien deleted successfully');
    }
}
