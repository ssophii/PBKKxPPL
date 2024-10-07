<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Profil::all();
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'semester' => 'required',
            'ip_semester' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'aktif' => 'required',
        ]);

        Profil::create($validated);

        return redirect()->route('profil')->with('success', 'Data profil berhasil ditambahkan');
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
    public function edit(Profil $profil)   
    {
        return view(
            'edit',
            ['profil' => $profil]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            // 'judul' => 'required',
            // 'penulis' => 'required',
            // 'penerbit' => 'required',
            // 'sinopsis' => 'required',
            // 'tahun' => 'required',
            // 'stok' => 'required',
            // 'status' => 'required',
        ]);
        $buku = Profil::find($id);
        // dd($buku);
        $buku->update($request->all()); //
        return redirect()->route('profil')->with('success', 'Data buku berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profil $profil)
    {
        $profil->delete();
        return redirect()->route('profil')->with('success', 'Data buku berhasil dihapus');
    }
}
