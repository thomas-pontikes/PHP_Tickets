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
h2 {
	font-size: 12px;
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
<form id="form" action="check_login.php" method="post" enctype="multipart/form-data">
<h2>If you need to register an account please <a href="register_account.php"> click here </a>
	<br>
	<br>
Username: <input type="text" name="username" /> <br />
Password: <input type="password" name="password" /> <br />
<input type="submit" value="Login" name="Submit" />
</form>
</body>
</html>


