<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>check_login</title>
</head>

<?php

$host = "localhost";
$user = "root";
$pass = "tap13002";
$db = "secure_login";

mysql_connect($host, $user, $pass);
mysql_select_db($db);
if (isset($_POST['username'])) {
	$username = $_POST['username'];
	$encryptme = $_POST['password'];
	$password = hash('sha256', $encryptme);
$sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1";
$res = mysql_query($sql);
if (mysql_num_rows($res) == 1) {
	echo '<script type="text/javascript">
           window.location = "home_page.php"
      </script>';
	die();
	} else { 
	echo "Login Has Failed please try again!";
}

}
?>

</html>