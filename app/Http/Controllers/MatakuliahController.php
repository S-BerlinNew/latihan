<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matakuliahs = Matakuliah::with('absensi')->get();
        return view("matakuliah.index", compact('matakuliahs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $matakuliahs = Matakuliah::all();
        return view('matakuliah.create', compact('matakuliahs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => 'required',
            'nama_matakuliah' => 'required'
        ]);
        Matakuliah::create($validated);
        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $matakuliahs = Matakuliah::findOrFail($id);
        return view('matakuliah.edit', compact('matakuliahs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $matakuliahs = Matakuliah::findOrFail($id);
        $matakuliahs->update($request->all());
        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil diupdate');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $matakuliahs = Matakuliah::findOrFail($id);
        $matakuliahs->delete();
        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil dihapus');
    }
}
