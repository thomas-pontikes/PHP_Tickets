<?php

include './head.php';

if(isset($_COOKIE["authenticated"])){

	include './home_page.php';
	
} else {
	//include 'front_page.php';
}


include './foot.php';

?>