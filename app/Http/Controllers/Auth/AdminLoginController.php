<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    public function __construct(){
    	$this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm(){
    	return view('auth.admin_login');
    }

    public function login(Request $request){
    	//validate data
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|string|min:8',
    	]);

    	//attempt to log user in
        
        
    	if(Auth::guard('admin')->attempt($request->only('email' , 'password'), $request->remember)){
    		//if succesflly log
            
    		return redirect()->intended(route('admin.dashboard'));

    	}
      

    	return redirect()->back()->withInput($request->only('email','remember'));
    	
    }
  
}
