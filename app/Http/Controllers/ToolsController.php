<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function index()
    {
        $tabs = ['Crayon', 'Bic', 'Latte', 'Machiato'];
        return view('pages.viewX', compact('tabs'));
    }
}
