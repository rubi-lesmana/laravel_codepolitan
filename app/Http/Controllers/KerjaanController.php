<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KerjaanController extends Controller
{
    public function store(Request $request){
        DB::table('kerjaan')->insert([
            'kerja' => $request->kerja,
            'deskripsi' =>$request->deskripsi
        ]);
        return 'Berhasil';
    }
}
