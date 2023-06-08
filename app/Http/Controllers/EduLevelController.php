<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EduLevelController extends Controller
{
    public function data(){
        $edulevels = DB::table('edulevel')->get();
        return view('edulevel.data', ['edulevels' => $edulevels]);
    }
}
