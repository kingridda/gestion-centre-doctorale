<?php 

namespace App\Http\Controllers;

use App\Message;
use App\These;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

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

        if(Auth::user()->users->count() && Auth::user()->messages->count() ){
        return view('encadrantV.see_messages')->with('messages',Auth::user()->messages()->join('users', 'users.id', '=', 'messages.user_id')->select(DB::raw('messages.*, users.name, users.prenom'))->orderBy('created_at', 'desc')->get()); 
        }
        return redirect('/encadrant');
    }
    public function show_one_messages(){
        $message = Message::find(request('id'));
        return view('encadrantV.see_one_message')->with(['message' => $message,
                                                        'doctorant'=> User::find($message->user_id),
                                                        'sujet'=> These::find(User::find($message->user_id)->these_id)->sujet]);
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
            'source' => 0,
            'encadrant_id' => Auth::user()->id,
        ]);

        return redirect('/encadrant');

        }

        //comptes rendu
        public function show_comptes_rendu(){
            return view('encadrantV.show_comptes_rendu')->with('crs', Auth::user()->users()->join('rapports', 'rapports.user_id', '=', 'users.id')->select(DB::raw('rapports.* , users.name, users.prenom'))
                ->orderBy('created_at', 'desc')->get());
        }
}
