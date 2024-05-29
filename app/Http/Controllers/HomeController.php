<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(Request $request) 
    {
        // $data = $request->session()->all();
        return view('home.index');
    }

    public function contact()
    {
        return view('home.contact');
    }

}