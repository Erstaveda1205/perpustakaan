<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = \App\Models\Buku::all();
        return view('buku.index',compact('buku'));
    }
    public function store(Request $request)
    {
        \App\Models\Buku::create($request->all());

        return redirect('buku')->with('sukses', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $buku = \App\Models\Buku::find($id);

        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $buku = \App\Models\Buku::find($id);

        $buku->kode = $request->kode;
        $buku->judul = $request->judul;
        $buku->pengarang = $request->pengarang;
        $buku->jumlah_halaman = $request->jumlah_halaman;
        $buku->stok = $request->stok;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->sinopsis = $request->sinopsis;
        $buku->gambar = $request->gambar;
        $buku->update();

        return redirect('buku')->with('sukses', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $buku = \App\Models\Buku::find($id);
        $buku->delete();

        return redirect('buku')->with('sukses', 'Data berhasil dihapus');
    }
}
