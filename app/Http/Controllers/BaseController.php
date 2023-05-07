<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    public function index(){
        $Day = $_GET['Day'] ?? 'Senin';
        $Ar = ['a','b','c','d','e','f','g','h','i','j','k','l','m'];
        return view('utama',[
            'Day' => $Day,
            'Log'=> DB::table('mapel')->where('hari',$Day)->get(),
            'Data'=> DB::table('data')->get(),
            'Ar'=> $Ar
        ]);
    }
}
