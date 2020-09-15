<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="utf-8">
    <title></title>

    <style media="screen">
                .details li {
            list-style: none;
          }
          li {
              margin-bottom:10px;

          }
    </style>

  </head>
  <body style="background-color:#f1c30f;">
    <form method="post">

    <div  class="container" style="margin-top: 70px;">

             <div class="jumbotron">
               <a href="/admin">Back</a>|
               <a href="/logout">Logout</a>
               <div class="row">
                   <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                       <img src ="{{ URL::asset('img/unnamed.png') }}" alt="stack photo" class="img">
                   </div>
                   <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                       <div class="container" style="border-bottom:1px solid black">
                         <h2>


                  

                       </h2>
                       </div>
                       </br>

                       <ul class="container details">
                        
                          <li><p><span class="" style="width:50px;"></span><b> User ID: </b> {{$user->id}}</p></li>
                         <li><p><b>User Name :</b> <span class="" style="width:50px;"></span>{{$user->username}}</p></li>
                         <li><p><span class="" style="width:50px;"><b>Email  :</b></span>{{$user->email}}</p></li>
                         <li><p><span class="" style="width:50px;"><b>User Type:</b></span>{{$user->type}}</p></li>
                       
                       </ul>

                       <input type="submit" name="submit" value="Delete">

                   </div>
               </div>
             </div>
             

</form>
  </body>
</html>
