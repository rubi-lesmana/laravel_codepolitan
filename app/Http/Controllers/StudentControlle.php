<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentControlle extends Controller
{
    public function index(){
        return "Bismillah";
    }

    public function store(Request $request){
        DB::table('students')->insert([
            'nama' => $request->nama,
            'jurusan' => $request->jurusan
        ]);
        return 'Berhasil  Menambahkan';
    }
}
