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

    public function edit(Profil $profil)   
    {
        return view(
            'edit',
            ['profil' => $profil]
        );
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([]);
        $profil = Profil::find($id);
        $profil->update($request->all()); //
        return redirect()->route('profil')->with('success', 'Data profil berhasil diubah');
    }

    public function destroy(Profil $profil)
    {
        $profil->delete();
        return redirect()->route('profil')->with('success', 'Data buku berhasil dihapus');
    }
}
