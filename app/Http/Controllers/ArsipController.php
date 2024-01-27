<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabinets;

class ArsipController extends Controller
{
    public function index()
    {
        $kabinets = Cabinets::all();
        return view('arsip', compact('kabinets'));
    }
}
