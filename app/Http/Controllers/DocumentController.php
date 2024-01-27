<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documents;

class DocumentController extends Controller
{
    public function index()
    {

        $documents = Documents::all();

        return view('dokumen', compact('documents'));
    }
}
