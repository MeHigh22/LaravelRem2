<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class View1Controller extends Controller
{
    public function index()
    {
        return view('view1');
    }
}
