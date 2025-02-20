<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\libros;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
{
    $libros = libros::get();
    return $libros;
}
}
