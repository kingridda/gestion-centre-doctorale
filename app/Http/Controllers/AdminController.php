<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\These;
use App\User;
use App\Encadrant;
use App\Soutenance;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('adminV.admin');
    }
    public function these(){
        return view('adminV.theses')->withTheses(These::all());
    }
    public function doctorants(){
        return view('adminV.docs')->withDocs(User::all());
    }
    public function directeurs(){
        return view('adminV.directeurs')->withEncadrants(Encadrant::all());
    }
    public function soutenances(){
        return view('adminV.soutenances')->withSoutenances(Soutenance::all());
    }

    public function store_these(Request $request){
         $this->validate($request, [
            'domaine' => 'required|string|max:30',
            'filiere' => 'required|max:30|string',
            'sujet' => 'required|max:50|string'
             ]);
        These::create([
            'domaine' => $request->domaine,
            'filiere' => $request->filiere,
            'sujet' => $request->sujet
        ]);
        
        return redirect('/admin/theses');
    }
    public function store_encadrant(Request $request){
         $this->validate($request, [
            'name' => 'required|string|max:30',
            'cin' => 'required|max:15|string',
            'email' => 'required|email',
            'password' => 'required|min:8'
             ]);
        Encadrant::create([
            'name' => $request->name,
            'cin' => $request->cin,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        
        return redirect('/admin/dir');
    }
}
