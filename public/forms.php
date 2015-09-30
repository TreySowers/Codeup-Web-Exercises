<!DOCTYPE html>
<html>
	<head>	
		<title>The Perfect Forms</title>
	</head>
	<body>
		<h1>GET</h1>
		<?php var_dump($_GET); ?>

		<h1>POST</h1>
		<?php var_dump($_POST); ?>

		<h2>Search</h2>
		<form method="Get" action="/forms.php">
			<p>
				<label for="Search">Search</label>
				<input id="Search" name="Seach" type="text" autofocus placeholder='Search Here'>
			</p>
		</form>
		<hr>
		<h2>Log-In Form</h2>
		<form method="POST" action="/forms.php">
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="Input your username">
			</p>
			<p>
				<label for="password">Password</label>
				<input for="password" name="password" type="password" Placeholder="Enter Password">
			</p>
				<button type="Login">Login</button>

			</form>
		<hr>
		<h2>Sign-Up Form</h2>
		<form method="POST" action="forms.php">
			<p>
				<label for="Name">Name</label>
				<input id="Name" name="Name" type="text" placeholder="Enter Name">
			</p>
			<p>
				<label for"Email">Email</label>
				<input id="Email" name="Email" type="Email" placeholder="Enter Email Address">
			</p>
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="Enter Username">
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="Enter Password">
			</p>
			<p>
				<button type="submit">Submit</button>
		</form>	
		<hr>
		<h2>Contact Me</h2>
		<form method="POST" action"forms.php">
			<p>
				<label for="address">From</label>
				<input id="address" name="address" type="text" placeholder="Enter Your Email Address">
			</p>
			<p>
				<label for="subject">Subject</label>
				<input id="subject" name="subjet" type="text" placeholder="Enter Subject">
			</p>
			<p>
				<label for="message"></label>
				<textarea id="message" name="message" type="text" placeholder="Enter Message Here"></textarea>
			</p>
		</form>
	</body>
</html>




















			





























