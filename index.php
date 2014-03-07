<?php


session_start();
 
if (isset($_POST['username'])) {
        // Set variables to represent data from database
	$dbUsname = "tom";
	$dbPassword = "test";
	$uid = "1";
	
	// Set the posted data from the form into local variables
	$usname = strip_tags($_POST['username']);
	$paswd = strip_tags($_POST['password']);
	
	// Check if the username and the password they entered was correct
	if ($usname == $dbUsname && $paswd == $dbPassword) {
		// Set session 
		$_SESSION['username'] = $usname;
		$_SESSION['id'] = $uid;
		// Now direct to users feed
		header("Location: home_page.php");
	} else {
		echo "<h2>Oops that username or password combination was incorrect.
		<br /> Please try again.</h2>";
	}
	
}
?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Basic login system</title>
<style type="text/css">
html {
	font-family: Verdana, Geneva, sans-serif;
}
h1 {
	font-size: 24px;
	text-align: center;
}
#wrapper {
	position: absolute;
	width: 100%;
	top: 30%;
	margin-top: -50px;/* half of #content height*/
}
#form {
	margin: auto;
	width: 200px;
	height: 100px;
}
</style>

</head>
 
<body>
<div id="wrapper">
<h1>To Continue Please Login</h1>
<form id="form" action="index.php" method="post" enctype="multipart/form-data">
Username: <input type="text" name="username" /> <br />
Password: <input type="password" name="password" /> <br />
<input type="submit" value="Login" name="Submit" />
</form>
</body>
</html>


