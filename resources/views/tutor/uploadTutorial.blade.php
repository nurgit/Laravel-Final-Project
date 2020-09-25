<html>
    <head>


      <style >
      .body {
        background-color:#25274d;
        /* border: 1px solid red; */
        padding:5%;
        }
        .body1{

          /* background-color: #25274D; */
          /* margin-left: 100px;
          margin-right: 100px;
          paging:20px; */
          padding-left: 200px;
          background-color: white;
          padding-bottom: 50px;


        }
        .lb{
          padding-top: 40px;
          margin-left: -40px;
        }
        .h1{
          text-align: center;
          padding: 20px;
        }

      </style>
    </head>
<body>
<div class="body">

  <div class="body1">
  <div class="lb">
    <a href="/tutor">Back</a>|
    <a href="/logout">Logout</a>

  </div>

    @if (Session::has('username'))


    <h1 class="h1">Upload Your video Tutorial</h1>


    <form method="post" >



    <h2>Name:</h2> <input class="name" type="text" value=" {{{ Session::get('username') }}}" readonly name="author">

      <br>
    <br>
    <h2>Article Name:</h2> <textarea rows="2" cols="150" name="articlename" ></textarea><br>
    {!! $errors->first('articlename', '<div class="error-block" style ="color:red;">:message</div>') !!}<br>
    <h2>Enter video Tutori Link :</h2>
    <textarea rows="2" cols="150" name="article"  >
    </textarea>
    {!! $errors->first('article', '<div class="error-block" style ="color:red;">:message</div>') !!}<br>

    @endif
    <p></p>
    <input type="submit" name="blog" value="submit">
    </form>

  </div>

</div>
</body>
</html>
