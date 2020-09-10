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

      return view('viewuser.index');
    }

      function createuser(){

      return view('createuser.index');
    }

    function storeuser(Request $request){




    }
    
  
          function tutor(){

      return view('tutor.index');
    }


          function student(){

      return view('student.index');
    }

      function payment(){

      return view('payment.index');
    }

}
