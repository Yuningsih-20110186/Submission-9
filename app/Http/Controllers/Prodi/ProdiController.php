<?php

namespace App\Http\Controllers\Prodi;

use App\Models\Prodi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdiController extends Controller
{
    public function index(Request $request)
    {
        $prodi = Prodi::all();

        $search = $request->input('search');
        $prodi = Prodi::when($search, function ($query) use ($search) {
        return $query->where('kode_mk', 'like', '%' . $search . '%');
    })->get();
        return view('prodi.index', compact('prodi'));
    }

    public function create()
    {
        return view('prodi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id',
            'kode_prodi' => 'required|string|max:255',
            'nama_prodi' => 'required|string|max:255',
        ]);

        Prodi::create($request->all());

        return redirect()->route('prodi.index')->with('success', 'Data Prodi Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $prodi = Prodi::find($id);
        if (!$prodi) {}
        return view('prodi.show', ['prodi' => $prodi]);
    }

    public function edit($id)
    {
        $prodi = Prodi::find($id);
        return view('prodi.edit', ['prodi' => $prodi]);
    }

    public function update(Request $request, $id)
    {
        $prodi = Prodi::findOrFail($id);
        $request->validate([
            'kode_prodi' => 'required|string|max:255',
            'nama_prodi' => 'required|string|max:255',
        ]);

        $prodi->update($request->all());

        return redirect()->route('prodi.index')->with('success', 'Data Prodi Berhasil Diperbarui');
    }

    public function delete($id)
    {
        $prodi = Prodi::find($id);
        $prodi->delete();

        return redirect()->route('prodi.index')->with('success', 'Data Prodi Berhasil Dihapus');
    }
}
