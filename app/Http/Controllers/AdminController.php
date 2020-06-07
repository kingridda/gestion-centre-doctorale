<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PDF;
use App\These;
use App\User;
use App\Encadrant;
use App\Soutenance;
use DB;
use App\Structure;

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
        $nb_notifications =intval(DB::table('users')->where('validation',0)->get()->count()) ;
        $nb_demande_souten = intval(DB::table('soutenances')->where('date',null)->get()->count());
        return view('adminV.admin2')->with(compact('nb_notifications', 'nb_demande_souten'));
    }

    public function get_list_doctorant(){
        $data = DB::table('users')->join('encadrants', 'users.encadrant_id', '=','encadrants.id')->where('validation', 1)->join('theses', 'users.these_id', '=', 'theses.id')->select(DB::raw('users.*, theses.sujet, encadrants.name as encadrant'))->get();
        $pdf = PDF::loadView('list_docs', compact('data'));
        return $pdf->download('list_doctorants.pdf');
        return view('list_docs')->withData($data); 
        
    }
    public function these(){
        return view('adminV.theses')->with(['theses'=>These::all(), 
                                    'structures'=>Structure::all()]);
    }
    public function doctorants(){
        return view('adminV.docs')->with('docs',DB::table('users')->join('encadrants', 'users.encadrant_id', '=','encadrants.id')->where('validation', 1)->join('theses', 'users.these_id', '=', 'theses.id')->select(DB::raw('users.*, theses.sujet, encadrants.name as encadrant'))->get());
    }

    public function add_new_inscription(){
        return view('adminV.new_inscriptions',['users' => DB::table('users')->where('validation', 0)->get()]);
    
    }
    public function update_new_inscription(){
       $users =  request('user_ids');
       foreach($users as $id){
            DB::table('users')->where('id',$id)->update([
                        'validation'=> 1]);
        }
        return redirect('/admin');
    }

    public function modifie_doctorants(Request $request){
        
        $this->validate($request, [
            'idU' => ['required'],
            'name' => [ 'max:255'],
            'email' => [  'max:255', 'unique:users'],
            'gsm' => [  'max:15'],
            'prenom' => [  'max:255'],
            'ville' => [  'max:255'],
            'adresse' => [],
            'cin' => [  'max:10'],
        ]);
            $data = User::find($request->idU);
            if($request->name) $data->name = $request->name;
            if($request->email) $data->email = $request->email;
            if($request->gsm) $data->gsm = $request->gsm;
            if($request->prenom) $data->prenom = $request->prenom;
            if($request->ville) $data->ville = $request->ville;
            if($request->adresse) $data->adresse = $request->adresse;
            if($request->cin) $data->cin = $request->cin;
            $data->cin = strtoupper($request->cin);
            DB::table('users')->where('id',$request->idU)->update([
                        'name'=> $data->name,
                        'email' => $data->email,
                        'gsm' => $data->gsm,
                        'prenom' => $data->prenom,
                        'ville' => $data->ville,
                        'adresse' => $data->adresse,
                        'cin' => $data->cin,
            ]);

            return redirect('admin/doc');
    }





    public function changer_doctorant(Request $request){
        DB::table('users');

        return view('adminV.docs')->withDocs(User::all());
    }
    public function directeurs(){
        return view('adminV.directeurs')->withEncadrants(Encadrant::all());
    }
    public function soutenances(){
        return view('adminV.soutenances')->with('soutenances', DB::table('soutenances')->join('users', 'users.id', '=','soutenances.user_id')->join('theses', 'theses.id', '=', 'these_id')->select(DB::raw('soutenances.*, users.name, users.prenom, users.these_id,sujet'))->orderBy('created_at', 'desc')->get());
    }

    public function store_these(Request $request){
         $this->validate($request, [
            'domaine' => 'required|string|max:30',
            'filiere' => 'required|max:30|string',
            'sujet' => 'required|max:50|string',
            'structure' =>''
             ]);
        These::create([
            'domaine' => $request->domaine,
            'filiere' => $request->filiere,
            'sujet' => $request->sujet,
            'structure_id'=> $request->structure,
        ]);
        
        return redirect('/admin/theses');
    }
    public function supprimer_these(Request $request){
         $this->validate($request, [
            'supp_id' => 'required'
             ]);
        DB::table('theses')->where('id', $request->supp_id)->delete();
        
        return redirect('/admin/theses');
    }
    public function supprimer_soutenance(Request $request){
         $this->validate($request, [
            'supp_id' => 'required'
             ]);
        DB::table('soutenances')->where('id', $request->supp_id)->delete();
        
        return redirect('/admin/soutenances');
    }
    


    public function store_encadrant(Request $request){
         $this->validate($request, [
            'name' => 'required|string|max:30',
            'cin' => 'required|max:15|string',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'job_title' => 'max:190',
            'avatar' => 'image'
             ]);
         $path = null;
         if($request->avatar){
            $path = request('avatar')->store('uploads', 'public'); 
         }
        Encadrant::create([
            'name' => $request->name,
            'cin' => $request->cin,
            'email' => $request->email,
            'job_title' => $request->job_title,
            'avatar' => $path,
            'password' => Hash::make($request->password)
        ]);
        
        
        return redirect('/admin/dir');
    }
    public function supprimer_encadrant(Request $request){
         $this->validate($request, [
            'supp_id' => 'required'
             ]);
        DB::table('encadrants')->where('id', $request->supp_id)->delete();
        
        return redirect('/admin/dir');
    }
     public function supprimer_doctorant(Request $request){
         $this->validate($request, [
            'supp_id' => 'required'
             ]);
        DB::table('users')->where('id', $request->supp_id)->delete();
        
        return redirect('/admin/doc');

    }

    public function modifie_soutenance(Request $request){
        
       $this->validate($request, [
            'idU' => 'required',
            'date' => '',
            'heure' => '',
            'amphi' => '',
            'jury' => '',
        ]);
       
            $data = Soutenance::find($request->idU);
            if($request->date) $data->date = $request->date;
            if($request->heure) $data->heure = $request->heure;
            if($request->amphi) $data->amphi = $request->amphi;
            if($request->jury) $data->jury = $request->jury;
            DB::table('soutenances')->where('id',$request->idU)->update([
                        'date' => $request->date,
                        'heure' => $request->heure,
                        'amphi' => $request->amphi,
                        'jury' => $request->jury
    
            ]);

            return redirect('admin/soutenances');
    }

    //liaisons
    public function show_liaison(){
        return view('adminV.liaison',['users' => DB::table('users')->whereNull('encadrant_id')
                                                                    ->orWhereNull('these_id')->having('validation', 1)->get(),
                                            'encadrants' => DB::table('encadrants')->get(),
                                            'theses' => DB::table('theses')->get()
                                    ]);
    }
    public function submit_liaison(Request $request){
        $this->validate($request, [
            'user_id' => 'required',
            'encadrant_id' => 'required',
            'these_id' => 'required'
             ]);
        DB::table('users')->where('id', $request->user_id)->update([
                                                    'encadrant_id'=> $request->encadrant_id,
                                                    'these_id' => $request->these_id
                                                ]);
        return redirect('/admin/liaison');
    }


    public function show_supprimer_liaison(){
        return view('adminV.supprimer_liaison',['users' => DB::table('users')->get(),
                                    ]);
    }
    public function supprimer_liaison(Request $request){
        $this->validate($request, [
            'user_id' => 'required',
             ]);
        DB::table('users')->where('id', $request->user_id)->update([
                                                    'encadrant_id'=> null,
                                                    'these_id' => null
                                                ]);
        return redirect('/admin/liaison/s');
    }


}
