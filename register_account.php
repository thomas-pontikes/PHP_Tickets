<?php

include('register.php');

$con = mysqli_connect('localhost','root','tap13002','secure_login');		

if ( isset($_SERVER['HTTP_CLIENT_IP']) && ! empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) && ! empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = (isset($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : '0.0.0.0';
}

$ip = filter_var($ip, FILTER_VALIDATE_IP);
$ip = ($ip === false) ? '0.0.0.0' : $ip;

	$username = $_POST['username'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$email = $_POST['email'];
	
if(isset($_POST['submit'])){
	
if($username&&$password&&$repassword&&$email){
$encpassword = hash('sha256', $_POST['password']);
$encrepassword = hash('sha256', $_POST['repassword']);
}else{
echo '<html><div class="pos_fixed"<h1>Attention:<br>Please enter text in all fields</h1></div></html>';
exit();
}

if($encpassword==$encrepassword){	
$sql = mysql_query("SELECT * FROM users (username, password, email, ip_address) WHERE username=$username");
	
if(mysql_num_rows($sql) >= 1){
		echo '<html><div class="pos_fixed" <h1>Attention:<br><br>That user already exists!</h1></div></html>';
			exit();
		}else{
	mysqli_query($con,"INSERT INTO users (username, password, email, ip_address) VALUES ('$username','$encpassword','$email','$ip')");
	echo '<html><div class="pos_fixed" <h1>Success <br>You are now registered, please login <a href="index.php"> here </a></h1></div></html>';
}

else{
	echo '<html><div class="pos_fixed" <h1>Attention:<br>Passwords do not match!</h1></div></html>';
	exit();
}
}
}

?>

