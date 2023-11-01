<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->search){
            $tugas = DB::table('tugas')
                ->where('tugas', 'LIKE', '%$request->search%')
                ->get();
            return $tugas;
        }
        // if($request->search){
        //     $tugas = Tugas::where('tugas', 'LIKE', '%$request->search%')
        //         ->get();
        //     return $tugas;
        // }
        //$tugas = DB::table('tugas')->get();

        $tugas = Tugas::all();
        return $tugas;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('tugas')->insert([
            'tugas' => $request->tugas,
            'user' => $request->user
        ]);

        return 'Success';
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tugas = DB::table('tugas')->where('id', $id)->first();
        //ddd($tugas);
        return $tugas;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $tugas = DB::table('tugas')->where('id', $id)->update(
            [
                'tugas' => $request->tugas,
                'user' => $request->user
            ]
        );

        return 'Berhasil di Update';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tugas $tugas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('tugas')
            ->where('id', $id)
            ->delete();
        return 'Berhasil di Hapus';
    }
}
