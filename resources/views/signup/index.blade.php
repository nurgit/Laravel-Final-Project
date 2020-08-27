<html>

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
	<link rel="stylesheet"  href="assets/css/signup.css" type="text/css"  />


	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@469&family=Roboto&family=Roboto+Condensed&display=swap" rel="stylesheet">
	<!-- <style>
		#msg{
			visibility: hidden;
			min-width: 250px;
			background-color: yellow;
			color:#000;
			text-align: center;
			border-radius: 2px;
			padding: 16px;
			position: fixed;
			z-index: 1;
			right: 30%;
			font-size: 17px;
			margin-right: 30px;
		}
		#msg.show{
			visibility: visible;
			-webkit-animation:fadein 0.5s, fadeout 0.5s 2.5s;
			animation: fadein 0.5s, fadeout 0.5s 2.5s;

		}
		@-webkit-keyframes fadein {
			from{top:0; opacity:0;}
			to{top:30px;opacity:1;}
		}
		@keyframes fadeout {
			from{top:30px; opacity: 1;}
			to{top:0;opacity: 0;}
		}
		</style> -->
	</head>


	<body>
		<h1 style="text-align:center; color: black;"  >User Registration Form</h1><br>

		
		<div class="signup">

			<form method="post">
				<h2 style="color:#fff;">Sign Up</h2>

				<input type="text" name="username"
				placeholder="User Name"><br><br>
				<input type="password" name="password"
				placeholder="Password"><br><br>

				<input type="text" name="email"
				placeholder="Email address"><br><br>
				<input type="text" name="type"
				placeholder="User Type"><br><br>

				<input type="submit" name="submit" value="Sign up" ><br><br>

				<!--
					<div id="msg">Congratulations you have signed up successfully</div>
				<script>
					function myfunction(){
						var x =document.getElementById("msg");
						x.className="show";
						setTimeout(function(){x.className=x.className.replace("show","");},3000);
					}
				</script> -->
				Already have an account? <a href="/login" style ="text-decoration: none; font-family: 'Play',sans-serif;color:yellow;">&nbsp;Log In</a>
			</form>
			<a href="/">Back to home</a>


		</div>

	</body>
</html>
