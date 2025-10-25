<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        // Kirim data proyek ke View 'portfolio'
        return view('home'); 
    }
}
