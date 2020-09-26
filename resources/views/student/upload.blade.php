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
  <body style="background-color:#25274d;">

    <div  class="container" style="margin-top: 70px;">
             <div class="jumbotron">
               <a href="/student">Back</a>|
               <a href="/logout">Logout</a>
               
               <div class="row">
                   <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                   <img src="{{URL::asset('img/unnamed.png')}}" class="img">
                   </div>
                   <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                       <div class="container" style="border-bottom:1px solid black">
                         <h2>
                    <form method="POST" action="{{route('uploadfile')}}" enctype="multipart/form-data">
                       @csrf
                       <label for="file">Upload Files Here</label><br><br>
                       
                         <input type="file" name="file"/><br>
                         <button type="submit" name="submit">Upload</button>
                         </form>
                       </h2>
                       </div>
                       </br>

                      

                   </div>
               </div>
             </div>

  </body>
</html>
