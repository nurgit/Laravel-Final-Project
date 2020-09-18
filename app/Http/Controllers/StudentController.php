<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Contact;
use App\Tutor;
use Session;

use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserRequests;


class StudentController extends Controller
{
  function index(){

    return view('student.index');
  }



  //view profile------

  function profile(){
    $user = new User();
   $data = $user->where('username',session::get('username'))
                        //->where('password','student')
                        ->get();

    return view('student.profile')->with('user',$data);
  }
  //view tutors----------
  function view_tutor(Request $request){

    $user = new Tutor();
    $data =$user->where('activestatus','active')
                ->get();
                     //->join('accounts', 'user_table.userId', '=', 'accounts.accId')
                     

    // return view('home.index')->with('users', $users);

   return view('student.viewtutor')->with('user', $data);
 }

  //contact us---------
  function contact(){
    $user = new User();
   $data = $user->where('username',session::get('username'))
                        //->where('password','student')
                         ->get();

    return view('student.contact')->with('user',$data);
  }
  function message( Request $request){
    

      $user = new Contact();
      
        $user->email        = $request->email;
        $user->message         = $request->message;
        $user->save();
  
      return redirect('student');
  
    }

  //UPDATE PROFILE------------

 public function updateView($id){

  $user = new User();
  $data = $user->where('id', $id)
  ->get();
   return view('student.update')->with('user', $data);
 }

 public function update( Request $request, $id){
  // $user = new User();
  // $data = $user->where('id', $id)
  // ->get();
 // return view('student.update')->with('user', $data);
  
  
    $validator = Validator::make($request->all(), [
      'username' => 'required',
      'password' => ['required', 
                 'min:4'
              
      ],
           'email'    => 'required|email',
          
    ]);
  
    if ($validator->fails()) {
      
      return redirect('/student/update/'.$id)
            ->with('errors', $validator->errors())
            ->withInput();
    }
    $user = User::find($id);
    
      $user->username     = $request->username;
      $user->password     = $request->password;
      $user->email        = $request->email;
   
      $user->save();

    return redirect('student');

  }
}
