<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <a href="/logout">Logout</a>

      <h1>Welcome


      @if (Session::has('username'))
      {{{ Session::get('username') }}}
      @endif

      </h1>



  </body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@469&family=Roboto&family=Roboto+Condensed&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@469&display=swap" rel="stylesheet">

    <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel ="stylesheet" href ="abc/css/style1.css">
    <link rel="stylesheet" href="abc/css/jquery.bxslider.css">
</head>
<body>
	 <div style="height: 500px;"></div>
     <div class="full-nav">
        <div class="logo"><a href=""><img
         src="abc/img/logo.png" alt=""></a></div>
         <h1>Welcome


         @if (Session::has('username'))
         {{{ Session::get('username') }}}
         @endif

         </h1>
         <nav class="nav2">
             <ul>
<!-- // Tutor home page -->
               <li><a href="/tutor/profile/<%= username %>"><span>01.</span>My profile </a></li>
               <li><a href="/tutor/update/<%= username %>"><span>02.</span>Update profile </a></li>
               <li><a href="/tutor/view_students"><span>03.</span>My students</a></li>

               <li><a href="/tutor/create/<%= username %>"><span>04.</span>Join as a paid tutor</a></li>
               <li><a href="/tutor/contact/<%= username %>"><span>05.</span>Contact us</a></li>
               <li><a href=""><span>06.</span>Online class  </a></li>
               <li><a href="/tutor/writeblog"><span>07.</span>Write Blog</a></li>
               <li><a href="/tutor/readblog"><span>08.</span>Read Blog</a></li>
               <li><a href="/logout"><span>09.</span>Logout</a></li>
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
   <script src="abc/js/main.js"></script>

</body>

</html>
