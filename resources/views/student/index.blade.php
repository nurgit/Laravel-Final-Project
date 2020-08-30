<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <a href="/logout">Logout</a>

    <!-- @if(isset(Auth::User()->username))
    <h1>Hellow: {{Auth::User()->username}} </h1>
@endif -->


  <h1>HELLOW:


    @if (Session::has('username'))
    {{{ Session::get('username') }}}
    @endif
  </h1>



  
  </body>
</html>
