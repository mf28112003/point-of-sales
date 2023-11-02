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
        $gudang->nama = request('nama');
        $gudang->harga = request('harga');
        $gudang->deskripsi = request('deskripsi');
        $gudang->foto = request('foto');
        $gudang->save();

        return redirect('gudang');
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
        $gudang->nama = request('nama');
        $gudang->harga = request('harga');
        $gudang->deskripsi = request('deskripsi');
        $gudang->foto = request('foto');
        $gudang->save();
 
        return redirect('gudang'); 
    }

    function delete(gudang $gudang)
    {
        $gudang->delete();
        return redirect('gudang');
    }
}
