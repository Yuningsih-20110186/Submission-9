<?php

namespace App\Http\Controllers\MataKuliah;

use App\Http\Controllers\Controller;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index(Request $request)
    {
        $matakuliah = MataKuliah::all();

        $search = $request->input('search');
        $matakuliah = MataKuliah::when($search, function ($query) use ($search) {
        return $query->where('kode_mk', 'like', '%' . $search . '%');
    })->get();
        return view('matakuliah.index', compact('matakuliah'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id',
            'kode_mk' => 'required|string|max:255',
            'nama_mk' => 'required|string|max:255',
            'sks' => 'required|string|max:255',
        ]);

        MataKuliah::create($request->all());

        return redirect()->route('matakuliah.index')->with('success', 'Data Matakuliah Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $matakuliah = MataKuliah::find($id);
        if (!$matakuliah) {}
        return view('matakuliah.show', ['matakuliah' => $matakuliah]);
    }

    public function edit($id)
    {
        $matakuliah = MataKuliah::find($id);
        return view('matakuliah.edit', ['matakuliah' => $matakuliah]);
    }

    public function update(Request $request, $id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        $request->validate([
            'kode_mk' => 'required|string|max:255',
            'nama_mk' => 'required|string|max:255',
            'sks' => 'required|string|max:255',
        ]);

        $matakuliah->update($request->all());

        return redirect()->route('matakuliah.index')->with('success', 'Data Matakuliah Berhasil Diperbarui');
    }

    public function delete($id)
    {
        $matakuliah = MataKuliah::find($id);
        $matakuliah->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Data Matakuliah Berhasil Dihapus');
    }
}
