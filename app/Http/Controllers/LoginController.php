<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    function index(){

    	return view('login.index');
    }


    function verify(Request $request){



           // $request->session()->put('username', $request->username);
           //  $request->session()->put('password', $request->password);
           //  $request->session()->get('username');
           // $request->session()->foget('username');
           //  $request->session()->flush();
           //
            // $request->session()->flash('msg', 'invalid user');
            // $request->session()->flash('error', 'db error');
            // $request->session()->get('msg');
            // $request->session()->keep('msg');
           //  $request->session()->reflash();
           //  $request->session()->has('username');
           //  $request->session()->pull('username');

           $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
                       
                    
            
                 
          ]);
        
          if ($validator->fails()) {
            return redirect('/login')
                  ->with('errors', $validator->errors())
                  ->withInput();
          }

       else
       {
        $user = new User();
        //data = $user->all();
      //  print_r($data);

        $data = $user->where('username', $request->username)
                        ->where('password', $request->password)
                        ->get();

        // echo $data[0]->id;

    	if(count($data) > 0 )
      {


            if($data[0]['type']=='admin'){
              //$request->session()->put('type', "admin");
              $request->session()->put('username', $request->username);
                return redirect('/admin');
            }
            elseif($data[0]['type']=='tutor'){
                //  $request->session()->put('type', "tutor");
                $request->session()->put('username', $request->username);
                $request->session()->put('id',$data[0]->id);
                   return redirect('/tutor');
                  // echo $data[0]->id;
             }
             elseif($data[0]['type']=='student'){
                
                 $request->session()->put('username', $request->username);
                

                  return redirect('/student');



              }



    	}

      // elseif(count($data) > 0 )
      // {
      //       $request->session()->put('username', $request->username);
      //       if($request->username == $data[0]['type']){
      //           $request->session()->put('type', "student");
      //       }
    	// 	return redirect('/student');
      // }
      //
      // elseif(count($data) > 0 ){
      //       $request->session()->put('username', $request->username);
      //       if($request->username == $data[0]['type']){
      //           $request->session()->put('type', "tutor");
      //       }
    	// 	return redirect('/tutor');
      // }

      else
      {
            $request->session()->flash('msg', 'invalid username/password');
            return redirect('/login');
        }
    }
       }
}
