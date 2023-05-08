<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $datapengguna = Pengguna::all();

        
        

        return view('pages.users-layout-1', compact('datapengguna'));

    }
}
