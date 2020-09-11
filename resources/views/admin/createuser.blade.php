<html>

	<head>
	<style>
		.custom-select{
			padding:9px 50px;
			background-color:#5E6975;
			color:white;
			font-size:18;


		}
		.signup {
    background: rgba(44,62,80,0.7);
    /* padding: 40px; */
    width: 280px;
    height: 550px;
    /* margin: auto;
    margin-top: 80px;
    margin-left: 50px; */
    margin: 0 auto;
}
	</style>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Admin's User Registration </title>
	<link rel="stylesheet"  href="assets/css/signup.css" type="text/css"  />
	


	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@469&family=Roboto&family=Roboto+Condensed&display=swap" rel="stylesheet">
	
	</head>


	<body>
		<h1 style="text-align:center; color: black;"  > Admin's User Registration Form</h1><br>

		
		<div class="signup" style="height:550px; width:320px;">
				<form method="post">

				<input type="text" name="username"
				placeholder="User Name"><br><br>
				{!! $errors->first('username', '<div class="error-block" style ="color:#ffff00;">:message</div>') !!}
				<input type="password" name="password"
				placeholder="Password"><br><br>
				{!! $errors->first('password', '<div class="error-block" style ="color:#ffff00;">:message</div>') !!}

				<input type="text" name="email"
				placeholder="Email address"><br><br>
				{!! $errors->first('email', '<div class="error-block" style ="color:#ffff00;">:message</div>') !!}
				
  <input list="type" placeholder="User Type" name="type">
  <datalist id="type">
    <option value="student">
    <option value="tutor">
    
  </datalist>

				{!! $errors->first('type', '<div class="error-block" style ="color:#ffff00;">:message</div>') !!}
				<br><br>
				<input type="submit" name="submit" value="Sign up" ><br><br>

				
			</form>
			<a href="/admin">Back to home</a>

		</div>

	</body>
</html>
