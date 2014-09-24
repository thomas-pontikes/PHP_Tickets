<?php
include 'login_page.php';
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
	echo '<html><div class="pos_fixed" <p> Login Has Failed please <br> Check Your username/password</p><div></html>';
}

}
?>
