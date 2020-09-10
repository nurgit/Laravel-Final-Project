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

      return view('admin.index');
    }

      function createuser(){

      return view('admin.index');
    }

    function storeuser(Request $request){




    }
    
  
          function tutor(){

      return view('admin.index');
    }


          function student(){

      return view('admin.index');
    }

      function payment(){

      return view('admin.index');
    }

}
