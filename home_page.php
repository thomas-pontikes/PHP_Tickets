<?php
include'./head.php'
?>


   <!-- Fixed navbar -->
<div class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
		<span class="icon-bar"></span>
      </button>

    </div>
    <a class="navbar-brand" href="./index.php">phpTicket</a>
       <ul class="nav navbar-nav">
        <li class='active'><a href="home_page.php">Home</a></li>
        <li><a href="./about.php">About</a></li>

    </div><!--/.nav-collapse -->
  </div>
</div>


	<div class="container" align="left">

	<h1>Ticket Generator</h1>Consult the <b><a class="one" href="http://peterpanbus.com" target="_blank"> Peter Pan </b></a> online schedule to determine the <b>price, date, and number of transfers</b> (if any).<br></small>
	<br/>
	
	
<form action="ticket_create_action.php" method="GET">
			

		<input type="text" name="ticket_holder_name" class="form-controls" placeholder="Ticket Holder Name" >

<br>

		    <input type="text" name="ticket_price" class="form-controls input-small" placeholder="Price $">
		  
		  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
		  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
		  <link rel="stylesheet" href="/resources/demos/style.css">
		  
		  <script>
		  $(function() {
		    $( "#datepicker" ).datepicker();
		  });
		  </script>;

		<p>Date: <input type="text" id="datepicker"></p>


  <input type="text" class="input-small" placeholder="H:MM" name="ticket_time"> 
<select class="form-inline input-sm" name="ticket_time_ofday" style="width: 50px">
	 <option>AM</option>
	 <option>PM</option>
     </select>
    
<br>
<br>
		
		Initial Departure Location<select class="form-control input-sm" name="ticket_origin" width="200" style="width: 200px">
		  <option>STORRS UNIV OF CT CT</option>
		  <option>HARTFORD CT</option>
		  <option>WATERBURY CT</option>
		  <option>PROVIDENCE BZ RI</option>
		  <option>PROVIDENCE KENNEDY PLZ BZ RI</option>
		  
		</select> 



<br>

		Final Destination<select class="form-control input-sm" name="ticket_destination" width="200" style="width: 200px">>
		  <option>STORRS UNIV OF CT CT</option>
		  <option>HARTFORD CT</option>
		  <option>WATERBURY CT</option>
		  <option>PROVIDENCE BZ RI</option>
		  <option>PROVIDENCE KENNEDY PLZ BZ RI</option>
		  
		</select>

<br>

<p>When scheduling a bus that requires a transfer multiple tickets must be generated <br>
	The "Origin" and "Destination" change depending on where the bus transfer is located</p>
	
	


		Origin<select class="form-control input-sm" name="trip_origin" width="200" style="width: 200px">
		  <option>STORRS UNIV OF CT CT</option>
		  <option>HARTFORD CT</option>
		  <option>WATERBURY CT</option>
		  <option>PROVIDENCE BZ RI</option>
		  <option>PROVIDENCE KENNEDY PLZ BZ RI</option>
		  
		</select>




<br>
	Destination<select class="form-control input-sm" name="trip_destination" width="200" style="width: 200px">
	  <option>STORRS UNIV OF CT CT</option>
	  <option>HARTFORD CT</option>
	  <option>WATERBURY CT</option>
	  <option>PROVIDENCE BZ RI</option>
	  <option>PROVIDENCE KENNEDY PLZ BZ RI</option>
	  
	</select>

<br>

	Ticket Number <input type="text" name="number_ticket_1" class="form-controls"placeholder="1"style="width: 35px"> of <input type="text" name="number_ticket_2" class="form-controls"placeholder="1"style="width: 35px">
<br>

<script type="text/javascript">
function checkSubmit(ele, id) {
	x = document.getElementById(id);
	if (ele.checked == true) x.disabled = false;
	else x.disabled = true;
}
</script>

<h4>(DISCLAIMER)</h4>
Tickets are not valid and are not intended for <b> actual</b> use.<br> By checking the box you are acknowledging that this generator is  <b>For Educational Purposes Only --></b>     <input type="checkbox" name="myCheck" onclick="checkSubmit(this, 'mySubmit')" value="y" /> <br>

<input type="submit" name="submit" value="Submit" class="btn btn-primary"  id="mySubmit" disabled="disabled" />









    
</div> <!-- /container -->


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



	<?php
	
	include'./foot.php'
	?>
