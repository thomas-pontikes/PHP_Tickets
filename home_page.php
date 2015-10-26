<!DOCTYPE html>
<html>

<head>
	<title>PhpTickets</title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   	 	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" style="text/css" href="css/bootstrap.css">
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="js/jquery-1.3.2.js"></script>
	



   <!-- Fixed navbar -->
<div class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
		<span class="icon-bar"></span>
      

    </div>
    <a class="navbar-brand" href="home_page.php">phpTicket</a>
       <ul class="nav navbar-nav">
        <li class='active'><a href="home_page.php">Peter Pan Ticket</a></li>
        <li><a href="./greyhound.php">Greyhound Ticket</a></li>
		<li><a href="./about.php">About</a></li>
			</ul>
</div>
</div>

<div class="container">

<h1>Ticket Generator: Peter Pan</h1>
<table>
<tr>
<td>
<a class="btn btn-danger" href="logout.php" style="float:right;"> Logout </a>
<br>
<br>
</td>
</tr>
<tr>
<td>
Consult the <a class="one" href="http://peterpanbus.com" target="_blank"> Peter Pan </a> online schedule to determine the <b> price, date, and number of transfers</b> (if any).<br>
<br/>

</table>

<form action="ticket.php" method="POST">
			
Name:
<br>
		<input type="text" name="ticket_holder_name" class="form-controls" placeholder="Last, First">

<br>
<br>
Price:
<br>
<input type="text" name="ticket_price" class="form-controls" style="width: 75px" placeholder="16.00">

<br>
<br>
Date:
<table style="width:30px">
<tr>
	<td>
	<select class="form-control input-sm" name="date1" id="date1" style="width: 80px">
	<option value="01">01</option>
	<option value="02">02</option>
	<option value="03">03</option>
	<option value="04">04</option>
	<option value="05">05</option>
	<option value="06">06</option>
	<option value="07">07</option>
	<option value="08">08</option>
	<option value="09">09</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
</select>
</td>
<td>
 <select class="form-control input-sm" name="date2" id="date2" style="width: 80px">
	<option value="Jan">Jan</option>
	<option value="Feb">Feb</option>
	<option value="Mar">Mar</option>
	<option value="Apr">Apr</option>
	<option value="May">May</option>
	<option value="Jun">Jun</option>
	<option value="Jul">Jul</option>
	<option value="Aug">Aug</option>
	<option value="Sep">Sep</option>
	<option value="Oct">Oct</option>
	<option value="Nov">Nov</option>
	<option value="Dec">Dec</option>
</select>
</td>
<td>
<select class="form-control input-sm" name="date3" id="date3" style="width: 80px">
	<option value="14">2014</option>
	<option value="15">2015</option>
</select>
</td>
</tr>
</table>

<br>
Time:
<br>
<input type="text" class="input-small" placeholder="HH:MM" name="ticket_time" id="ticket_time"> 
<select class="form-inline input-sm" name="ticket_time_ofday" style="width: 65px">
	 <option value="a">AM</option>
	 <option value="p">PM</option>
     </select>
<br>
<br>


Route Number<br>
<input type="text" name="routenbr" id="routnbr" class="form-controls" placeholder="Route Number">
			 
<br>
<br>
		Initial Departure Location<select class="form-control input-sm" name="ticket_origin" id="ticket_original" style="width: 200px">
          <option value="ALBANY, NY">Albany, NY</option>
		  <option value="AMHERST, MA">Amherst, MA</option>
		  <option value="BALTIMORE DOWNTOWN, MD">Baltimore Downtown, MD</option>
		  <option value="BARNSTABLE, MA">Barnstable, MA</option>
		  <option value="BOSTON, MA">Boston, MA</option>
		  <option value="BOSTON LOGAN ARPT, MA">Boston Logan Arpt, MA</option>
		  <option value="BOURNE, MA">Bourne, MA</option>
		  <option value="BUZZARDS BAY, MA">Buzzards Bay, MA</option>
		  <option value="CONCORD, NH">Concord, NH</option>
		  <option value="DANBURY, CT">Danbury, CT</option>
		  <option value="DEERFIELD, MA">Deerfield, MA</option>
		  <option value="FALL RIVER, MA">Fall River, MA</option>
		  <option value="FALMOUTH, MA">Falmouth, MA</option>
		  <option value="FARMINGTON, CT">Farmington, CT</option>
		  <option value="FRAMINGHAM, MA">Framingham, MA</option>
		  <option value="GREAT BARRINGTON, MA">Great Barrington, MA</option>
		  <option value="GREENFIELD, MA">Greenfield, MA</option>
		  <option value="HAMPSHIRE COLL, MA">Hampshire Coll, MA</option>
		  <option value="HARTFORD, CT">Hartford, CT</option>
		  <option value="HOLYOKE, MA">Holyoke, MA</option>
		  <option value="HOLYOKE MALL, MA">Holyoke Mall, MA</option>
		  <option value="HYANNIS, MA">Hyannis, MA</option>
		  <option value="LEE, MA">Lee, MA</option>
		  <option value="LENOX, MA">Lenox, MA</option>
		  <option value="LEOMINSTER, MA">Leominster, MA</option>
		  <option value="LOWELL, MA">Lowell, MA</option>
		  <option value="MANCHESTER, NH">Manchester, NH</option>
		  <option value="MANSFIELD, CT">Mansfield, CT</option>
		  <option value="MIDDLETOWN, RI">Middletown, RI</option>
		  <option value="MT LAUREL, NJ">Mt Laurel, NJ</option>
		  <option value="NASHUA, NH">Nashua, NH</option>
		  <option value="NEWARK, NJ">Newark, NJ</option>
		  <option value="NEW BEDFORD, MA">New Bedford, MA</option>
		  <option value="NEW BRITAIN, CT">New Britain, CT</option>
		  <option value="NEW CARROLLTON, MD">New Carrollton, MD</option>
		  <option value="NEW HAVEN, CT">New Haven, CT</option>
		  <option value="NEWPORT, RI">Newport, RI</option>
		  <option value="NEW YORK, NY">New York, NY</option>
		  <option value="NORTHAMPTON, MA">Northampton, MA</option>
		  <option value="PHILADELPHIA, PA">Philadelphia, PA</option>
		  <option value="PITTSFIELD, MA">Pittsfield, MA</option>
		  <option value="PORTSMOUTH, RI">Portsmouth, RI</option>
		  <option value="PROVIDENCE BZ, RI">Providence Bz, RI</option>
		  <option value="PROVIDENCE DOWNTOWN,RI">Providence Downtown, RI</option>
		  <option value="SHEFFIELD, MA">Sheffield, MA</option>
		  <option value="SILVER SPRING, MD">Silver Spring, MD</option>
		  <option value="SOMERSET PARK, MA">Somerset Park, MA</option>
		  <option value="SOUTHBURY, CT">Southbury, CT</option>
		  <option value="SOUTH HADLEY, MA">South Hadley, MA</option>
		  <option value="SPRINGFIELD, MA">Springfield, MA</option>
		  <option value="STOCKBRIDGE, MA">Stockbridge, MA</option>
		  <option selected="selected" value="STORRS UCONN CT">Storrs Uconn, CT</option>
		  <option value="STURBRIDGE, MA">Sturbridge, MA</option>
		  <option value="TF GREEN ARPT, RI">Tf Green Arpt, RI</option>
		  <option value="TORRINGTON, CT">Torrington, CT</option>
		  <option value="UNIV OF MA AMHERST, MA">Univ Of Ma Amherst, MA</option>
		  <option value="WAREHAM MILL POND DINER, MA">Wareham Mill Pond Diner, MA</option>
		  <option value="WASHINGTON, DC">Washington, DC</option>
		  <option value="WATERBURY, CT">Waterbury, CT</option>
		  <option value="WILLIAMSTOWN, MA">Williamstown, MA</option>
		  <option value="WILMINGTON, DE">Wilmington, DE</option>
		  <option value="WINSTED, CT">Winsted, CT</option>
		  <option value="WOODS HOLE, MA">Woods Hole, MA</option>
		  <option value="WORCESTER, MA">Worcester, MA</option>
		  
		  
		</select> 



<br>

		Final Destination<select class="form-control input-sm" name="ticket_destination" style="width: 200px">
		  <option value="ALBANY, NY">Albany, NY</option>
		  <option value="AMHERST, MA">Amherst, MA</option>
		  <option value="BALTIMORE DOWNTOWN, MD">Baltimore Downtown, MD</option>
		  <option value="BARNSTABLE, MA">Barnstable, MA</option>
		  <option value="BOSTON, MA">Boston, MA</option>
		  <option value="BOSTON LOGAN ARPT, MA">Boston Logan Arpt, MA</option>
		  <option value="BOURNE, MA">Bourne, MA</option>
		  <option value="BUZZARDS BAY, MA">Buzzards Bay, MA</option>
		  <option value="CONCORD, NH">Concord, NH</option>
		  <option value="DANBURY, CT">Danbury, CT</option>
		  <option value="DEERFIELD, MA">Deerfield, MA</option>
		  <option value="FALL RIVER, MA">Fall River, MA</option>
		  <option value="FALMOUTH, MA">Falmouth, MA</option>
		  <option value="FARMINGTON, CT">Farmington, CT</option>
		  <option value="FRAMINGHAM, MA">Framingham, MA</option>
		  <option value="GREAT BARRINGTON, MA">Great Barrington, MA</option>
		  <option value="GREENFIELD, MA">Greenfield, MA</option>
		  <option value="HAMPSHIRE COLL, MA">Hampshire Coll, MA</option>
		  <option value="HARTFORD, CT">Hartford, CT</option>
		  <option value="HOLYOKE, MA">Holyoke, MA</option>
		  <option value="HOLYOKE MALL, MA">Holyoke Mall, MA</option>
		  <option value="HYANNIS, MA">Hyannis, MA</option>
		  <option value="LEE, MA">Lee, MA</option>
		  <option value="LENOX, MA">Lenox, MA</option>
		  <option value="LEOMINSTER, MA">Leominster, MA</option>
		  <option value="LOWELL, MA">Lowell, MA</option>
		  <option value="MANCHESTER, NH">Manchester, NH</option>
		  <option value="MANSFIELD, CT">Mansfield, CT</option>
		  <option value="MIDDLETOWN, RI">Middletown, RI</option>
		  <option value="MT LAUREL, NJ">Mt Laurel, NJ</option>
		  <option value="NASHUA, NH">Nashua, NH</option>
		  <option value="NEWARK, NJ">Newark, NJ</option>
		  <option value="NEW BEDFORD, MA">New Bedford, MA</option>
		  <option value="NEW BRITAIN, CT">New Britain, CT</option>
		  <option value="NEW CARROLLTON, MD">New Carrollton, MD</option>
		  <option value="NEW HAVEN, CT">New Haven, CT</option>
		  <option value="NEWPORT, RI">Newport, RI</option>
		  <option value="NEW YORK, NY">New York, NY</option>
		  <option value="NORTHAMPTON, MA">Northampton, MA</option>
		  <option value="PHILADELPHIA, PA">Philadelphia, PA</option>
		  <option value="PITTSFIELD, MA">Pittsfield, MA</option>
		  <option value="PORTSMOUTH, RI">Portsmouth, RI</option>
		  <option value="PROVIDENCE BZ, RI">Providence Bz, RI</option>
		  <option value="PROVIDENCE DOWNTOWN,RI">Providence Downtown, RI</option>
		  <option value="SHEFFIELD, MA">Sheffield, MA</option>
		  <option value="SILVER SPRING, MD">Silver Spring, MD</option>
		  <option value="SOMERSET PARK, MA">Somerset Park, MA</option>
		  <option value="SOUTHBURY, CT">Southbury, CT</option>
		  <option value="SOUTH HADLEY, MA">South Hadley, MA</option>
		  <option value="SPRINGFIELD, MA">Springfield, MA</option>
		  <option value="STOCKBRIDGE, MA">Stockbridge, MA</option>
		  <option selected="selected" value="STORRS UCONN CT">Storrs Uconn, CT</option>
		  <option value="STURBRIDGE, MA">Sturbridge, MA</option>
		  <option value="TF GREEN ARPT, RI">Tf Green Arpt, RI</option>
		  <option value="TORRINGTON, CT">Torrington, CT</option>
		  <option value="UNIV OF MA AMHERST, MA">Univ Of Ma Amherst, MA</option>
		  <option value="WAREHAM MILL POND DINER, MA">Wareham Mill Pond Diner, MA</option>
		  <option value="WASHINGTON, DC">Washington, DC</option>
		  <option value="WATERBURY, CT">Waterbury, CT</option>
		  <option value="WILLIAMSTOWN, MA">Williamstown, MA</option>
		  <option value="WILMINGTON, DE">Wilmington, DE</option>
		  <option value="WINSTED, CT">Winsted, CT</option>
		  <option value="WOODS HOLE, MA">Woods Hole, MA</option>
		  <option value="WORCESTER, MA">Worcester, MA</option>
		  
		  
		</select>

<br>

<p>When scheduling a bus that requires a transfer multiple tickets must be generated <br>
	The "Origin" and "Destination" change depending on where the bus transfer is located</p>
	
	


		Origin<select class="form-control input-sm" name="trip_origin" style="width: 200px">
  		  <option value="ALBANY, NY">Albany, NY</option>
  		  <option value="AMHERST, MA">Amherst, MA</option>
  		  <option value="BALTIMORE DOWNTOWN, MD">Baltimore Downtown, MD</option>
  		  <option value="BARNSTABLE, MA">Barnstable, MA</option>
  		  <option value="BOSTON, MA">Boston, MA</option>
  		  <option value="BOSTON LOGAN ARPT, MA">Boston Logan Arpt, MA</option>
  		  <option value="BOURNE, MA">Bourne, MA</option>
  		  <option value="BUZZARDS BAY, MA">Buzzards Bay, MA</option>
  		  <option value="CONCORD, NH">Concord, NH</option>
  		  <option value="DANBURY, CT">Danbury, CT</option>
  		  <option value="DEERFIELD, MA">Deerfield, MA</option>
  		  <option value="FALL RIVER, MA">Fall River, MA</option>
  		  <option value="FALMOUTH, MA">Falmouth, MA</option>
  		  <option value="FARMINGTON, CT">Farmington, CT</option>
  		  <option value="FRAMINGHAM, MA">Framingham, MA</option>
  		  <option value="GREAT BARRINGTON, MA">Great Barrington, MA</option>
  		  <option value="GREENFIELD, MA">Greenfield, MA</option>
  		  <option value="HAMPSHIRE COLL, MA">Hampshire Coll, MA</option>
  		  <option value="HARTFORD, CT">Hartford, CT</option>
  		  <option value="HOLYOKE, MA">Holyoke, MA</option>
  		  <option value="HOLYOKE MALL, MA">Holyoke Mall, MA</option>
  		  <option value="HYANNIS, MA">Hyannis, MA</option>
  		  <option value="LEE, MA">Lee, MA</option>
  		  <option value="LENOX, MA">Lenox, MA</option>
  		  <option value="LEOMINSTER, MA">Leominster, MA</option>
  		  <option value="LOWELL, MA">Lowell, MA</option>
  		  <option value="MANCHESTER, NH">Manchester, NH</option>
  		  <option value="MANSFIELD, CT">Mansfield, CT</option>
  		  <option value="MIDDLETOWN, RI">Middletown, RI</option>
  		  <option value="MT LAUREL, NJ">Mt Laurel, NJ</option>
  		  <option value="NASHUA, NH">Nashua, NH</option>
  		  <option value="NEWARK, NJ">Newark, NJ</option>
  		  <option value="NEW BEDFORD, MA">New Bedford, MA</option>
  		  <option value="NEW BRITAIN, CT">New Britain, CT</option>
  		  <option value="NEW CARROLLTON, MD">New Carrollton, MD</option>
  		  <option value="NEW HAVEN, CT">New Haven, CT</option>
  		  <option value="NEWPORT, RI">Newport, RI</option>
  		  <option value="NEW YORK, NY">New York, NY</option>
  		  <option value="NORTHAMPTON, MA">Northampton, MA</option>
  		  <option value="PHILADELPHIA, PA">Philadelphia, PA</option>
  		  <option value="PITTSFIELD, MA">Pittsfield, MA</option>
  		  <option value="PORTSMOUTH, RI">Portsmouth, RI</option>
  		  <option value="PROVIDENCE BZ, RI">Providence Bz, RI</option>
  		  <option value="PROVIDENCE DOWNTOWN,RI">Providence Downtown, RI </option>
  		  <option value="SHEFFIELD, MA">Sheffield, MA</option>
  		  <option value="SILVER SPRING, MD">Silver Spring, MD</option>
  		  <option value="SOMERSET PARK, MA">Somerset Park, MA</option>
  		  <option value="SOUTHBURY, CT">Southbury, CT</option>
  		  <option value="SOUTH HADLEY, MA">South Hadley, MA</option>
  		  <option value="SPRINGFIELD, MA">Springfield, MA</option>
  		  <option value="STOCKBRIDGE, MA">Stockbridge, MA</option>
  		  <option selected="selected" value="STORRS UCONN CT">Storrs Uconn, CT</option>
  		  <option value="STURBRIDGE, MA">Sturbridge, MA</option>
  		  <option value="TF GREEN ARPT, RI">Tf Green Arpt, RI</option>
  		  <option value="TORRINGTON, CT">Torrington, CT</option>
  		  <option value="UNIV OF MA AMHERST, MA">Univ Of Ma Amherst, MA</option>
  		  <option value="WAREHAM MILL POND DINER, MA">Wareham Mill Pond Diner, MA</option>
  		  <option value="WASHINGTON, DC">Washington, DC</option>
  		  <option value="WATERBURY, CT">Waterbury, CT</option>
  		  <option value="WILLIAMSTOWN, MA">Williamstown, MA</option>
  		  <option value="WILMINGTON, DE">Wilmington, DE</option>
  		  <option value="WINSTED, CT">Winsted, CT</option>
  		  <option value="WOODS HOLE, MA">Woods Hole, MA</option>
  		  <option value="WORCESTER, MA">Worcester, MA</option>
		  
		  
  		</select>




<br>
	Destination<select class="form-control input-sm" name="trip_destination" style="width: 200px">
	  <option value="ALBANY, NY">Albany, NY</option>
	  <option value="AMHERST, MA">Amherst, MA</option>
	  <option value="BALTIMORE DOWNTOWN, MD">Baltimore Downtown, MD</option>
	  <option value="BARNSTABLE, MA">Barnstable, MA</option>
	  <option value="BOSTON, MA">Boston, MA</option>
	  <option value="BOSTON LOGAN ARPT, MA">Boston Logan Arpt, MA</option>
	  <option value="BOURNE, MA">Bourne, MA</option>
	  <option value="BUZZARDS BAY, MA">Buzzards Bay, MA</option>
	  <option value="CONCORD, NH">Concord, NH</option>
	  <option value="DANBURY, CT">Danbury, CT</option>
	  <option value="DEERFIELD, MA">Deerfield, MA</option>
	  <option value="FALL RIVER, MA">Fall River, MA</option>
	  <option value="FALMOUTH, MA">Falmouth, MA</option>
	  <option value="FARMINGTON, CT">Farmington, CT</option>
	  <option value="FRAMINGHAM, MA">Framingham, MA</option>
	  <option value="GREAT BARRINGTON, MA">Great Barrington, MA</option>
	  <option value="GREENFIELD, MA">Greenfield, MA</option>
	  <option value="HAMPSHIRE COLL, MA">Hampshire Coll, MA</option>
	  <option value="HARTFORD, CT">Hartford, CT</option>
	  <option value="HOLYOKE, MA">Holyoke, MA</option>
	  <option value="HOLYOKE MALL, MA">Holyoke Mall, MA</option>
	  <option value="HYANNIS, MA">Hyannis, MA</option>
	  <option value="LEE, MA">Lee, MA</option>
	  <option value="LENOX, MA">Lenox, MA</option>
	  <option value="LEOMINSTER, MA">Leominster, MA</option>
	  <option value="LOWELL, MA">Lowell, MA</option>
	  <option value="MANCHESTER, NH">Manchester, NH</option>
	  <option value="MANSFIELD, CT">Mansfield, CT</option>
	  <option value="MIDDLETOWN, RI">Middletown, RI</option>
	  <option value="MT LAUREL, NJ">Mt Laurel, NJ</option>
	  <option value="NASHUA, NH">Nashua, NH</option>
	  <option value="NEWARK, NJ">Newark, NJ</option>
	  <option value="NEW BEDFORD, MA">New Bedford, MA</option>
	  <option value="NEW BRITAIN, CT">New Britain, CT</option>
	  <option value="NEW CARROLLTON, MD">New Carrollton, MD</option>
	  <option value="NEW HAVEN, CT">New Haven, CT</option>
	  <option value="NEWPORT, RI">Newport, RI</option>
	  <option value="NEW YORK, NY">New York, NY</option>
	  <option value="NORTHAMPTON, MA">Northampton, MA</option>
	  <option value="PHILADELPHIA, PA">Philadelphia, PA</option>
	  <option value="PITTSFIELD, MA">Pittsfield, MA</option>
	  <option value="PORTSMOUTH, RI">Portsmouth, RI</option>
	  <option value="PROVIDENCE BZ, RI">Providence Bz, RI</option>
	  <option value="PROVIDENCE DOWNTOWN,RI">Providence Downtown, RI</option>
	  <option value="SHEFFIELD, MA">Sheffield, MA</option>
	  <option value="SILVER SPRING, MD">Silver Spring, MD</option>
	  <option value="SOMERSET PARK, MA">Somerset Park, MA</option>
	  <option value="SOUTHBURY, CT">Southbury, CT</option>
	  <option value="SOUTH HADLEY, MA">South Hadley, MA</option>
	  <option value="SPRINGFIELD, MA">Springfield, MA</option>
	  <option value="STOCKBRIDGE, MA">Stockbridge, MA</option>
	  <option selected="selected" value="STORRS UCONN CT">Storrs Uconn, CT</option>
	  <option value="STURBRIDGE, MA">Sturbridge, MA</option>
	  <option value="TF GREEN ARPT, RI">Tf Green Arpt, RI</option>
	  <option value="TORRINGTON, CT">Torrington, CT</option>
	  <option value="UNIV OF MA AMHERST, MA">Univ Of Ma Amherst, MA</option>
	  <option value="WAREHAM MILL POND DINER, MA">Wareham Mill Pond Diner, MA</option>
	  <option value="WASHINGTON, DC">Washington, DC</option>
	  <option value="WATERBURY, CT">Waterbury, CT</option>
	  <option value="WILLIAMSTOWN, MA">Williamstown, MA</option>
	  <option value="WILMINGTON, DE">Wilmington, DE</option>
	  <option value="WINSTED, CT">Winsted, CT</option>
	  <option value="WOODS HOLE, MA">Woods Hole, MA</option>
	  <option value="WORCESTER, MA">Worcester, MA</option>
	  
	</select>

<br>

	Ticket Number <input type="text" name="number_ticket_1" class="form-controls" placeholder="1" style="width: 35px"> of <input type="text" name="number_ticket_2" class="form-controls" placeholder="1" style="width: 35px">
<br>
</form>
<script type="text/javascript">
$( document ).ready(function() {
   	$(':checkbox:checked').removeAttr('checked');
 
});
function checkSubmit(ele, id) {
	x = document.getElementById(id);
	if (ele.checked == true) x.disabled = false;
	else x.disabled = true;
}
</script>

<h4>(DISCLAIMER)</h4>
Tickets are not valid and are not intended for <b> actual</b> use.<br> By checking the box you are acknowledging that this generator is  <b>For Educational Purposes Only --></b>     <input type="checkbox" name="myCheck" onclick="checkSubmit(this, 'mySubmit')" value="y" />
<br>
<input type="submit" name="submit" value="Submit" class="btn btn-primary"  id="mySubmit" disabled="disabled" />


