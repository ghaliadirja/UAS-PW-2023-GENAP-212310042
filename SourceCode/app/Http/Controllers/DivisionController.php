<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function Music()
    {
        return view('about.music');
    }

    public function Dance()
    {
        return view('about.dance');
    }

    public function Art()
    {
        return view('about.art');
    }

    public function Photography()
    {
        return view('about.photography');
    }

    public function Choir()
    {
        return view('about.choir');
    }

    public function Theater()
    {
        return view('about.theater');
    }

}