<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//------- Views dosen 

Route :: get("/dosen", function(){

    return view("dosen.index");
});

Route :: get("/dosen/detail", function(){

    return view("dosen.detail");
});

//------- Views mahasiswa 

Route :: get("/mahasiswa", function(){

    return view("mahasiswa.index");
});

Route :: get("/mahasiswa/detail", function(){

    return view("mahasiswa.detail");
});

//------- Views Fakultas 

/* Menampilkan satu data

Route :: get("/fakultas", function(){
     $data = ['ilkom' => 'Fakultas Ilmu Komputer dan Rekayasa'];
    return view("fakultas.index",$data);
}); 
Cara Panggil di Index :

-{{$ilkom}}

*/

/* Menampilkan banyak data

Route :: get("/fakultas", function(){
    $data = ['fakultas' => ['Fakultas Ilmu Komputer dan Rekayasa', 'Fakultas Ekonomi dan Bisnis']];
   return view("fakultas.index",$data);
}); 

*/

/* Menampilkan data menggunakan With

Route :: get("/fakultas", function(){
   
   return view("fakultas.index")->with("fakultas",['Fakultas Ilmu Komputer dan Rekayasa','Fakultas Ekonomi dan Bisnis']);
}); 
*/

// Menggunakan Compact 

Route :: get("/fakultas", function(){
   $fakultas=['Fakultas Ilmu Komputer dan Rekayasa', 'Fakultas Ekonomi dan Bissnis'];
   $kampus ="Universitas MDP";
    return view("fakultas.index",compact('fakultas','kampus'));
 });

/* Soal Latihan 1
Buat Route dan view untuk menapilkan data Program Studi
Siapkan/buat 5 buah data program studi dan tampilkan di view menggunakan metode :
Untuk npm genap, gunakan metode compact
Untuk npm ganjil, gunakan metode with */

 Route :: get("/program_studi", function(){
    
    return view("program_studi.index")->with("program_studi",['Teknik Sipil','Teknik mesin', 'Teknik Kimia', 'Teknik Electro', 'Teknik Fisika']);
 }); 


 use App\Http\Controllers\FakultasController;


Route :: get("/fakultas", [FakultasController::class,'index']);
Route :: get("/fakultas/detail/{id?}", [FakultasController::class,'detail']);

Route :: get("/program_studi", [Program_stduiController::class,'index']);
Route :: get("/program_studi/detail/{id?}", [Program_studiController::class,'detail']);


Route::get("/fakultas",[FakultasController::class,"index"]);
