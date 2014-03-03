<?php

include './head.php';
	
//if(isset($_COOKIE["authenticated"])){
if(1==1) {

	include './home_page.php';
	include './protect_page.php';

	
	//include './ticket_create.php';

} else {
	//include 'front_page.php';
}


include './foot.php';

?>
<!DOCTYPE HTML>
<html lang="en-US">
<link rel="stylesheet" media="all" href="pwstyle.css" />
<head>
    <meta charset="UTF-8">
    <title>This is password protected</title>
</head>
<body>
    <h1>You can only see this with a valid password.</h1>
    <p>There is a <a href="page2.php" title="Another password protected page.">another password protected page.</a> Try visiting page2.php when you have logged out and you will end up at the log in screen again.</p>
    <h2>How do you use this?</h2>
    <ol>
        <li>You can password protect any page by including the include at the top of this index.php page and any other page you want protected by the password.</li>
 
        <pre>&lt;? include('protect_page.php')?&gt;</pre>
        <li><p>The pages must have a .php, not a .html. PHP is what is checking for the credentials before displaying the page.</p></li>
        <li>To allow a user to log out, include a link to the logout page.</li>
    </ol> 
 
    <p><a href="logout.php" title="logout">Click here to log out.</a></p>
</body>
</html>