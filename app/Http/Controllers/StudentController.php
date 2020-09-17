<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\contact;
use Session;
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

 function update( Request $request, $id){
  // $user = new User();
  // $user = $user->where('id', $username)
  //  ->get();
  print_r($id);

    // $user = User::where($username);
    $user = User::find($id);
    
      $user->username     = $request->username;
      $user->password     = $request->password;
      $user->email        = $request->email;
      $user->type         = $request->type;
      $user->save();

    return redirect('student');

  }
}
