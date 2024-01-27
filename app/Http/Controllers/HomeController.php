<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabinets;
use App\Models\Members;
use App\Models\Berita;


class HomeController extends Controller
{
    public function index()
    {
        $kabinet = Cabinets::where('status', 'active')->get();

        $members = Members::whereHas('position', function ($query) {
            $query->whereIn('name', ['president', 'wakil_president', 'wakil president', 'Sekretaris','Bendahar']);
        })->get();

        $beritaTerbaru = Berita::latest()->get();

        return view('home', compact('kabinet', 'members', 'beritaTerbaru'));
    }
}
