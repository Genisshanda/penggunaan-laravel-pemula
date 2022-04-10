<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Program_studiController extends Controller
{
    //

    public function index()
    {
        $program_studi = ['Fakultas Ilmu Komputer dan Rekayasa', 'Fakultas Ekonomi dan Bissnis'];
        $kampus ="Universitas MDP";

        return view("program_studi.index", compact("program_studi", "kampus"));
    }

    public function detail($id= null)
    {
        $kampus = "Univ MDP";
        return view("program_studi.detail")->with("kampus","id");
        
    }
}
