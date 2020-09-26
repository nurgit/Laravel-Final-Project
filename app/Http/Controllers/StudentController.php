<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Contact;
use App\Tutor;
use App\Blog;
use App\payment;
use Session;
use DB;
use PDF;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserRequests;


class StudentController extends Controller
{
  function index(){

    return view('student.index');
  }


//payment
public function payment($id){
  $user = Tutor::find($id);
  return view('student.payment')->with('user',$user);
}

  function postpayment(Request $request){
    
    $user=new payment();
   $user->student_id     = $request->student_id ;
    $user->student_name     = $request->student_name;
    $user->tutor_id        = $request->tutor_id;
    $user->tutor_name        = $request->tutor_name;
    $user->amount        = $request->amount;
    $user->date       = $request->date;
 $user->save();

  return redirect('student');


  }
  //view profile------

  function profile(){
    $user = new User();
   $data = $user->where('username',session::get('username'))
                        //->where('password','student')
                        ->get();

    return view('student.profile')->with('user',$data);
  }
  //----------------pdf for profile data----------------------
  function profilePdf()
   {
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($this->readProfile());
    return $pdf->stream();

   }

   function readProfile()
   {
    $user = new User();
    $data = $user->where('username',session::get('username'))
                       ->get();

      $output='<h2>User Data</h2>';

      for($i=0; $i != count($data); $i++){
      $output .= '
      <div class="row">
        <div class="leftcolumn">
          <div class="card">
            <h2 class="title">'.$data[$i]->id.'	</h2>
            <p>	<br>'.$data[$i]->username.'</p>
            <p>	<br>'.$data[$i]->password.'</p>
            <p>	<br>'.$data[$i]->email.'</p>
            <p>	<br>'.$data[$i]->type.'</p>
     
          </div>
          

        </div>
        </div>

       ';
         }
       $output .= '</table>';
       return $output;


  }
  //view tutors----------
  function view_tutor(Request $request){

    $user = new Tutor();
    $data =$user->where('activestatus','active')
                ->orderBy('id','ASC')
                
                ->get();
                     //->join('accounts', 'user_table.userId', '=', 'accounts.accId')
                     

    // return view('home.index')->with('users', $users);

   return view('student.viewtutor')->with('user', $data);
 }

  //contact us---------
  function contact(){
    $user = new User();
   $data = $user->where('username',session::get('username'))
                        //->where('password','student')
                         ->get();

    return view('student.contact')->with('user',$data);
  }
  function message( Request $request){
    

      $user = new Contact();
      
        $user->email        = $request->email;
        $user->message         = $request->message;
        $user->save();
  
      return redirect('student');
  
    }

  //UPDATE PROFILE------------

 public function updateView($id){

  $user = new User();
  $data = $user->where('id', $id)
  ->get();
   return view('student.update')->with('user', $data);
 }

 public function update( Request $request, $id){
  // $user = new User();
  // $data = $user->where('id', $id)
  // ->get();
 // return view('student.update')->with('user', $data);
  
  
    $validator = Validator::make($request->all(), [
      'username' => 'required',
      'password' => ['required', 
                 'min:4'
              
      ],
           'email'    => 'required|email',
          
    ]);
  
    if ($validator->fails()) {
      
      return redirect('/student/update/'.$id)
            ->with('errors', $validator->errors())
            ->withInput();
    }
    $user = User::find($id);
    
      $user->username     = $request->username;
      $user->password     = $request->password;
      $user->email        = $request->email;
   
      $user->save();

    return redirect('student');

  }
  //  for Read  Blog ------------------------------------
// public function readBlog(){
//   $user = new Blog();
//   $data= $user->get();

// //  print_r($blog);
//   return view('student.readBlog')->with('user', $data);
// }
//----------------------for pdf -----------------
// 
  //write_blog.............
  public function writeBlog(){

    // $user = new BLog();
    // $data = $user->where('author',session::get('username'))
    //               ->get();
     return view('student.writeBlog');
   }
   public function postBlog( Request $request){
 
    $user= new Blog();
    
      $validator = Validator::make($request->all(), [
        'articlename' => 'required',
        'article' => 'required' 
        
      ]);
    
      if ($validator->fails()) {
        
        return redirect('/student/writeBlog/')
              ->with('errors', $validator->errors())
              ->withInput();
      }
      // $user = User::find($id);
      
        $user->author     = $request->author;
        $user->article_name     = $request->articlename;
        $user->article        = $request->article;
     
        $user->save();
  
      return redirect('student/readBlog/');
  
    }

    //node_api_call
    public function tutorials()
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://localhost:3000/tutorials');
        $response = $request->getBody()->getContents();
        //echo '<pre>';
        print_r($response);
        exit;
    }
    //===========================================================READ__BLOG==========================================================
    function readBlog()
    {
     return view('student/readBlog');
    }

    public function load_data(Request $request)
    {
     if($request->ajax())
     {
      if($request->id > 0)
      {
       $data = DB::table('blog')
          ->where('id', '<', $request->id)
          ->orderBy('id', 'DESC')
          ->limit(2)
          ->get();
      }
      else
      {
       $data = DB::table('blog')
          ->orderBy('id', 'DESC')
          ->limit(2)
          ->get();
      }
      $output = '';
      $last_id = '';
      
      if(!$data->isEmpty())
      {
       foreach($data as $row)
       {
        $output .= '
        <div class="row">
         <div class="col-md-12">
          <h3 class="text-info"><b>'.$row->article_name.'</b></h3>
          <p>'.$row->article.'</p>
          <br />
          
          <div class="col-md-6" align="right">
           <p><b><i>By - '.$row->author.'</i></b></p>
          </div>
          <br />
          <hr />
         </div>         
        </div>
        ';
        $last_id = $row->id;
       }
       $output .= '
       <div id="load_more">
        <button type="button" name="load_more_button" class="btn btn-success form-control" data-id="'.$last_id.'" id="load_more_button">Load More</button>
       </div>
       ';
      }
      else
      {
       $output .= '
       <div id="load_more">
        <button type="button" name="load_more_button" class="btn btn-info form-control">No Data Found</button>
       </div>
       ';
      }
      echo $output;
     }
     
     
    }
    //======================BLOG_PDF_DOWNLOAD==================================================================
function pdf()
   {
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($this->readBlog1());
    return $pdf->stream();

   }

   function readBlog1()
   {
     $blog= DB::table('blog')
     ->orderBy('id', 'DESC')
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
  //====================================search++++++++++++++++
  function search()
  {
   return view('/student/live_search');
  }

  function action(Request $request)
  {
   if($request->ajax())
   {
    $output = '';
    $query = $request->get('query');
    if($query != null)
    {
     $data = DB::table('tutor')
       ->where('name', 'like', '%'.$query.'%')
       ->orWhere('subject', 'like', '%'.$query.'%')
       
       ->orderBy('id', 'desc')
       ->get();
       
    }
    else
    {
     $data = DB::table('tutor')
       ->orderBy('CustomerID', 'desc')
       ->get();
    }
    $total_row = $data->count();
    if($total_row > 0)
    {
     foreach($data as $row)
     {
      $output .= '
      <tr>
       <td>'.$row->name.'</td>
       <td>'.$row->subject.'</td>
       <td>'.$row->salary.'</td>
      
      </tr>
      ';
     }
    }
    else
    {
     $output = '
     <tr>
      <td align="center" colspan="5">No Data Found</td>
     </tr>
     ';
    }
    $data = array(
     'table_data'  => $output,
     'total_data'  => $total_row
    );

    echo json_encode($data);
   }
  }
  //=================Upload files=================
  public function upload(){
    return view ('/student/upload');
  }
  public function uploadFile(Request $request)
  {
    $request->file->store('public');
    return redirect('student/upload/')->with('FILE HAS BEEN UPLOADED SUCESSFULLy'); 
    
  }
}




