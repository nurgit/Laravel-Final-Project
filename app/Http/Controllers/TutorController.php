<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequests;
// use Illuminate\Support\Facades\DB;

class TutorController extends Controller
{


  function index(){

    return view('tutor.index');
  }



//FOR TUTOR PROFILE---------------------------------------------------
  function profile($id){

    $user = new User();
    $data = $user->where('id', $id)
    ->get();
    //$user=user::find($username);
  // print_r($data);

  return view('tutor.profile')->with('user', $data);
  }


  //FOR TUTOR UPDATE---------------------------------------------------
 public function updateView($id){

   $user = new User();
   $data = $user->where('id', $id)
   ->get();
    return view('tutor.update')->with('user', $data);
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

    	return redirect('tutor');

    }



//FOR TUTOR CONTACT---------------------------------------------------
  function contact(){
    return view('tutor.contact');
  }



}
