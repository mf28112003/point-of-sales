<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $data['list_user'] = User::all();
        return view('user.index', $data);
    }

    function create()
    {
        return view('user.create');
    }

    function store()
    {
        $user = new user;
        $user->nama = request('nama');
        $user->harga = request('harga');
        // $user->deskripsi = request('deskripsi');
        // $user->foto = request('foto');
        $user->save();

        return redirect('user');
    }

    function show(user $user)
    {
        $data['user'] = $user;
        return view('user.show');
    }

    function edit(user $user)
    {
        $data['user'] = $user;
        return view('user.edit', $data);
    }

    function update(user $user)
    {
        $user->nama = request('nama');
        $user->harga = request('harga');
        // $user->deskripsi = request('deskripsi');
        // $user->foto = request('foto');
        $user->save();
 
        return redirect('user'); 
    }

    function delete(user $user)
    {
        $user->delete();
        return redirect('user');
    }
}
