<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\contact;
use App\Http\Requests\UserRequests;
use Illuminate\Support\Facades\DB;
use PDF;

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


      $user = User::find($id);

        $user->username     = $request->username;
        $user->password     = $request->password;
        $user->email        = $request->email;
        $user->type         = $request->type;
        $user->save();

    	return redirect('tutor');

    }



//FOR TUTOR CONTACT---------------------------------------------------
  function contact($id){

    $user = new User();
    $data = $user->where('id', $id)
    ->get();
    return view('tutor.contact')->with('user', $data);
  }

   function contactInsert(Request $request, $id){

     $contact = new contact();

       $contact->uId          = $request->uId;
       $contact->usernasme    = $request->username;
       $contact->email        = $request->email;
       $contact->message      = $request->contact;
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

//Request for a Paid Tutor---------------------------------------------------


  public function requestPaidTutorView($id){

    $user = new User();
    $data = $user->where('id', $id)
    ->get();
     return view('tutor.requestPaidTutor')->with('user', $data);
   }

   public function requestPaidTutor(Request $request, $id){


     DB::table('tutor')->insert([
        'id' => $request->id,
         'name' => $request->username,
         'subject' => $request->subject,
         'activestatus' => $request->activestatus


    ]);


      return redirect('tutor');
    }



    //FOR Student---------------------------------------------------

    public function studentView(){
      $student= DB::table('student')
       ->get();
      //print_r($student);
      return view('tutor.student')->with('student', $student);
    }

//  for Read And write Blog ------------------------------------
public function readBlog(){
  $blog= DB::table('blog')
   ->get();

//  print_r($blog);
  return view('tutor.readBlog')->with('blog', $blog);
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
          echo ($);

        </div>
        </div>

       ';
         }
       $output .= '</table>';
       return $output;



  }



}
