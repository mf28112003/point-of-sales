<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Barang;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    function index()
    {
        $data['list_barang'] = Barang::all();
        return view('barang.index', $data);
    }

    function create()
    {
        return view('barang.create');
    }

    function store()
    {
        $barang = new barang;
        $barang->nama = request('nama');
        $barang->harga = request('harga');
        $barang->deskripsi = request('deskripsi');
        $barang->foto = request('foto');
        $barang->save();

        return redirect('barang');
    }

    function show(barang $barang)
    {
        $data['barang'] = $barang;
        return view('barang.show');
    }

    function edit(barang $barang)
    {
        $data['barang'] = $barang;
        return view('barang.edit', $data);
    }

    function update(Barang $barang)
    {
        $barang->nama = request('nama');
        $barang->harga = request('harga');
        $barang->deskripsi = request('deskripsi');
        $barang->foto = request('foto');
        $barang->save();
 
        return redirect('barang'); 
    }

    function delete(barang $barang)
    {
        $barang->delete();
        return redirect('barang');
    }
}
