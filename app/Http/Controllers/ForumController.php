<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;
use App\Rep_forum;
use Illuminate\Support\Facades\Auth;


class ForumController extends Controller
{
    //
	public function index(){
		return view('forum.index')->with('questions',Forum::all());
	}


    public function show_question(){
        $question = Forum::find(request('id'));
        return view('forum.show')->with(['question'=>$question,
                                        'responses'=>$question->rep_forums
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
