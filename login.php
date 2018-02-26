<!DOCTYPE html>
<html>

	<head>
		<title>User registration system using php and mysql</title>
		<link rel="stylesheet" type="text/css" href="style.css"></link>
	</head>
	<body> 
	
		<div class="header">
			<h2>Login</h2>
			
		</div>
		<form method="post" action="login.php">
			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password_1">
				
			</div>
			
			
			<div class="input-group">
				<label>Confirm Password</label>
				<button type="submit" name="login" class="btn">Login</button>
				
			</div>
			<p>
				Not yet a member? <a href="registration.php">Sign up</a>
			</p>
			
		</form>
	</body>

</html> 