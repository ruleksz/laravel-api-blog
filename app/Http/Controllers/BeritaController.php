<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return response()->json(Berita::latest()->get());
    }

    public function show($slug)
{
    return response()->json(
        Berita::where('slug', $slug)->firstOrFail()
    );
}
}
