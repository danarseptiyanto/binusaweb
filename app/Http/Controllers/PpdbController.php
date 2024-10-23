<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function index()
    {
        return view('ppdb');
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'wa-ortu' => 'required|max:255',
            'wa-siswa' => 'required|max:255',
            'asal-sekolah' => 'required|max:255',
            'tpt-lahir' => 'required|max:255',
            'tgl-lahir' => 'required|max:255',
            'ibu' => 'required|max:255',
            'ayah' => 'required|max:255',
            'alamat' => 'required|max:255',
        ]);

        Ppdb::create($validatedData);

        return redirect('/ppdb')->with('success', 'Pendaftaran Berhasil');
    }
}
