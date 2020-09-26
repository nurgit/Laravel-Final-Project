<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\contact;
use App\blog;
use app\tutorials;
use app\payment;
use App\Http\Requests\UserRequests;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Support\Facades\Validator;

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
    // print_r($id);
    //########################################## for validatin
    $validator = Validator::make($request->all(), [
      'username' => 'required',
       'password' => ['required', 'min:4'],
       'email'    => 'required|email',
       'type'     =>'required'
     ]);

    if ($validator->fails()) {

    return redirect('tutor/update/'.$id)
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

    	return redirect('tutor');

    }
  }



//FOR TUTOR CONTACT---------------------------------------------------
  function contact($id){

    $user = new User();
    $data = $user->where('id', $id)
    ->get();
    return view('tutor.contact')->with('user', $data);
  }

   function contactInsert(Request $request, $id){
     $validator = Validator::make($request->all(), [
       'message' => 'required'
      ]);

     if ($validator->fails()) {
     return redirect('tutor/contact/'.$id)
         ->with('errors', $validator->errors())
         ->withInput();
     }
     else {

     $contact = new contact();

       $contact->uId          = $request->uId;
       $contact->usernasme    = $request->username;
       $contact->email        = $request->email;
       $contact->message      = $request->message;
       $contact->save();
       // print_r($contact);

      return redirect('tutor');
//
//     DB::table('contact')->insertGetId(
//     [
//       // 'id' => '',
//       'uId' = '$request->uId',
//       'usernasme' ='$request->usernasme',
//       'email'='$request->email',
//       'message'='$request->contact'
//   ]
// );
//     return view('tutor.contact')->with('user', $data);
   }
}
//Request for a Paid Tutor---------------------------------------------------


  public function requestPaidTutorView($id){


    $user = new User();
    $data = $user->where('id', $id)
    ->get();
     return view('tutor.requestPaidTutor')->with('user', $data);
   }

   public function requestPaidTutor(Request $request, $id){

     $validator = Validator::make($request->all(), [
       'subject' => 'required'
      ]);

     if ($validator->fails()) {
     return redirect('tutor/requestPaidTutor/'.$id)
         ->with('errors', $validator->errors())
         ->withInput();
     }
     else {



     DB::table('tutor')->insert([
        'id' => $request->id,
        'name' => $request->username,
        'subject' => $request->subject,
        'activestatus' => $request->activestatus
    ]);


      return redirect('tutor');
    }
  }


    //FOR Student---------------------------------------------------

    public function studentView(){
      $student= DB::table('student')
       ->get();
      //print_r($student);
      return view('tutor.student')->with('student', $student);
    }

//  for Read And write Blog ------------------------------------
public function writeBlogView(){

  return view('tutor.writeBlog');
}



public function writeBlog( Request $request){

 $user= new Blog();

   $validator = Validator::make($request->all(), [
     'articlename' => 'required',
     'article' => 'required'

   ]);

   if ($validator->fails()) {

     return redirect('tutor/writeBlog')
           ->with('errors', $validator->errors())
           ->withInput();
   }
   // $user = User::find($id);

     $user->author     = $request->author;
     $user->article_name     = $request->articlename;
     $user->article        = $request->article;

     $user->save();

   return redirect('tutor/readBlog/');

 }

public function readBlog(){
  $blog= DB::table('blog')
   ->get();

//  print_r($blog);
  return view('tutor.readBlog')->with('blog', $blog);
}
//-------------------Tutorial -----------------

public function uploadTutotialView(){

  return view('tutor.uploadTutorial');
}

public function uploadTutotial( Request $request){

 $user= new Blog();

   $validator = Validator::make($request->all(), [
     'articlename' => 'required',
     'article' => 'required'

   ]);

   if ($validator->fails()) {

     return redirect('tutor/uploadTutotial')
           ->with('errors', $validator->errors())
           ->withInput();
   }
   else {
     // code...

   // $user = User::find($id);
   //$tutorials= new tutorials;
   DB::table('tutorials')->insert([

    'publisher' => $request->author,
     'content'  => $request->articlename,
     'url'      => $request->article

     //$tutorials->save();
     ]);
   return redirect('tutor/viewTutotial/');
   }

 }
 //-------------------------blance-----
 public function balance($id){
   // $payment=new payment();
   // $data = $payment->where('tutor_id', $id)
   $data= DB::table('payments')->where('tutor_id', $id)
   ->get();
  // print_r($data);

    //
     return view('tutor.balance')->with('balance', $data);

 }




//=--------------API-------------allTutorial--
public function allTutorial(){
  $client = new \GuzzleHttp\Client();
  $request = $client->get('http://localhost:3000/tutorials');
  $response = $request->getBody()->getContents();
  echo '<pre>';
  print_r($response);
  exit;
}

public function packageList(){
  $client = new \GuzzleHttp\Client();
  $request = $client->get('http://localhost:3000/packages');
  $response = $request->getBody()->getContents();
  echo '<pre>';
  print_r($response);
  exit;
}
//----------------------for pdf -----------------
function pdf()
   {
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($this->readBlog1());
    return $pdf->stream();

   }


   function readBlog1()
   {
     $blog= DB::table('blog')
      ->get();

      $output='<h2>Read Blog</h2>';


      for($i=0; $i != count($blog); $i++){
      $output .= '
      <div class="row">
        <div class="leftcolumn">
          <div class="card">
            <h2 class="title">'.$blog[$i]->article_name.'	</h2>
            <p>	<br>'.$blog[$i]->article.'</p>
            <h4><br><b>Author:</b><i>'.	$blog[$i]->author.'</i></h5>
          </div>


        </div>
        </div>

       ';
         }
       $output .= '</table>';
       return $output;



  }

  function balancepdf()
     {
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($this->balance($id));
      return $pdf->stream();

     }
  function balancePdfView($id){
    $data= DB::table('payments')->where('tutor_id', $id)
    ->get();
    $output='<h2>My balance Report</h2>';


    $output .= '</table>';
    return $output;
  }



}
