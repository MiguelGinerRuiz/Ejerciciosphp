<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\libros;
class LibrosController extends Controller
{
    public function index()
    {
        $libro = libros::get();
        return view('libros.index', compact('libro'));
    }

    public function create()
    {
        $libro = libros::get();
        return view('libros.create', compact('libro'));
    }

    public function store(Request $request)
    {
        $libro = libros::create($request->all());
        return redirect()->route('libros.index');

    }

    public function show($id)
    {
        $libro = libros::find($id);
        return view('libros.show', compact('libro'));
    }
}
