<!DOCTYPE html>
<html>

<head>
    <title>
        Member List
    </title>
   <script type="text/javascript" src="{{ URL::asset('js/jquery-3.4.1.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/user.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/dotnet.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/c.css') }}">



</head>

<body>
    <ul class="topnav">
         <li><a  href="/dotnet">Flat Owners</a></li>
        <li><a href="/admin">Home</a></li>
        <li><a href="/dotnetmember">Member</a></li>
    </ul>

    <button id="load">Load Data</button>
    <br/>
    <br/>
    <button id="Create">Create</button>
    <br>
    <div id="action"><input type="text" id="memberid" /><button id="Edit">Edit</button><button id="delete">Delete</button></div>
    <br>
    <label id="msg"></label>
    <div id="CreateDiv" class="CreateDiv">

        <label for="MemberFullName">Full Name:</label>
        <input type="text" name="MemberFullName" id="memberFullName" required>
        <br>
        <label for="MemberFlatNno">Flat No:</label>
        <input type="text" name="MemberFlatNno" id="memberFlatNno" required>
        <br>
        <label for="MemberRelation">Relation:</label>
        <input type="text" name="MemberRelation" id="memberRelation" required>
        <br>
        <label for="UserId">User Id:</label>
        <input type="text" name="UserId" id="userId" required>
        <br>
        <label for="Status">Status:</label>
        <input type="text" name="Status" id="status" required>
        <br>
        <button id="save">Save</button>
        <br>
        <button id="update">update</button>
        <br>
    </div>
    <br/><br/>
    <div class="container">
        <div class="row">
            <table class="table table-striped table-bordered" id="list">
                <thead>
                    <tr bgcolor="#10a0c5" color="#FFFFFF">

                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Flat No</th>
                        <th>Relation</th>
                        <th>Photo</th>
                        <th>User ID</th>
                        <th>Active Status</th>
                        <th>Action



                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

</body>

</html>