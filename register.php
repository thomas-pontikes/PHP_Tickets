<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP_Tickets Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="Thomas Pontikes" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/forms.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

  
  </head>

<body>

    <div class="container">

      <form method="post" action="register_account.php" class="form-signin">
		  <div class="f">
		  <h1>Welcome to PHP_Tickets</h1>
	  </div>
			  <div class="p">
			  <p>Generating your Peter Pan Bus tickets since 2013!</p>
		  </div>
	  <div class="q">
        <p>Please Enter the Following</p>
		<div>
        <input type="text" name="username" class="input-block-level" placeholder="Username">
        <input type="email" name="email" class="input-block-level" placeholder="Email">
        <input type="password" name="password" class="input-block-level" placeholder="Password">
        <input type="password" name="repassword" class="input-block-level" placeholder="Repeat Password">
        <button class="btn btn-large btn-primary" name="submit" type="submit">Register</button>
      </form>
	 

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   </body>
</html>