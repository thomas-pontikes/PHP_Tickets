<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP_Tickets Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
	.pos_fixed {
		padding-top:15px;
		font-size:24px;
	    position: fixed;
	    text-align:center;
		top:1px;
		left:10px;
		right:10px;
	    color: red;
	}
	
      body {
        padding-top: 100px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 400px;
        padding: 29px 99px 59px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 20px;
		text-align: center;
	
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"],
	  .form-signin input[type="email"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
	  .register{
		  text-align:center;
		  font-size: 15px;
	  }
	  .p{
		  font-size:14px;
		  text-align:center;
	  }
	  .q{
		  font-size:26px;
		  text-align:center;
		  padding-top:40px;
		  padding-bottom:20px;
	  }

    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

  
  </head>

<body>

    <div class="container">

      <form method="post" action="register_account.php" class="form-signin">
		  <h1>Welcome to PHP_Tickets<h1>
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