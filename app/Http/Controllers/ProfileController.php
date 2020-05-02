<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Rapport;
use App\Soutenance;
use App\Message;

class ProfileController extends Controller
{
        
    public function show_profile(){
        return view('etudiantV.show_profile')->withUser(Auth::user());
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
        return view('etudiantV.env_msg_enc');
    }

    public function show_messages(){
        return view('etudiantV.see_messages')->with('messages',Auth::user()->messages);
    }

    public function env_message(Request $request){
        //validate data

     

        $this->validate($request, [
            'title' => 'required|string|max:150',
            'description' => 'required',
        ]);


        Message::create([
            'objet' => $request->title,
            'contenu' => $request->description,
            'user_id' => Auth::user()->id,
            'encadrant_id' => Auth::user()->encadrant_id
        ]);

        return redirect('/profile');

        }
        

        //gestion du compte rendu

        public function form_compte_rendu(){
            return view('etudiantV.env_compte_rendu');
        }
        public function show_compte_rendu(){
            return view('etudiantV.show_compte_rendu')->with('crs',Auth::user()->rapports);
        }

        
        public function env_compte_rendu(Request $request){

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
            return view('etudiantV.demande_soutenance');
        }

        public function env_demande_soutenance(Request $request){
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
