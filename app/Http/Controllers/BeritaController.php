<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
{
    return Berita::all(); // atau pakai resource jika mau rapi
}

public function show($slug)
{
    $berita = Berita::where('slug', $slug)->firstOrFail();
    return response()->json($berita);
}

}
