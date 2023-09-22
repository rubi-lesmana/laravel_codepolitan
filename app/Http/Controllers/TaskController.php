<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function store(Request $request){
        DB::table('tasks')->insert([
            'task' => $request->task,
            'user' => $request->user,
        ]);
    }
}
