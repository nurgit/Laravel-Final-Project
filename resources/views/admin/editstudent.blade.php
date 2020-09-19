<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title></title>


    <style >
    .body {
      background-color:#f1c30f;
      /* border: 1px solid red; */
      padding:5%;
      }
      #from{
        background-color:white;
        padding:5%;
        margin-left: 10%;
        margin-right: 10%;
        /* margin-right: 10px; */
         border-radius: 2%;
      }
      .m-heading{
        text-align: center;
        padding-bottom: 20px;
      }
    </style>

</head>

<body class="body">

    <form class="needs-validation"  id="from" method="post">
    {{ csrf_field() }}
      <a href="/viewstudent">Back</a>|
      <a href="/logout">Logout</a><br>

        <h2 class="m-heading">Update Student Information From Admin Account
         
        </h2>


        <div class="form-row">

        
        <div class="form-group col-md-6">
          <label > Student ID</label>
          <input type="id" class="form-control" id="student_id" name="student_id"  value="{{$user->student_id}}" readonly="" >
        </div>
        <div class="form-group col-md-6">
          <label >Login ID</label>
          <input type="username" class="form-control" id="login_id" name="login_id"  value="{{$user->login_id}}" readonly="">
         
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label>Name</label>
          <input type="text" class="form-control" id="name" name="name"  value="{{$user->name}}">
          {!! $errors->first('name', '<div class="error-block" style ="color:red;">:message</div>') !!}
        </div>
          <div class="form-group col-md-4">
            <label>Class</label>
            <input type="text" class="form-control" id="class" name="class"  value="{{$user->class}}">
            {!! $errors->first('class', '<div class="error-block" style ="color:red;">:message</div>') !!}
          </div>
        <div class="form-group col-md-4">
          <label>Package ID</label>
            <input type="text" class="form-control" id="package_id" name="package_id"  value="{{$user->package_id}}" >
              {!! $errors->first('package_id', '<div class="error-block" style ="color:red;">:message</div>') !!}
        </div>
      </div>


      <!-- <button type="submit" name="submit"  class="btn btn-primary">UPDADE</button> -->
      <td><input type="submit" name="submit" value="update"></td>
   

    </form>

</body>

</html>
