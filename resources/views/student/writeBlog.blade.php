<html>
    <head></head>
<body>
@if (Session::has('username'))
                        
                         
<h1>Write Your Content Here</h1>
                        

<form method="post" >
  


Name: <input type="text" value=" {{{ Session::get('username') }}}" readonly name="author">

  <br>
<br>
<h2>Article Name:</h2> <textarea rows="2" cols="150" name="articlename" ></textarea><br>
{!! $errors->first('articlename', '<div class="error-block" style ="color:red;">:message</div>') !!}<br>
<h2>Enter text here:</h2>
<textarea rows="30" cols="170" name="article"  >
</textarea>
{!! $errors->first('article', '<div class="error-block" style ="color:red;">:message</div>') !!}<br>

@endif
<p></p>
<input type="submit" name="blog" value="submit">
</form>
</body>
</html>