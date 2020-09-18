<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

use Illuminate\Support\Facades\Validator;
// use Validator;

class SignupController extends Controller
{
    
    function index(){

    	return view('signup.index');
    }

  public  function store(Request $request){
    	
    

	$validator = Validator::make($request->all(), [
		'username' => 'required',
		'password' => ['required', 
               'min:4'
            //    'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/', 
			//    'confirmed'
		],
			   'email'    => 'required|email',
			   'type'     =>'required'
	]);

	if ($validator->fails()) {
		return redirect('/signup')
					->with('errors', $validator->errors())
					->withInput();
	}

		
  $user = new User();
        $user->username     = $request->username;
      
		$user->password     = $request->password;
		$user->email        =$request->email;
        $user->type         = $request->type;
       
        $user->save();

       
    	
    		return redirect('/login');
    	}
    }
