<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita; // Pastikan Anda memiliki model Berita
use App\Models\BeritaUser;

class BeritaUserController extends Controller
{
    /**
     * Menampilkan daftar berita untuk pengguna.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Berita::all();
        return view('pages.user.berita', compact('data'));
    }

    /**
     * Menangani pencarian berita untuk pengguna.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search = $request->input('search');

        // Cari berita berdasarkan judul atau isi
        $data = Berita::where('Alamat', 'like', '%' . $search . '%')
            ->orWhere('Keterangan', 'like', '%' . $search . '%')
            ->get();

        return view('pages.user.berita', compact('data'));
    }
}
