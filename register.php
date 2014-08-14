<!DOCTYPE html>
<html>
<head>
</head>
<title>PHP_Tickets Register Page</title>
<meta charset="UTF-8">
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
	position: absolute;
	text-align:center;
	width: 100%;
	top: 70%;	
}

</style>
<body>
<div id="wrapper">
<h1>Register:</h1>
<br><br>
<form id="form" action="register_account.php" method="post">
User Name:
<br>
<input type="text" name="username" placeholder="username" ></input>
<br><br>
Email:
<br>
<input type="email" name="email" placeholder="email" ></input>
<br><br>
Password:
<br>
<input type="password" name="password" placeholder="password" ></input>
<br><br>
Re-type Password:
<br>
<input type="password" name="repassword"placeholder="repeat password" ></input>
<br><br>
<input type="submit" name="submit" value="Register"></input>
</form>
</div>
</body>
</html>