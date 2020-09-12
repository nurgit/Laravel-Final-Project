<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequests;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
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

     function removeuser($id, Request $request){
        
        //$users = $this->getStudentList();
        //find student by id & delete
        //updated list

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
