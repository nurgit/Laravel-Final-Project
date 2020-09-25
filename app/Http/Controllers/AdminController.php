<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\User;
use App\Student;
use App\Tutor;
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

      return view('Admin.createuser');
    }

    function storeuser(Request $request){


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
		return redirect('/adminureg')
					->with('errors', $validator->errors())
					->withInput();
	}
    else {
		
  $user = new User();
        $user->username     = $request->username;
      
		$user->password     = $request->password;
		$user->email        =$request->email;
        $user->type         = $request->type;
       
        $user->save();

       
    	
    		 return redirect()->action('AdminController@view_users');
    	

}


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

public function getRequest()
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://localhost:3000/userlist');
        $response = $request->getBody()->getContents();
        echo '<pre>';
        print_r($response);
        exit;
    }

//****************************************************************    Student Dashboard ***************************

  function view_student(Request $request){

       $users = DB::table('student')
                        //->join('accounts', 'user_table.userId', '=', 'accounts.accId')
                        ->get();

       // return view('home.index')->with('users', $users);

      return view('admin.viewstudent')->with('users', $users);

    }

    function createstudent()
    {

      return view ('admin.createstudent');
    }


     function editstudent($student_id){

         $user = Student::find($student_id);
       

      return view('admin.editstudent')->with('user', $user);
    }


    function updatestudent( Request $request, $student_id){



          $validator = Validator::make($request->all(), [
          'name' => 'required',
         'class'    => 'required',
         'package_id'     =>'required'
  ]);

  if ($validator->fails()) {
     
    return redirect('Admin/editstudent/'.$student_id)
          ->with('errors', $validator->errors())
          ->withInput();
  }
    else {
   
      $user = Student::find($student_id);
      
        $user->student_id     = $request->student_id;
        $user->login_id     = $request->login_id;
        $user->name        = $request->name;
        $user->class         = $request->class;
        $user->package_id         = $request->package_id;

        $user->save();

      
      return redirect()->action('AdminController@view_student');
  }
    }


     function deletestudent($student_id){


         $user = Student::find($student_id);
       

      return view('admin.deletestudent')->with('user', $user);

      
    }




     function removestudent($student_id, Request $request){
        
      
        if(Student::destroy($student_id)){
            return redirect()->action('AdminController@view_student');
        }else{
            return redirect()->route('admin.deletestudent', $student_id);
        }
    }
///////*******************************tutor section *****************************************

    function tutorres(Request $request)
    {
      $users=DB::table('tutor')
        ->where('activestatus', '=', 'pending')
                        //->join('accounts', 'user_table.userId', '=', 'accounts.accId')
                        ->get();
      return view('admin.tutorrequest')->with('users',$users);
    }


     function edittutor($id){

         $user = Tutor::find($id);
       

      return view('admin.edittutor')->with('user', $user);
    }


    function updatetutor( Request $request, $id){



          $validator = Validator::make($request->all(), [
          'name' => 'required',
         'subject'    => 'required',
         'activestatus'     =>'required'
  ]);

  if ($validator->fails()) {
     
    return redirect('Admin/edittutor/'.$id)
          ->with('errors', $validator->errors())
          ->withInput();
  }
    else {
   
      $user = Tutor::find($id);
      
        $user->id     = $request->id;
        
        $user->name        = $request->name;
        $user->subject         = $request->subject;
        $user->activestatus         = $request->activestatus;

        $user->save();

      
      return redirect()->action('AdminController@tutorres');
  }
    }




     function deletetutor($id){


         $user = Tutor::find($id);
       

      return view('admin.deletetutor')->with('user', $user);

      
    }




     function removetutor($id, Request $request){
        
      
        if(Tutor::destroy($id)){
            return redirect()->action('AdminController@tutorres');
        }else{
            return redirect()->route('admin.deletetutor', $id);
        }
    }
  }
      