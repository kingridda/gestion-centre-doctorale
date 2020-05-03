<?php 

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EncadrantController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:encadrant');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('encadrantV.encadrant');
    }
    public function show_profile()
    {
        return view('encadrantV.show_profile')->with('encadrant', Auth::user());
    }

    public function env_message_show(){
        return view('encadrantV.env_message')->with('users',Auth::user()->users);
    }

    public function show_messages(){

        if(Auth::user()->users->count()){
        return view('encadrantV.see_messages')->with(['messages'=>Auth::user()->messages,
                                                        'users' =>Auth::user()->users]);
        }
        return view('encadrantV.see_messages');
    }
    public function show_one_messages(){

        return view('encadrantV.see_one_message')->with('message', Message::find(request('id')));
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
            'user_id' => (int)$request->distination,
            'encadrant_id' => Auth::user()->id,
        ]);

        return redirect('/encadrant');

        }

        //comptes rendu
        public function show_comptes_rendu(){
            return view('encadrantV.show_comptes_rendu')->with('users', Auth::user()->users);
        }
}
