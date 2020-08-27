<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    
    function index(){

    	return view('signup.index');
    }

    function validation(Request $request){
    	
    	if($request->username == $request->password){
    		//session
    		return redirect('/home');
    	}
    }
}