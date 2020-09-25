<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@469&family=Roboto&family=Roboto+Condensed&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@469&display=swap" rel="stylesheet">

    <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel ="stylesheet" href ="{{ URL::asset('css/adminstudent.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.bxslider.css') }}">
</head>
<body>




    <div style="height: 500px;"></div>
     <div class="full-nav">
         <div class="logo"><a href=""><img
         src=" {{ URL::asset('img/logo.png') }}" alt=""></a></div>
		 <h1>Welcome Home! @if (Session::has('username'))
      {{{ Session::get('username') }}}
      @endif </h1>
         <nav class="nav2">
             <ul>


                 <li><a href="/viewuser"><span></span>All User</a></li>
                 <li><a href="/adminureg"><span></span>Create User</a></li>
                 <li><a href="Admin/admintutor"><span></span>tutor Section</a></li>
                 <li><a href="Admin/adminstudent"><span></span>Student Section</a></li>
                 <li><a href="Admin/payment"><span></span>Payment information</a></li>
                  <li><a href="/dotnet"><span></span>API Call DOT NET</a></li>
                   <li><a href="/guzz"><span></span>API Call Node Js</a></li>  
                 <li><a href="/logout"><span></span>Logout</a></li>
             </ul>


         </nav>

         <ul class="social-icons list-inline">
             <li><a href=""><i class="fa fa-facebook"></i></a></li>
             <li><a href=""><i class="fa fa-twitter"></i></a></li>
             <li><a href=""><i class="fa fa-google-plus"></i></a></li>
             <li><a href=""><i class="fa fa-instagram"></i></a></li>
         </ul>

         <div class="corner-circle">
             <a href="javascript:void(0);" class="nav-close"><span></span><span></span></a>
         </div>

     </div>







   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.js"></script>
   <script src=" {{ URL::asset('js/main.js') }}"></script>

</body>

</html>
