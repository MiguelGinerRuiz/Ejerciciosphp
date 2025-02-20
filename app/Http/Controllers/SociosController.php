<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\socios;
class SociosController extends Controller
{

    public function index()
    {
        $socio = socios::get();
        return view('socios.index', compact('socio'));
    }

    public function show(string $id)
    {
        //
    }

}
