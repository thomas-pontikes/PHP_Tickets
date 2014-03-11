<?php
include'./head.php'
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
        <li class='active'><a href="home_page.php">Home</a></li>
        <li><a href="./about.php">About</a></li>

    </div><!--/.nav-collapse -->
  </div>
</div>


	<div class="container" align="left">
	<br/>
	<br/>
	<br/>
	<br/>
	<h1>Ticket Generator</h1><small>Please input information to generate a ticket<br/> Consult the <b><a class="one" href="http://peterpanbus.com" target="_blank"> Peter Pan </b></a> online schedule to determine the number of transfers (if any).<br></small>
	<br/>
	
	
<form action="ticket_create_action.php" method="GET">
			

		<input type="text" name="ticket_holder_name" class="form-controls" placeholder="Ticket Holder Name" >

</br></br>

		    <input type="text" name="ticket_price" class="form-controls input-small" placeholder="Price $">


</br></br>	

		<div id="datetimepicker" class="append date">
	      <input type="text" name="ticket_date"
	class="input-small" placeholder="Date"></input>
	      <span class="add-on">
	        <i data-time-icon="icon-time" data-date-icon="icon-calendar">
	      </span>
	    </div>
	    <script type="text/javascript"
	     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
	    </script> 
	    <script type="text/javascript"
	     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
	    </script>
	    <script type="text/javascript"
	     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
	    </script>
	    <script type="text/javascript"
	     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
	    </script>
	    <script type="text/javascript">
	      $('#datetimepicker').datetimepicker({
	        format: 'MM/dd/yyyy',
	        language: 'en'
			
			
	      });
	    </script> 

</br>


  <input type="text" class="input-small" placeholder="H:MM" name="ticket_time"> 
<select class="form-inline input-sm" name="ticket_time_ofday" style="width: 50px">
	 <option>AM</option>
	 <option>PM</option>
     
</br></br>

		Initial Departure Location<select class="form-control input-sm" name="ticket_origin" width="200" style="width: 200px">
		  <option>STORRS UNIV OF CT CT</option>
		  <option>HARTFORD CT</option>
		  <option>WATERBURY CT</option>
		  <option>PROVIDENCE BZ RI</option>
		</select> 



<br><br/>

		Final Destination<select class="form-control input-sm" name="ticket_destination" width="200" style="width: 200px">>
		  <option>STORRS UNIV OF CT CT</option>
		  <option>HARTFORD CT</option>
		  <option>WATERBURY CT</option>
		  <option>PROVIDENCE BZ RI</option>
		</select>



<br><br/>

<p>When scheduling a bus that requires a transfer multiple tickets must be generated <br>
	The "Origin" and "Destination" change depending on where the bus transfer is located</p>
	<br>
	


		Origin<select class="form-control input-sm" name="trip_origin" width="200" style="width: 200px">
		  <option>STORRS UNIV OF CT CT</option>
		  <option>HARTFORD CT</option>
		  <option>WATERBURY CT</option>
		  <option>PROVIDENCE BZ RI</option>
		</select>



<br><br/>

	Destination<select class="form-control input-sm" name="trip_destination" width="200" style="width: 200px">
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
<br>
<br>
 <p>(For Educational Purposes Only) </P>

    </div> <!-- /container -->


   




	<?php
	
	include'./foot.php'
	?>
