<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class TutorController extends Controller
{


  function index(){

    return view('tutor.index');
  }



//FOR TUTOR PROFILE---------------------------------------------------
  function profile($username){

    $user = new User();
    $data = $user->where('username', $username)
    ->get();
    //$user=user::find($username);
  // print_r($data);

  return view('tutor.profile')->with('user', $data);
  }


  //FOR TUTOR UPDATE---------------------------------------------------
 public function updateView($username){

   $user = new User();
   $data = $user->where('username', $username)
   ->get();
    return view('tutor.update')->with('user', $data);
  }


  function update($username, Request $request){
    $user = new User();
    $user = $user->where('username', $username)
     ->get();
     print_r($user);

      //$user = User::where($username);
        // $user->id           = $request->id;
        // $user->username     = $request->username;
        // $user->password     = $request->password;
        // $user->email        = $request->email;
        // $user->type         = $request->trye;
        // $user->save();

    	// return redirect('tutor.index');

    }



//FOR TUTOR CONTACT---------------------------------------------------
  function contact(){
    return view('tutor.contact');
  }



}
