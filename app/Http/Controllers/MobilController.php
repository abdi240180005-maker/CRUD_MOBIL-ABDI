<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    // TAMPIL DATA
    public function index()
    {
        $mobils = Mobil::latest()->get(); // urut terbaru
        return view('mobil.index', compact('mobils'));
    }

    // FORM TAMBAH
    public function create()
    {
        return view('mobil.create');
    }

    // SIMPAN DATA
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_mobil' => 'required|max:100',
            'merk'       => 'required|max:100',
            'tahun'      => 'required|numeric',
            'harga'      => 'required|numeric'
        ]);

        Mobil::create($validated);

        return redirect('/mobil')->with('success', 'Data mobil berhasil ditambahkan');
    }

    // DETAIL DATA
    public function show($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('mobil.show', compact('mobil'));
    }

    // FORM EDIT
    public function edit($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('mobil.edit', compact('mobil'));
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_mobil' => 'required|max:100',
            'merk'       => 'required|max:100',
            'tahun'      => 'required|numeric',
            'harga'      => 'required|numeric'
        ]);

        $mobil = Mobil::findOrFail($id);
        $mobil->update($validated);

        return redirect('/mobil')->with('success', 'Data mobil berhasil diupdate');
    }

    // HAPUS DATA
    public function destroy($id)
    {
        $mobil = Mobil::findOrFail($id);
        $mobil->delete();

        return redirect('/mobil')->with('success', 'Data mobil berhasil dihapus');
    }
}