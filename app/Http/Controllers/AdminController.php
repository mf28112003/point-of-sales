<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller 
{
    function index()
    {
        return view('admin');
    }
}