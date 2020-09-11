<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    function index(){

      return view('admin.index');
    }
     function view_users(){

      return view('admin.viewuser');
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
