<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Satuan;

use Illuminate\Http\Request;

class SatuanController extends Controller
{
    function index()
    {
        $data['list_satuan'] = Satuan::all();
        return view('satuan.index', $data);
    }

    function create()
    {
        return view('satuan.create');
    }

    function store()
    {
        $satuan = new satuan;
        $satuan->nama = request('nama');
        $satuan->harga_jual = request('harga');
        // $satuan->deskripsi = request('deskripsi');
        // $satuan->foto = request('foto');
        $satuan->save();

        return redirect('satuan');
    }

    function show(Satuan $satuan)
    {
        $data['satuan'] = $satuan;
        return view('satuan.show');
    }

    function edit(Satuan $satuan)
    {
        $data['satuan'] = $satuan;
        return view('satuan.edit', $data);
    }

    function update(Satuan $satuan)
    {
        $satuan->nama = request('nama');
        $satuan->harga_jual = request('harga');
        // $satuan->deskripsi = request('deskripsi');
        // $satuan->foto = request('foto');
        $satuan->save();
 
        return redirect('satuan'); 
    }

    function delete(Satuan $satuan)
    {
        $satuan->delete();
        return redirect('satuan');
    }
}
