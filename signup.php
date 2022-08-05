<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="signin.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="signup">
			<form action="sign.php" method="post"> 
				
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="name" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button name="sign">Sign up</button>
				</form>
			</div>

			<div class="login">
			<form action="test2.php" method="POST"> 
				
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button name="log">Login</button>
			</form>
			</div>
	</div>
</body>
</html>