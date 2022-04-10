<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;

class FakultasController extends Controller
{
    // Menampilkan List Fakultas
/*
    public function index()
    {
        $fakultas = ['Fakultas Ilmu Komputer dan Rekayasa', 'Fakultas Ekonomi dan Bissnis'];
        $kampus ="Universitas MDP";

        return view("fakultas.index", compact("fakultas", "kampus"));
    }
    */


    public function detail($id= null)
    {
        $kampus = "Univ MDP";
      
        return view("fakultas.detail",compact("kampus","id"));
    }

    public function index()
    {
        $fakultas = Fakultas::all();
        $kampus = "Univ MDP";
        return view("fakultas.index",compact('fakultas','kampus'));
    }
}
