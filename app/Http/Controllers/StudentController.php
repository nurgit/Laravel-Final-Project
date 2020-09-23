<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Contact;
use App\Tutor;
use App\Blog;
use Session;

use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserRequests;


class StudentController extends Controller
{
  function index(){

    return view('student.index');
  }



  //view profile------

  function profile(){
    $user = new User();
   $data = $user->where('username',session::get('username'))
                        //->where('password','student')
                        ->get();

    return view('student.profile')->with('user',$data);
  }
  //view tutors----------
  function view_tutor(Request $request){

    $user = new Tutor();
    $data =$user->where('activestatus','active')
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
public function readBlog(){
  $user = new Blog();
  $data= $user->get();

//  print_r($blog);
  return view('student.readBlog')->with('user', $data);
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
    $user = new Blog();
    $data= $user->get();

      $output='<h2>Read Blog</h2>';

      for($i=0; $i != count($user); $i++){
      $output .= '
      <div class="row">
        <div class="leftcolumn">
          <div class="card">
            <h2 class="title">'.$user[$i]->article_name.'	</h2>
            <p>	<br>'.$user[$i]->article.'</p>
            <h4><br><b>Author:</b><i>'.	$user[$i]->author.'</i></h5>
          </div>
          

        </div>
        </div>

       ';
         }
       $output .= '</table>';
       return $output;

  }
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
        echo '<pre>';
        print_r($response);
        exit;
    }

}
