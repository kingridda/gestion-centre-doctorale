<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
        


		public function create(){
			return view('posts.create');
		}




        protected function validator(array $data)
    	{
        return Validator::make($data, [
            'title' => ['required', 'string', 'max:255'],
            'description' => [],
            'image' => ['required', 'string', 'max:255'],
            'attachements' => ['required', 'string', 'max:255'],

        ]);
    }

}
