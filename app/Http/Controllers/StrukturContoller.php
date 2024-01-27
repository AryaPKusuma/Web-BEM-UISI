<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabinets;
use App\Models\Ministries;

class StrukturContoller extends Controller
{
    public function index()
    {
        // $kementrians = Ministries::whereHas('cabinet', function ($query) {
        //     $query->where('status', 'active');
        // })->get();

        // return view('layout.app', compact('kementrians'));
    }
}
