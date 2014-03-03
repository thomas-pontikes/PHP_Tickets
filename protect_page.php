<? 
session_start();
if(!session_is_registered(pw)){
header("location:login.php");
}
?>