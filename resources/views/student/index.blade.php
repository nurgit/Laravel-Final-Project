<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@469&family=Roboto&family=Roboto+Condensed&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@469&display=swap" rel="stylesheet">

    <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel ="stylesheet" href ="assets/css/style1.css">
    <link rel="stylesheet" href="assets/css/jquery.bxslider.css">
</head>
<body>
	 <div style="height: 500px;"></div>
     <div class="full-nav">
        <div class="logo"><a href=""><img
         src="assets/img/logo.png" alt=""></a></div>
         @if (Session::has('username'))
		 <h1>Welcome {{{ Session::get('username') }}}</h1>
     @endif
         <nav class="nav2">
             <ul>

                 <li><a href="/"><span>01.</span>Home</a></li>
                 <li><a href="/student/profile"><span>02.</span>View Profile</a></li>
                 <li><a href="/student/update/{{{ Session::get('id') }}}"><span>03.</span>Update Profile</a></li>
                 <li><a href="/student/tutor"><span>04.</span>Tutors</a></li>
                 <li><a href="student/live_search"><span>05.</span>Buy Subscription</a></li>
                 <li><a href="/student/tutorials"><span>06.</span>Tutorials</a></li>
                 <li><a href="/student/writeBlog"><span>07.</span>Write Blog</a></li>
                 <li><a href="/student/readBlog"><span>08.</span>Read Blog</a></li>
                 <li><a href="/student/contact"><span>09.</span>Contact Us</a></li>
                 <li><a href="/student/upload"><span>10.</span>Upload Files</a></li>
                 <li><a href="/logout"><span>11.</span>Logout</a></li>
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
   <script src="{{ URL::asset('js/main.js') }}"></script>

</body>

</html>
