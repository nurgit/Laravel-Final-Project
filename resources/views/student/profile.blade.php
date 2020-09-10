<!DOCTYPE html>
<html>
<head>
	<title>User List page</title>
	<link rel="stylesheet" type="text/css" href="assests/css/profile.css" />
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@469&family=Roboto&family=Roboto+Condensed&display=swap" rel="stylesheet">
	<style>
body { 
	background-color: #75a3a3;
}
table{
	background-color: #5c85d6;
	
}

</style>

</head>
<body >

	<a href="/student">Back</a>|
	<a href="/logout">Logout</a>


	<h3>User List</h3>
	<table border="0" >
		<tr>
			<th>ID</th>
			<th>USERNAME</th>
			<th>PASSWORD</th>
      <th>Email</th>
			<th>TYPE</th>

            @for($i=0; $i != count($user); $i++)
		<tr>
			<td>{{$user[$i]->id}}</td>
			<td>{{$user[$i]->username}}</td>
			<td>{{$user[$i]->password}}</td>
			<td>{{$user[$i]->email}}</td>
            <td>{{$user[$i]->type}}</td>
			
		</tr>
	@endfor
	</table>



</body>
</html>
