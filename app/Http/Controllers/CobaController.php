<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function add()
    {
        return view('livewire.create-kontak');
    }

}
