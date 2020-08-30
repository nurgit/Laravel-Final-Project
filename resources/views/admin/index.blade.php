<!DOCTYPE html>
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
</html>
