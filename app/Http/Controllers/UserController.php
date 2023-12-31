<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    function index()
    {
        if(request('nama')){
            $nama="%" . request('nama') . "%";
            $data['list_user']= User::where('nama', 'like', $nama)->get();
        }
        elseif(request('jenis_kelamin')){
            $data['list_user']= User::where('jenis_kelamin', request('jenis_kelamin'))->get();
        }
        else{
            $data['list_user'] = user::all();

        }
        return view('user.index', $data);
    }

    function create()
    {
        return view('user.create');
    }

    function store()
    {
        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->jenis_kelamin = request('jenis_kelamin');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('admin/user');
    }

    function show(user $user)
    {
        $data['user'] = $user;
        return view('user.show', $data);
    }

    function edit(user $user)
    {
        $data['user'] = $user;
        return view('user.edit', $data);
    }

    function update(User $user)
    {
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->jenis_kelamin = request('jenis_kelamin');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('admin/user');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('admin/user');
    }
}
