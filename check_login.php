<?php
include('database.php');

session_start();
ob_start();

mysql_connect($host, $user, $pass);
mysql_select_db($db);

if (isset($_POST['username'])) {
	$username = $_POST['username'];
	$encryptme = $_POST['password'];
	$password = hash('sha256', $encryptme);
$sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1";
$res = mysql_query($sql);
if (mysql_num_rows($res) == 1) {
	
	session_regenerate_id();
	$_SESSION['user_id'] = $userData['id'];
	$_SESSION['username'] = $userData['username'];
	session_write_close();
	ob_end_flush();
	header("Location: home_page.php");

} else { 
		include'index.php';
	echo '<html><div class="pos_fixed" <p> Login Has Failed please <br> Check Your username/password</p><div></html>';
}

}

?>
