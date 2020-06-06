<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;
use App\Rep_forum; 
use DB;
use Illuminate\Support\Facades\Auth;


class ForumController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
	public function index(){
        if(Auth::user()->encadrant_id === null)return redirect('/profile');
		return view('forum.index')->with('questions',Forum::select('*')->orderBy('created_at', 'desc')->get());
	}


    public function show_question(){
        if(Auth::user()->encadrant_id === null)return redirect('/profile');
        $question = Forum::find(request('id'));
        return view('forum.show')->with(['question'=>$question,
                                        'responses'=>$question->rep_forums()->join('users', 'users.id', '=', 'rep_forums.user_id')->select(DB::raw('rep_forums.*, users.name, users.prenom' ))->get()
                                        ]);
    }   


	public function store(Request $request){
		 $this->validate($request, [
            'question' => 'required|string',
            'image' => 'image'
             ]);
         $attachmentPath = null;
        if($request->image){
            $attachmentPath = request('image')->store('uploads', 'public');        
        }
        Forum::create([
            'question' => $request->question,
            'image' => $attachmentPath,
            'user_id' => Auth::user()->id
        ]);
        
        return redirect('/forum');
	}

    public function store_response(Request $request){
         $this->validate($request, [
            'response' => 'required|string',
            'image' => 'image'
             ]);
         $attachmentPath = null;
        if($request->image){
            $attachmentPath = request('image')->store('uploads', 'public');        
        }
        Rep_forum::create([
            'reponse' => $request->response,
            'image' => $attachmentPath,
            'user_id' => Auth::user()->id,
            'forum_id'=> $request->id
        ]);
        
        return redirect('/forum');
    }


}
