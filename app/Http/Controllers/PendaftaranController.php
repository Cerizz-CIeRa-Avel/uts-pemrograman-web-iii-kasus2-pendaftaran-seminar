<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    // Menampilkan form pendaftaran
    public function create()
    {
        return view('pendaftaran');
    }

    // Menyimpan data ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'institusi' => 'required|string|max:255',
            'nomor_hp' => 'required|string|max:15',
        ]);

        // Simpan data ke database
        $pendaftaran = Pendaftaran::create($request->all());

        // Arahkan ke halaman sukses dengan membawa ID pendaftaran
        return redirect()->route('daftar.success', $pendaftaran->id);
    }

    // Menampilkan halaman sukses / bukti pendaftaran
    public function success($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        return view('success', compact('pendaftaran'));
    }
}
