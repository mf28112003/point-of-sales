<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   function index()
   {
    return view('welcome');
   }

   function login()
   {
    return view('login');
   }

   function register()
   {
    return view('register');
   }
}
