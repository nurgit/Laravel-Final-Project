<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\User;
use App\Student;
use App\Tutor;
use App\Payment;
Use App\Packages;
use App\Http\Requests\UserRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //


    function dotnet(){

    	return view('admin.dotnet');
    }
      function node(){

    	return view('admin.node');
    }

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

        function updateduser( Request $request, $id){



        	$validator = Validator::make($request->all(), [
		      'username' => 'required',
		       'password' => ['required', 
               'min:4'
            //    'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/', 
			//    'confirmed'
		],
			   'email'    => 'required|email',
			   'type'     =>'required'
	]);

	if ($validator->fails()) {
		 
		return redirect('Admin/edituser/'.$id)
					->with('errors', $validator->errors())
					->withInput();
	}
    else {
   
      $user = User::find($id);
      
        $user->username     = $request->username;
        $user->password     = $request->password;
        $user->email        = $request->email;
        $user->type         = $request->type;
        $user->save();

      
      return redirect()->action('AdminController@view_users');
  }
    }

     function removeuser($id, Request $request){
        
      
        if(User::destroy($id)){
            return redirect()->action('AdminController@view_users');
        }else{
            return redirect()->route('admin.deleteuser', $id);
        }
    }




      function adminureg(){

      return view('Admin.createuser');
    }

    function storeuser(Request $request){


    	$validator = Validator::make($request->all(), [
		'username' => 'required',
		'password' => ['required', 
               'min:4'
            //    'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/', 
			//    'confirmed'
		],
			   'email'    => 'required|email',
			   'type'     =>'required'
	]);

	if ($validator->fails()) {
		return redirect('/adminureg')
					->with('errors', $validator->errors())
					->withInput();
	}
    else {
		
  $user = new User();
        $user->username     = $request->username;
      
		$user->password     = $request->password;
		$user->email        =$request->email;
        $user->type         = $request->type;
       
        $user->save();

       
    	
    		 return redirect()->action('AdminController@view_users');
    	

}


    }
    
  
          function admintutor(){

      return view('admin.tutor');
    }


          function adminstudent(){

      return view('admin.student');
    }

    
public function getRequest()
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://localhost:3000/userlist');
        $response = $request->getBody()->getContents();
        echo '<pre>';
        print_r($response);
        exit;
    }

//****************************************************************    Student Dashboard ***************************

  function view_student(Request $request){

       $users = DB::table('student')
                        //->join('accounts', 'user_table.userId', '=', 'accounts.accId')
                        ->get();

       // return view('home.index')->with('users', $users);

      return view('admin.viewstudent')->with('users', $users);

    }

    function createstudent()
    {

      return view ('admin.createstudent');
    }


     function editstudent($student_id){

         $user = Student::find($student_id);
       

      return view('admin.editstudent')->with('user', $user);
    }


    function updatestudent( Request $request, $student_id){



          $validator = Validator::make($request->all(), [
          'name' => 'required',
         'class'    => 'required',
         'package_id'     =>'required'
  ]);

  if ($validator->fails()) {
     
    return redirect('Admin/editstudent/'.$student_id)
          ->with('errors', $validator->errors())
          ->withInput();
  }
    else {
   
      $user = Student::find($student_id);
      
        $user->student_id     = $request->student_id;
        $user->login_id     = $request->login_id;
        $user->name        = $request->name;
        $user->class         = $request->class;
        $user->package_id         = $request->package_id;

        $user->save();

      
      return redirect()->action('AdminController@view_student');
  }
    }


     function deletestudent($student_id){


         $user = Student::find($student_id);
       

      return view('admin.deletestudent')->with('user', $user);

      
    }




     function removestudent($student_id, Request $request){
        
      
        if(Student::destroy($student_id)){
            return redirect()->action('AdminController@view_student');
        }else{
            return redirect()->route('admin.deletestudent', $student_id);
        }
    }
///////*******************************tutor section *****************************************

    function tutorres(Request $request)
    {
      $users=DB::table('tutor')
        ->where('activestatus', '=', 'pending')
                        //->join('accounts', 'user_table.userId', '=', 'accounts.accId')
                        ->get();
      return view('admin.tutorrequest')->with('users',$users);
    }


     function edittutor($id){

         $user = Tutor::find($id);
       

      return view('admin.edittutor')->with('user', $user);
    }


    function updatetutor( Request $request, $id){



          $validator = Validator::make($request->all(), [
          'name' => 'required',
         'subject'    => 'required',
         'activestatus'     =>'required'
  ]);

  if ($validator->fails()) {
     
    return redirect('Admin/edittutor/'.$id)
          ->with('errors', $validator->errors())
          ->withInput();
  }
    else {
   
      $user = Tutor::find($id);
      
        $user->id     = $request->id;
        
        $user->name        = $request->name;
        $user->subject         = $request->subject;
        $user->activestatus         = $request->activestatus;

        $user->save();

      
      return redirect()->action('AdminController@tutorres');
  }
    }




     function deletetutor($id){


         $user = Tutor::find($id);
       

      return view('admin.deletetutor')->with('user', $user);

      
    }




     function removetutor($id, Request $request){
        
      
        if(Tutor::destroy($id)){
            return redirect()->action('AdminController@tutorres');
        }else{
            return redirect()->route('admin.deletetutor', $id);
        }
    }



   // ***************payment **************************

    function payment()
    {

      return view('admin.payment');
    }

   
function addpayment(){

      return view('admin.addpayment');
    }

    function storepayment(Request $request)

    {


      $validator = Validator::make($request->all(), [
    
    'payerssid' =>'required',
    'reciverttid'    => 'required',
         'amount'     =>'required'
  ]);

  if ($validator->fails()) {
    return redirect('/addpayment')
          ->with('errors', $validator->errors())
          ->withInput();
  }
    else {
    
  $user = new Payment();
        
      
    $user->payerssid     = $request->payerssid;
    $user->reciverttid        =$request->reciverttid;
        $user->amount         = $request->amount;
       
        $user->save();

        return redirect()->action('AdminController@payment');
      
         }
   }


    function view_tutorpayment(Request $request){

       $users = DB::table('tutor')
                        ->join('payment', 'tutor.id', '=', 'payment.reciverttid')
                        ->get();



      return view('admin.viewtutorpayment')->with('users', $users);
    }

    function tutorpdf()
   {
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($this->readBlog1());
    return $pdf->stream();

   }
     function STUDENTpdf()
   {
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($this->readBlog2());
    return $pdf->stream();

   }
    function readBlog1()
   {

     
      

     $blog = DB::table('tutor')
                        
                        ->join('payment', 'tutor.id', '=', 'payment.reciverttid')
                        ->get();

      $output=' <h3 align="center">Tutor Payment Information</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="10%">Tutor ID</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Name</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Subject</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Status</th>
    <th style="border: 1px solid; padding:12px;" width="10%">Payer ID</th>
    <th style="border: 1px solid; padding:12px;" width="10%">Amount</th>
   </tr>';
  foreach($blog as $blog)
     {
      $output .= '


      <tr>
       <td style="border: 1px solid; padding:12px;">'.$blog->reciverttid.'</td>
       <td style="border: 1px solid; padding:12px;">'. $blog->name.'</td>
       <td style="border: 1px solid; padding:12px;">'. $blog->subject.'</td>
       <td style="border: 1px solid; padding:12px;">'. $blog->activestatus.'</td>
       <td style="border: 1px solid; padding:12px;">'. $blog->payerssid.'</td>
       <td style="border: 1px solid; padding:12px;">'. $blog->amount.'</td>
      </tr>
      
      
           
        
          

        

       ';
         }
       $output .= '</table>';
       return $output;



  }
function readBlog2()
   {

     
      

     $blog  = DB::table('student')
                        ->join('packages', 'student.package_id', '=', 'packages.id')
                        ->get();

      $output=' <h3 align="center">Student Payment Information</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="10%">STUDENT ID</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Name</th>
    <th style="border: 1px solid; padding:12px;" width="20%">class</th>
    <th style="border: 1px solid; padding:12px;" width="20%">TYPE</th>
      <th style="border: 1px solid; padding:12px;" width="10%">Amount</th>
   </tr>';
  foreach($blog as $blog)
     {
      $output .= '
     
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$blog->login_id.'</td>
       <td style="border: 1px solid; padding:12px;">'. $blog->name.'</td>
       <td style="border: 1px solid; padding:12px;">'. $blog->class.'</td>
       <td style="border: 1px solid; padding:12px;">'. $blog->type.'</td>
       <td style="border: 1px solid; padding:12px;">'. $blog->ammount.'</td>
       
      </tr>
      
      
           
        
          

        

       ';
         }
       $output .= '</table>';
       return $output;



  }

     function view_studentpayment(Request $request){

       $users = DB::table('student')
                        ->join('packages', 'student.package_id', '=', 'packages.id')
                        ->get();

       // return view('home.index')->with('users', $users);

      return view('admin.viewstudentpayment')->with('users', $users);
    }

      function monthlyincome(Request $request){

       $users = DB::table('student')
                        ->join('packages', 'student.package_id', '=', 'packages.id')
                        ->get();


       // return view('home.index')->with('users', $users);

      return view('admin.monthlyincome')->with('users', $users);
    }

    
  

  }
      