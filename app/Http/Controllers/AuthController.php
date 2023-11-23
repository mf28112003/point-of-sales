<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller 
{
    function showLoginForm()
    {
        return view('login');
    }
    function login()
    {
        $credential = 
        [
            'email' => request('email'),
            'password' => request('password')
        ];
        if(auth()->attempt($credential)) 
        {
            return redirect('admin');
        }
        return back()->with('error', 'Login Gagal');
    }

    public function logout()
    {
        auth()->logout();

        return redirect('login');
    }
}