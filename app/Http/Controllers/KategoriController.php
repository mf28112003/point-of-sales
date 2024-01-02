<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    function index()
    {
        $data['list_kategori'] = Kategori::all();
        return view('kategori.index', $data);
    }

    function create()
    {
        return view('Kategori.create');
    }

    function store()
    {
        $kategori = new Kategori;
        $kategori->nama_kategori = request('nama kategori');
        $kategori->deskripsi = request('deskripsi');
        $kategori->tanggal_dibuat = request('tanggal dibuat');
        // $kategori->harga = request('harga');
        // $kategori->foto = request('foto');
        $kategori->save();

        return redirect('admin/kategori');
    }

    function show(Kategori $kategori)
    {
        $data['kategori'] = $kategori;
        return view('kategori.show');
    }

    function edit(Kategori $kategori)
    {
        $data['kategori'] = $kategori;
        return view('kategori.edit', $data);
    }

    function update(Kategori $kategori)
    {
        $kategori->nama_kategori = request('nama_kategori');
        $kategori->deskripsi = request('deskripsi');
        $kategori->tanggal_dibuat = request('tanggal_dibuat');
        // $kategori->harga = request('harga');
        // $kategori->foto = request('foto');
        $kategori->save();
 
        return redirect('admin/kategori'); 
    }

    function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect('admin/kategori');
    }
}
