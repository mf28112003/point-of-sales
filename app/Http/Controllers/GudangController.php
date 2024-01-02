<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gudang;

use Illuminate\Http\Request;

class GudangController extends Controller
{
    function index()
    {
        $data['list_gudang'] = gudang::all();
        return view('gudang.index', $data);
    }

    function create()
    {
        return view('gudang.create');
    }

    function store()
    {
        $gudang = new gudang;
        $gudang->nama_barang = request('nama_barang');
        $gudang->jumlah_barang = request('jumlah_barang');
        // $gudang->deskripsi = request('deskripsi');
        // $gudang->foto = request('foto');
        $gudang->save();

        return redirect('admin/gudang');
    }

    function show(gudang $gudang)
    {
        $data['gudang'] = $gudang;
        return view('gudang.show');
    }

    function edit(gudang $gudang)
    {
        $data['gudang'] = $gudang;
        return view('gudang.edit', $data);
    }

    function update(gudang $gudang)
    {
        $gudang->nama_barang = request('nama_barang');
        $gudang->jumlah_barang = request('jumlah_barang');
        // $gudang->deskripsi = request('deskripsi');
        // $gudang->foto = request('foto');
        $gudang->save();
 
        return redirect('admin/gudang'); 
    }

    function destroy(gudang $gudang)
    {
        $gudang->delete();
        return redirect('admin/gudang');
    }
}
