<?php
$username = strip_tags $_POST['username'];
$password = strip_tags $_POST['password']);
$repassword = strip_tags $_POST['repassword']);

if ($username&&$password%%$repassword){
	
	$password = hash('sha256', $_POST['password']);
	$repassword = hash('sha256', $_POST['repassword']);
	

$connect = mysql_connect("localhost","root","tap13002")
	mysql_select_db("secure_login");

$queryreg = mysql_query ("
	
	INSERT INTO users VALUES ('','$username','$password')
	
	")
	die("Return to index.php")
		
}
?>
