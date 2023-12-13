<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $listMahasiswa = Mahasiswa::latest() -> paginate(5);
        return view('mahasiswaView.index', compact('listMahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswaView.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswaView.index')
            ->with('success', 'Mahasiswa Data Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $mahasiswaID)
    {
        $mhs = Mahasiswa::findOrFail($mahasiswaID);
        return view('mahasiswaView.show', compact('mhs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $mahasiswaID)
    {
        $mhs = Mahasiswa::findOrFail($mahasiswaID);
        return view('mahasiswaView.edit', compact('mhs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $mahasiswaID)
    {
        $mahasiswa = Mahasiswa::findOrFail($mahasiswaID);
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
        ]);

        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswaView.index')
            ->with('success', 'Mahasiswa data updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $mahasiswaID)
    {
        $mahasiswa = Mahasiswa::findOrFail($mahasiswaID);

        $mahasiswa->delete();

        return redirect()->route('mahasiswaView.index')
            ->with('success','Mahasiswa Data Deleted Successfully');
    }
}
