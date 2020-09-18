<!DOCTYPE html>
<html>

<head>
    <title>
        Flat Owner Information
    </title>
   <script type="text/javascript" src="{{ URL::asset('js/jquery-3.4.1.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/node.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/dotnet.css') }}">

</head>

<body>
    <ul class="topnav">
        <li><a class="active" href="user.html">Flat Owners</a></li>
        <li><a href="/admin">Home</a></li>
        <li><a href="servant.html">Servant</a></li>
        <li><a href="guest.html">Guest Records</a></li>
        <li><a href="servicecharge.html">Service Charge</a></li>
        <li><a href="notice.html">Notice Board </a></li>
    </ul>
    <button id="load">Load Data</button>
    <br/>
    <label id="msg"></label>
    <div class="container">
        <div class="row">
            <br/><br/>
            <table id="list" class="table table-striped table-bordered">
                <thead>
                    <tr bgcolor="#10a0c5" color="#FFFFFF">
                        <th>ID</th>
                        <th>User Name</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Type</th>
                       


                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

</body>

</html>