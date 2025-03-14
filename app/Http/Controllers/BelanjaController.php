<?php

namespace App\Http\Controllers;

use App\Models\Belanja;
use Illuminate\Http\Request;

class BelanjaController extends Controller
{
    /**
     * Tampilkan form input.
     */
    public function create()
    {
        return view('belanja.create');
    }

    /**
     * Proses penyimpanan data ke database.
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'kode_barang' => 'required|unique:belanja,kode_barang|max:10',
            'nama_sparepart' => 'required|string|max:100',
            'modal' => 'required|numeric|min:0',
            'harga_jual' => 'required|numeric|min:0',
            'stok_awal' => 'required|integer|min:0',
        ]);

        // Simpan data ke database
        Belanja::create([
            'kode_barang' => $request->kode_barang,
            'nama_sparepart' => $request->nama_sparepart,
            'modal' => $request->modal,
            'harga_jual' => $request->harga_jual,
            'stok_awal' => $request->stok_awal,
        ]);

        // Redirect kembali ke halaman belanja dengan pesan sukses
        return redirect()->route('belanja.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Tampilkan semua data belanja.
     */
    public function index()
    {
        $belanja = Belanja::all();
        return view('belanja.index', compact('belanja'));
    }
}
