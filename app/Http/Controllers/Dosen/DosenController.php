<?php

namespace App\Http\Controllers\Dosen;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DosenController extends Controller
{
    public function index(Request $request)
    {
        $dosen = Dosen::all();

        $search = $request->input('search');
        $dosen = Dosen::when($search, function ($query) use ($search) {
        return $query->where('nip', 'like', '%' . $search . '%');
    })->get();
        return view('dosen.index', compact('dosen'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id',
            'nip' => 'required|string|max:255',
            'nama_dosen' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

        Dosen::create($request->all());

        return redirect()->route('dosen.index')->with('success', 'Data Dosen Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $dosen = Dosen::find($id);
        if (!$dosen) {}
        return view('dosen.show', ['dosen' => $dosen]);
    }

    public function edit($id)
    {
        $dosen = Dosen::find($id);
        return view('dosen.edit', ['dosen' => $dosen]);
    }

    public function update(Request $request, $id)
    {
        $dosen = Dosen::findOrFail($id);
        $request->validate([
            'nip' => 'required|string|max:255',
            'nama_dosen' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

        $dosen->update($request->all());

        return redirect()->route('dosen.index')->with('success', 'Data Dosen Berhasil Diperbarui');
    }

    public function delete($id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Data Dosen Berhasil Dihapus');
    }
}
