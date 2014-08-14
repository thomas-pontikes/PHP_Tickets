<?php

include('register.php');

	$username = $_POST['username'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$email = $_POST['email']
	
if(isset($_POST['submit'])){
	
if($username&&$password&&$repassword&&$email){
		$encpassword = hash('sha256', $_POST['password']);
		$encrepassword = hash('sha256', $_POST['repassword']);
	}
else {
echo '<html><h1>Attention:<br><br>Please enter text in all fields</h1></html>';
exit();
}

if($encpassword==$encrepassword){
	
	$sql = mysql_query("SELECT * FROM users WHERE username=$username");
	
	if(mysql_num_rows($sql) > 0){
		echo '<html><h1>Attention:<br><br>That user already exists!</h1></html>';
			exit();
	}
	
	$con = mysqli_connect('localhost','root','tap13002','secure_login');		
	mysqli_query($con,"INSERT INTO users (username, password) VALUES ('$username','$encpassword','$email')");
	echo '<html><h1>Success<br><br>You are now registered, please login <a href="index.php"> here </a></h1></html>';
}

else{
	echo '<html><h1>Attention:<br><br>Passwords do not match!</h1></html>';
	exit();
}
}

?>

