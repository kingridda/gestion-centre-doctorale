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
    	$data['users'] = DB::table('users')->get()->count();
    	$data['doctorants'] = DB::table('users')->whereNotNull('encadrant_id')->get()->count();
        $data['salarie'] = DB::table('users')->where('salarie','!=', 0)->get()->count();
        $data['villes'] = DB::table('users')->select(DB::raw('count(*) as nbr, ville'))->groupBy('ville')->get();
        //$data['2020'] = DB::table('users')->whereMonth('created_at','05');
    	return response()->json($data);
    }
}
