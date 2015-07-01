<?php
include('register.php');
include('database.php');
include('ipget.php');

if (isset($_POST['submit'])) {

$connect = mysql_connect($host, $user, $pass);

if(!$connect){

die(mysql_error());

}

//Selecting database

$select_db = mysql_select_db("secure_login", $connect);

if(!$select_db){

die(mysql_error());

}

//Collecting info

$username = $_REQUEST['username'];

$password = $_REQUEST['password'];

$repassword = $_REQUEST['repassword'];

$email = $_REQUEST['email'];

$date = $_REQUEST['date'];

//Here we will check do we have all inputs filled

if(empty($username)){
echo'<html><class="pos_fixed" <p> Please enter your username! </p> </div></html>';
die();

}


if(empty($password)){
echo 'Please enter your password!<br>';
die();

}


if(empty($repassword)){
echo'Please confirm your password!<br>';
die();
}


if(empty($email)){
echo'Please enter your email!';
die();

}

//Let's check if this username is already in use

$user_check = mysql_query("SELECT username FROM users WHERE username='$username'");

$do_user_check = mysql_num_rows($user_check);

//Now if email is already in use

$email_check = mysql_query("SELECT email FROM users WHERE email='$email'");

$do_email_check = mysql_num_rows($email_check);

//Now display errors

if($do_user_check > 0){
echo 'Username is already in use!<br>';
die();
}


if($do_email_check > 0){
echo'Email is already in use!';
die();

}

//Now let's check does passwords match

if($password != $repassword){
include('register.php');
echo'Passwords do not match!';
die();
}else{
	$encryptme = $_POST['password'];

	$password = hash('sha256', $encryptme);
}



//If everything is okay let's register this user


$insert = mysql_query("INSERT INTO users (username, password, email, ip) VALUES ('$username', '$password', '$email','$ip')");

if(!$insert){

die("There's little problem: ".mysql_error());

}

echo"$username",' you are now registered. Click <a href="index.php"> HERE </a> to login';


}

?>

