<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function Event()
    {
        return view('event.event');
    }


    public function Card()
    {
        return view('event.card');
    }
}