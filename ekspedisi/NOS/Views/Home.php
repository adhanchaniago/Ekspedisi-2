<!DOCTYPE html>
<html>
<head>
	<title>NOS</title>
	<link rel="stylesheet" type="text/css" href="Views/styles/global.css" />
</head>
<body>
	<div id="header">
		<div class="logo">
			<img id="icon-logo" src="Views/images/nos.png">
		</div>

		<div class="navMenu">
			<ul class="menu">
				<li><a href="#">Admin</a></li>
				<li><a href="#">Customer</a></li>
			</ul>
		</div>
	</div>

	<div id="container">

		<div class="login">
			<form action="" method="post" >
			<p class="label">Username</p>
			<input type="text" name="username" id="username" /><br/><br/>
			<p class="label">Password</p>
			<input type="password" name="password" id="password" /><br/><br/>
			<input type="hidden" name="submitted" value="1" />
			<input type="submit" value="Submit">
		</form>
		</div>
	</div>
</body>
</html>
