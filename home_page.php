<<<<<<< HEAD
<?php>
include'./head.php'
=======
<?php
include'./head.php';
include'.protect_page.php';

>>>>>>> FETCH_HEAD
?>
   <!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
    <a class="navbar-brand" href="./index.php">phpTicket</a>
	<div class="navbar-collapse collapse">
       <ul class="nav navbar-nav">
        <li class='active'><a href="index.php">Home</a></li>
        <li><a href="./about.php">About</a></li>

    </div><!--/.nav-collapse -->
  </div>
</div>




    <div class="container" align="left">
	<br/>
	<br/>
	<br/>
	<br/>
	<h1>Ticket Generator</h1><small>Please input information to generate a ticket<br/> Consult the <b><a class="one" href="http://peterpanbus.com" target="_blank"> Peter Pan </b></a> online schedule to determine the number of transfers (if any).</small>
	<br/>
	<br/>
	
<form action="ticket_create_action.php" method="GET">
			

		<input type="text" name="ticket_holder_name" class="form-controls" placeholder="Ticket Holder Name" 
/><br><br/>
		<input type="text" name="ticket_date" class="form-controls" placeholder="Ticket Date" /><br><br/>
		<input type="text" name="ticket_time" class="form-controls" placeholder="Ticket Time" /><br><br/>
		Ticket Origin<select class="form-control" name="ticket_origin" width="200" style="width: 200px">
		  <option>STORRS UNIV OF CT CT</option>
		  <option>HARTFORD CT</option>
		  <option>WATERBURY CT</option>
		  <option>PROVIDENCE BZ RI</option>
		</select> 
<br><br/>
		Destination<select class="form-control" name="destination" width="200" style="width: 200px">>
		  <option>STORRS UNIV OF CT CT</option>
		  <option>HARTFORD CT</option>
		  <option>WATERBURY CT</option>
		  <option>PROVIDENCE BZ RI</option>
		</select>
<br><br/>
		Destination Point<select class="form-control" name="destination_point" width="200" style="width: 200px">
		  <option>STORRS UNIV OF CT CT</option>
		  <option>HARTFORD CT</option>
		  <option>WATERBURY CT</option>
		  <option>PROVIDENCE BZ RI</option>
		</select>
<br><br/>




		<input type="submit"class="btn btn-primary" value="Submit" />

		</form>

      <!-- Main component for a primary marketing message or call to action 
      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>To see the difference between static and fixed top navbars, just scroll.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs »</a>
        </p>
      </div> -->



    </div> <!-- /container -->


	<?php
	include'./foot.php'
	?>
