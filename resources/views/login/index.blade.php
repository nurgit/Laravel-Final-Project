<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Login Page</title>
	<link rel="stylesheet" href="assets/css/login.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@469&family=Roboto&family=Roboto+Condensed&display=swap" rel="stylesheet">
	</head>
	<body>

		<div class="signin">
			<form method="post" >
				<h2 style="color:white">Log In</h2>
				<input type="text" name="username"
				placeholder="Username">
				<input type="password" name="password"
				placeholder="Password"><br><br>
				<a href=""><input type="submit" name="submit" value="Log In"></a><br><br>


				<!--invalid username/password-->

				<h3 style="color:red;">

					@if (Session::has('msg'))
					{{{ Session::get('msg') }}}
					@endif
				</h3>




				<div id="container">
				<a href="#" styles="margin-right:0px; font-size:13px font-family:'Roboto Condensed',Geneva,sans-serif;">Reset password</a><br><br>
				<a href="#" styles="margin-right:0px; font-size:13px font-family:'Roboto Condensed',Tahoma,Geneva,sans-serif;">Forgot password</a>

				</div><br><br><br><br>
				<a href="/">&nbsp;Home</a><br><br>

				Dont have a account?<a href="/signup">&nbsp;Sign Up</a>

			</form>
		</div>
	</body>
</html>
