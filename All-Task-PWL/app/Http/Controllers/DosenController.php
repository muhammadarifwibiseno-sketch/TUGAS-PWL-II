<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataDosen = Dosen::get();

        return view('pages.dosen.daftar_dosen', compact('dataDosen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dosen.form_add_dosen');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nidn' => 'required|numeric',
            'nama' => 'required|min:5'
        ]);
    
        Dosen::create($validated);

        return redirect()->route('dosen')->with('Success', 'Data Dosen berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detailDosen = Dosen::findOrFail($id);

        return view('pages.dosen.detail_dosen', compact('detailDosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detailDosen = Dosen::findOrFail($id);

        return view('pages.dosen.form_add_dosen', compact('detailDosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nidn' => 'required|numeric',
            'nama' => 'required|min:5'
        ]);
    
        Dosen::where('nidn', $id)->update($validated);

        return redirect()->route('dosen')->with('success', 'Data Dosen berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detailDosen = Dosen::findOrFail($id);
        $detailDosen->delete();
        return redirect()->route('dosen')->with('success', 'Data dosen berhasil dihapus');
    }
}