<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = \App\Models\Anggota::all();
        return view('anggota.index',compact('anggota'));
    }
    public function store(Request $request)
    {
        \App\Models\Anggota::create($request->all());

        return redirect('anggota')->with('sukses', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $anggota = \App\Models\Anggota::find($id);

        return view('anggota.edit', compact('anggota'));
    }

    public function update(Request $request, $id)
    {
        $anggota = \App\Models\Anggota::find($id);

        $anggota->kode = $request->kode;
        $anggota->nama = $request->nama;
        $anggota->jenis_kelamin = $request->jenis_kelamin;
        $anggota->telfon = $request->telfon;
        $anggota->alamat = $request->alamat;
        $anggota->tempat_lahir = $request->tempat_lahir;
        $anggota->tanggal_lahir = $request->tanggal_lahir;
        $anggota->foto = $request->foto;
        $anggota->update();

        return redirect('anggota')->with('sukses', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $anggota = \App\Models\Anggota::find($id);
        $anggota->delete();

        return redirect('anggota')->with('sukses', 'Data berhasil dihapus');
    }
}
