<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        // Validasi data yang diterima dari formulir
        $request->validate([
            'alamat' => 'required',
            'tanggal' => 'required|date',
            'bencana' => 'required',
            'keterangan' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        // Simpan perubahan data berita
        $berita->update($request->all());

        // Redirect atau tindakan lain setelah pembaruan berhasil
        return redirect('/berita')->with('success', 'Berita berhasil diperbarui.');
    }

    public function index()
    {
        $data = Berita::all(); // Mengambil semua data berita
        return view('pages.kepaladesa.berita.index', compact('data'));
    }

    public function create()
    {
        return view('pages.kepaladesa.berita.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'alamat' => 'required',
            'alamatrumah' => 'required',
            'tanggal' => 'required|date',
            'bencana' => 'required',
            'keterangan' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        // Simpan data berita dengan tambahan latitude dan longitude
        Berita::create($request->all());

        return redirect('/berita');
    }
}
