<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class chartController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function charts(){
    	$data[0] = DB::table('users')->where('validation',1)->get()->count();
    	$data[1] = DB::table('users')->whereNotNull('encadrant_id')->get()->count();
        $data[2] = DB::table('users')->where('salarie', 0)->get()->count();
    	$data[3] = DB::table('users')->groupBy('ville')->get()->count();
    	return response()->json($data);
    }
}
