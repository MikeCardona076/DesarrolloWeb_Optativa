<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventarioController extends Controller
{
    //INVENTARIO Controller
    public function index()
    {
        return view('inventario.index');
    }


}

