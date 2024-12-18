<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public function index()
    {
        $penerbit = \App\Models\Penerbit::all();
        return view('penerbit.index',compact('penerbit'));
    }
    public function store(Request $request)
    {
        \App\Models\Penerbit::create($request->all());

        return redirect('penerbit')->with('sukses', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $penerbit = \App\Models\Penerbit::find($id);

        return view('penerbit.edit', compact('penerbit'));
    }

    public function update(Request $request, $id)
    {
        $penerbit = \App\Models\Penerbit::find($id);

        $penerbit->kode = $request->kode;
        $penerbit->nama = $request->nama;
        $penerbit->update();

        return redirect('penerbit')->with('sukses', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $penerbit = \App\Models\Penerbit::find($id);
        $penerbit->delete();

        return redirect('penerbit')->with('sukses', 'Data berhasil dihapus');
    }
}
