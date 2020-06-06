<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Rapport;
use App\Encadrant;
use App\Soutenance;
use App\Message;
use App\These;
use App\Structure;
use DB;
use mikehaertl\pdftk\Pdf;
class ProfileController extends Controller
{   

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('etudiantV.profile')->with('validation', Auth::user()->validation);
    }
    public function preInscription(){
        $data = Auth::user();
        $d=['Nom'=>$data->name,'Prenom'=>$data->prenom,'Email'=>$data->email,'CIN'=>$data->cin,'GSM'=>$data->gsm,'Ville'=>$data->ville,'Adresse'=>$data->adresse,'These'=>$data->these_id,'Dir de these'=>$data->encadrant_id,'date'=>date("Y/m/d")];
        $pdf = new pdf("fiche inscription form GCD.pdf");
        $pdf->fillForm($d)
        ->saveAs('formulaire-'.$data->cin.'.pdf');
        //$pdf = PDF::loadView('inscription', compact('data',$data));
       	//$pdf->download('pre_inscription.pdf');
        return view('inscription')->withData($data);
    }
    public function show_profile(){
        $user = Auth::user();
        if($user->encadrant_id && $user->these_id)
        return view('etudiantV.show_profile')->with(['user'=>$user,
                                                    'encadrant'=>Encadrant::find(Auth::user()->encadrant_id)->name,
                                                    'these'=>These::find($user->these_id)->sujet ,
                                                    'structure'=>Structure::find(These::find($user->these_id)->structure_id)->titre ]);
        else return view('etudiantV.show_profile')->with('user',$user);

    }
    public function change_avatar(Request $request){
        $this->validate($request, [
            'image' => 'required|max:2000|image'
        ]);
        
        $ImagePath = request('image')->store('uploads', 'public');        
        
        DB::table('users')
              ->where('id', Auth::user()->id)
              ->update(['avatar' => $ImagePath]);
              
        return redirect('/show');
    }

        //gestion des massages
    public function env_message_show(){
        if(Auth::user()->encadrant_id === null)return redirect('/profile');
        return view('etudiantV.env_msg_enc');
    }

    public function show_messages(){
        if(Auth::user()->encadrant_id === null)return redirect('/profile');
        if(Auth::user()->messages->count()){
        return view('etudiantV.see_messages')->with('messages',Auth::user()->messages()->orderBy('created_at', 'desc')->get());
        }
        else return view('etudiantV.see_messages'); 

    }
    public function show_one_messages(){
        if(Auth::user()->encadrant_id === null)return redirect('/profile');
        return view('etudiantV.see_one_message')->with('message', Message::find(request('id')));
    }

    public function env_message(Request $request){
        //validate data

        if(Auth::user()->encadrant_id === null)return redirect('/profile');

        $this->validate($request, [
            'title' => 'required|string|max:150',
            'description' => 'required',
        ]);


        Message::create([
            'objet' => $request->title,
            'contenu' => $request->description,
            'user_id' => Auth::user()->id,
            'source' => 1,
            'encadrant_id' => Auth::user()->encadrant_id
        ]);

        return redirect('/profile');

        }
        

        //gestion du compte rendu

        public function form_compte_rendu(){
            if(Auth::user()->encadrant_id === null)return redirect('/profile');
            return view('etudiantV.env_compte_rendu');
        }
        public function show_compte_rendu(){
            if(Auth::user()->encadrant_id === null)return redirect('/profile');
            return view('etudiantV.show_compte_rendu')->with('crs',Auth::user()->rapports()->orderBy('created_at', 'desc')->get()); 
        }

        
        public function env_compte_rendu(Request $request){
            if(Auth::user()->encadrant_id === null)return redirect('/profile');

            $this->validate($request, [
            'title' => 'required|string|max:30',
            'description' => 'required',
            'attachments' => 'required|max:2000|mimes:pdf,doc,docx,zip,rar'
        ]);
        
        $attachmentPath = request('attachments')->store('uploads', 'public');        
        Rapport::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'attachment' => $attachmentPath, 
        ]);
        
        return redirect('/profile');
        }

        //SOUTENANCE
        public function demande_soutenance(){
            if(Auth::user()->encadrant_id === null)return redirect('/profile');
            return view('etudiantV.demande_soutenance');
        }

        public function env_demande_soutenance(Request $request){
            if(Auth::user()->encadrant_id === null)return redirect('/profile');
            $this->validate($request, [
            'attachments' => 'required|max:2000|mimes:pdf,doc,docx,zip,rar'
        ]);
        
        $attachmentPath = request('attachments')->store('uploads', 'public');        
        Soutenance::create([
            'user_id' => Auth::user()->id,
            'demande_soutenance' => $attachmentPath
        ]);
        
        return redirect('/profile');

        }
}
