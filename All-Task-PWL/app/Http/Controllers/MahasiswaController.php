<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataMahasiswa = Mahasiswa::get();

        return view('pages.mahasiswa.mahasiswa', compact('dataMahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.mahasiswa.form_add_mahasiswa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'npm' => 'required|numeric',
            'nama' => 'required|min:5'
        ]);
        $validated['nidn'] =  DB::table('dosen')->inRandomOrder()->value('nidn');

        Mahasiswa::create($validated);

        return redirect()->route('mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detailMahasiswa = Mahasiswa::findOrFail($id);

        return view('pages.mahasiswa.detail_mahasiswa', compact('detailMahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detailMahasiswa = Mahasiswa::findOrFail($id);

        return view('pages.mahasiswa.form_add_mahasiswa', compact('detailMahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'npm' => 'required|numeric',
            'nidn' => 'required|numeric',
            'nama' => 'required|min:5'
        ]);
    
        Mahasiswa::where('npm', $id)->update($validated);

        return redirect()->route('mahasiswa')->with('success', 'Data Mahasiswa berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detailMahasiswa = Mahasiswa::findOrFail($id);
        $detailMahasiswa->delete();
        return redirect()->route('mahasiswa')->with('success', 'Data Mahasiswa berhasil dihapus');
    }
}