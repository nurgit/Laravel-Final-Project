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
  function profile(){

    $user = new User();
    //data = $user->all();
  //  print_r($data);
    // $data = $user->where('username',$request->session()->get('username'))
    //                 ->get();
    return view('tutor.profile');
  }


//FOR TUTOR CONTACT---------------------------------------------------
  function contact(){
    return view('tutor.contact');
  }



}
