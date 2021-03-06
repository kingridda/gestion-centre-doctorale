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
    	$data['total_doctorants'] = DB::table('users')->whereNotNull('encadrant_id')->get()->count();
        $data['total_inscriptions'] = DB::table('users')->select(DB::raw('count(id) as nbr'),DB::raw('YEAR(created_at) year'))
        ->groupby('year')->orderBy('created_at', 'asc')
        ->get();

        $data['salarie'] = DB::table('users')->whereNotNull('encadrant_id')->where('salarie','!=', 0)->get()->count();
        $data['villes'] = DB::table('users')->select(DB::raw('count(*) as nbr, ville'))->groupBy('ville')->get();
        $data['soutenances'] = DB::table('soutenances')->select(DB::raw('count(id) as nbr'),DB::raw('YEAR(created_at) year'))
        ->groupby('year')
        ->get();
        $data['structures_values'] = DB::table('theses')->join('structures', 'structures.id', '=', 'theses.structure_id')->select(DB::raw('structures.titre ,count(*) as nbr'))->groupBy('structures.titre')->get();
        $data['tot_doctorants_par_annee'] = DB::table('users')->select(DB::raw('count(id) as nbr'),DB::raw('YEAR(created_at) year'))
        ->groupby('year')->orderBy('created_at', 'asc')
        ->get();

        

        return response()->json($data);
    }
}
