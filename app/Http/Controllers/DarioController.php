<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DarioController extends Controller
{
    //
    public function index()
    {
        return view('dario.index');
    }
}
