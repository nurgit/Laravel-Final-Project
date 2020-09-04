<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <title></title>


    <style media="screen">
      body{
    background-color: #25274d;
  }
  .contact{
    padding: 4%;
    height: 400px;
  }
  .col-md-3{
    background: #ff9b00;
    padding: 4%;
    border-top-left-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
  }
  .contact-info{
    margin-top:10%;
  }
  .contact-info img{
    margin-bottom: 15%;
  }
  .contact-info h2{
    margin-bottom: 10%;
  }
  .col-md-9{
    background: #fff;
    padding: 3%;
    border-top-right-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
  }
  .contact-form label{
    font-weight:600;
  }
  .contact-form button{
    background: #25274d;
    color: #fff;
    font-weight: 600;
    width: 25%;
  }
  .contact-form button:focus{
    box-shadow:none;
  }
    </style>
  </head>
  <body>

<form class="" method="post" method="post">

  <div class="container contact">
<div class="row">
  <div class="col-md-3">
    <a href="/tutor">Back</a>|
    <a href="/logout">Logout</a>
    <div class="contact-info">
      <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
      <h2>Contact Us</h2>
      <h4>We would love to hear from you !</h4>
    </div>
  </div>
  <div class="col-md-9">
    <div class="contact-form">
      <div class="form-group">
        <label class="control-label col-sm-2" for="fname">ID:</label>
        <div class="col-sm-10">

        <input type="text" name="id" class="form-control" id="fname" value="<%= user.id%>"  readonly >
        </div>
      </div>
      <!-- <div class="form-group">
        <label class="control-label col-sm-2" for="lname">User Name:</label>
        <div class="col-sm-10">
        <input type="text" name="username" class="form-control" id="lname" value="<%= user.username%>" readonly >
        </div>
      </div> -->
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
        <input type="email" name="email" class="form-control" id="email" value="<%= user.email %>" readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="comment">Comment:</label>
        <div class="col-sm-10">
            <!-- <input type="email" name="contact" class="form-control" id="email" placeholder="Enter comment" > -->

        <textarea class="form-control" name="contact" rows="5" id="comment"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" value="Update" class="btn btn-default">Submit</button>
        <!-- <input type="submit" name="submit" value="Sign up" > -->
        </div>
      </div>
    </div>
  </div>
</div>

</form>


  </body>
</html>
