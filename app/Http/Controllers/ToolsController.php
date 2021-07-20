<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function index()
    {
        $tabs = ['Stylo', 'Calculatrice', 'Pokédex', 'Drogue Dure'];
        return view('viewTab', compact('tabs'));
    }
}
