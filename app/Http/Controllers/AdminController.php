<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\User;
use App\Http\Requests\UserRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //


    function dotnet(){

    	return view('admin.dotnet');
    }
      function node(){

    	return view('admin.node');
    }

    function index(){

      return view('admin.index');
    }
     function view_users(Request $request){

       $users = DB::table('login')
                        //->join('accounts', 'user_table.userId', '=', 'accounts.accId')
                        ->get();

       // return view('home.index')->with('users', $users);

      return view('admin.viewuser')->with('users', $users);
    }

      function edituser($id){

         $user = User::find($id);
       

      return view('admin.edituser')->with('user', $user);
    }

      function deleteuser($id){


         $user = User::find($id);
       

      return view('admin.deleteuser')->with('user', $user);

      
    }

        function updateduser( Request $request, $id){



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
		 
		return redirect('Admin/edituser/'.$id)
					->with('errors', $validator->errors())
					->withInput();
	}
    else {
   
      $user = User::find($id);
      
        $user->username     = $request->username;
        $user->password     = $request->password;
        $user->email        = $request->email;
        $user->type         = $request->type;
        $user->save();

      
      return redirect()->action('AdminController@view_users');
  }
    }

     function removeuser($id, Request $request){
        
      
        if(User::destroy($id)){
            return redirect()->action('AdminController@view_users');
        }else{
            return redirect()->route('admin.deleteuser', $id);
        }
    }




      function adminureg(){

      return view('admin.createuser');
    }

    function storeuser(Request $request){
 //    	$validator = Validator::make($request->all(), [
	// 	'username' => 'required',
	// 	'password' => ['required', 
 //               'min:4'
 //            //    'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/', 
	// 		//    'confirmed'
	// 	],
	// 		   'email'    => 'required|email',
	// 		   'type'     =>'required'
	// ]);

	// if ($validator->fails()) {
	// 	return view('Admin/storeuser')
	// 				->with('errors', $validator->errors())
	// 				->withInput();
	// }

		
  $user = new User();
        $user->username     = $request->username;
      
		$user->password     = $request->password;
		$user->email        =$request->email;
        $user->type         = $request->type;
       
        $user->save();

       
    	
    		 return redirect()->action('AdminController@view_users');
    	




    }
    
  
          function admintutor(){

      return view('admin.tutor');
    }


          function adminstudent(){

      return view('admin.student');
    }

      function payment(){

      return view('student.index');
    }

}
