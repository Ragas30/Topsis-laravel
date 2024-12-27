<?php

namespace App\Http\Controllers\kriteria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class kriteriaController extends Controller
{
    public function index()
    {
        return view('inputKriteria.index');
    }

    public function store(Request $request){
        //store data kriteria ke database
        //redirect ke halaman dashboard
        return redirect()->route('dashboard');
    }
    
}
