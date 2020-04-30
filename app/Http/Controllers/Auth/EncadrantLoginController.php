<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class EncadrantLoginController extends Controller
{
    public function __construct(){
    	$this->middleware('guest:encadrant')->except('logout');
    }

    public function showLoginForm(){
    	return view('auth.encadrant_login');
    }

    public function login(Request $request){
    	//validate data
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|string|min:8',
    	]);

    	//attempt to log user in
        
        
    	if(Auth::guard('encadrant')->attempt($request->only('email' , 'password'), $request->remember)){
    		//if succesflly log
       
    		return redirect()->intended(route('encadrant.dashboard'));

    	}
      

    	return redirect()->back()->withInput($request->only('email','remember'));
    	
    }
  
}
