<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaPage extends Controller
{
    public function index($type = null)
    {

        $beritas = Berita::all();
        $beritaTerbaru = Berita::latest()->get();
        return view('news', compact('beritas', 'beritaTerbaru'));
    }

    public function show($id)
    {
        $berita = Berita::where('id', $id)->first();
        return view('newsDetail', compact('berita'));
    }
}
