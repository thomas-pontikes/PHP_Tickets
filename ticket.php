<?php include './ticket_head.php';


$date=date('m/d/Y', strtotime( '+'.mt_rand(-6,0).' days'));
$conf=rand(22345669,29999999);

?>


	 
       
        <!--main_nav-->
        <div class="clear"></div>
        <div id="white">
            <!-- SUBHEADER / MAIN PROMO -->
            <div id="mainContent">
                
<div id="MainContent_mainit" style="width:100%;height:100%;text-align:center"><h1 id="tktThanks">Your Ticket Has </br> Been Generated!</h1><p id="tktConfirm"><?php print "$conf";?><br><id="tktNotify"><br></p><p id="tktPleasePrint1">PLEASE PRINT YOUR TICKET NOW.</p><div class="demo tktButton" id="showMe"><input type="button" value="Print Ticket" onclick="window.print()" id="btnPrint" class="submit"></div><p id="tktPleasePrint2">THIS IS YOUR TICKET. PLEASE PRINT SINGLE-SIDED AND BRING WHEN BOARDING THE BUS.</p><p id="tktRequirement1">A printed ticket and photo ID are required upon boarding the bus.</p><p id="tktRequirement2">Tickets are valid for date and schedule selected only.</p><p class="breakhere"></p><img src="./ticket_files/ppl.jpg" alt="" style="width:550px"><div style="font-size:11pt;width:550px;font-family:arial;height:332px;position:relative;top:-332px;text-align:center;margin-left: auto !important;margin-right:auto !important;"><div style="height:30px;font-size:26pt"><span class="titler" style="font-size:26pt">BONANZA BUS LINES, INC.</span></div><div class="barcodeI255" style="width: 200px; height: 30px; -webkit-transform: rotate(90deg); -webkit-transform-origin: 50% 50%;" id="sidebarcode"><img src="data:image/bmp;base64,Qk0WBwAAAAAAADYEAAAoAAAA3wIAAAEAAAABAAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQAAAAEBAQAAAAEBAQAAAAEBAQAAAAEBAQAAAAAAAAAAAAEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQEBAQEBAQAAAAEBAQAAAAEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQEBAQEBAQAAAAAAAAAAAAEBAQAAAAAAAAAAAAEBAQAAAAEBAQEBAQEBAQAAAAEBAQAAAAEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQAAAAAAAAAAAAEBAQAAAAEBAQEBAQEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQAAAAAAAAAAAAEBAQAAAAEBAQEBAQEBAQAAAAEBAQAAAAEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQAAAAEBAQAAAAEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQAAAAEBAQEBAQEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQAAAAAAAAAAAAEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQAAAAEBAQAAAAAAAAAAAAEBAQAAAAEBAQEBAQEBAQAAAAEBAQAAAAEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQAAAAEBAQAAAAEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQAAAAAAAAAAAAEBAQAAAAEBAQEBAQEBAQAAAAAAAAAAAAEBAQAAAAEBAQEBAQEBAQAAAAEBAQAAAAAAAAAAAAEBAQAAAAEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQEBAQEBAQAAAAEBAQAAAAAAAAAAAAEBAQAAAAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQA=" style="width: 100%; height: 100%;"></div><table style="width:100%;text-align:left;margin-left:auto;margin-right:auto;"><tbody><tr><td><span class="titler">Confirmation #<?php print "$conf";?></span><td><span class="titler">Ticket Origin</span></td><td>Fare $<span class="titler"><?= $_GET['ticket_price'] ?></span></td></td></tr><tr><td class="titler"><?= strtoupper($_GET['ticket_holder_name']) ?></td></tr><tr><td></td><td><?= $_GET['ticket_origin']?></td><td>Tax $<span class="titler">0</span></td></tr><tr><td><span class="titler">Schedule BZ  0815</span></td><td><span class="titler">Ticket Destination</span></td><td>Total <span class="titler">$<?= $_GET['ticket_price'] ?></span></td></tr><tr><td><span class="titler">DEPARTURE DATE:</span> <?= $_GET['ticket_date'] ?></td><td><?= $_GET['ticket_destination']?></td></tr><tr><td><span class="titler">DEPARTURE TIME:</span> <?= $_GET['ticket_time']?> <?=$_GET['ticket_time_ofday']?></td></tr><tr><td class="titler">Origin</td><td class="smallbold">CONF#: <?php print "$conf"?></td><td class="smallbold">Miles: 35 294</td></tr><tr><td><?= $_GET['trip_origin']?></td><td class="smallbold"><?php print "$date";?> 6:54:04 PM</td><td class="smallbold">Coupon <?=				$_GET['number_ticket_1'];?> of <?=$_GET['number_ticket_2'];?></td></tr><tr><td class="titler">Destination</td><td class="smallbold">Sold At:3743</td><td class="smallbold">Origin Point: <?= $_GET['ticket_origin']?></td></tr><tr><td><?= $_GET['trip_destination']?></td><td></td><td class="smallbold">Destination Point: <?= $_GET['ticket_destination']?></td></tr><tr><td colpspan="2" style="text-align:left"><span class="titler">Boarding #:<?php echo(rand(1,10));?></span></td><td class="smallbold">TARIFF: BZ-200    </td></tr><tr><td colspan="7" style="text-align:center"></td></tr><tr><td style="text-align:right" colspan="7"><div class="barcodeI25" style="width:200px;height:30px;padding-left: 340px; position:relative;top: 30px;"><img src="data:image/bmp;base64,Qk0WBwAAAAAAADYEAAAoAAAA3wIAAAEAAAABAAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQAAAAEBAQAAAAEBAQAAAAEBAQAAAAEBAQAAAAAAAAAAAAEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQEBAQEBAQAAAAEBAQAAAAEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQEBAQEBAQAAAAAAAAAAAAEBAQAAAAAAAAAAAAEBAQAAAAEBAQEBAQEBAQAAAAEBAQAAAAEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQAAAAAAAAAAAAEBAQAAAAEBAQEBAQEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQAAAAAAAAAAAAEBAQAAAAEBAQEBAQEBAQAAAAEBAQAAAAEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQAAAAEBAQAAAAEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQAAAAEBAQEBAQEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQAAAAAAAAAAAAEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQAAAAEBAQAAAAAAAAAAAAEBAQAAAAEBAQEBAQEBAQAAAAEBAQAAAAEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQAAAAEBAQAAAAEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQAAAAAAAAAAAAEBAQAAAAEBAQEBAQEBAQAAAAAAAAAAAAEBAQAAAAEBAQEBAQEBAQAAAAEBAQAAAAAAAAAAAAEBAQAAAAEBAQAAAAAAAAAAAAEBAQEBAQEBAQAAAAEBAQEBAQEBAQAAAAEBAQAAAAAAAAAAAAEBAQAAAAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQA=" style="width: 100%; height: 100%;"></div></td></tr><tr><td style="text-align:right" colspan="7"><div style="font-weight:bold;padding-left: 341px;padding-top:10px"></div></td></tr></tbody></table><table style="width:100%;text-align:left;position: relative;top: 50px;font-weight:bold;font-size:7.5pt" class="smallbold"><tbody><tr><td class="smallbold">CONF#:<?php print "$conf";?> </td><td class="smallbold">MC Miles: 35 294</td><td class="smallbold">3743 <?= $_GET['ticket_origin']?></td></tr><tr><td class="smallbold"><?php print "$date";?> 6:54:04 PM </td><td class="smallbold">PPWS004         </td><td class="smallbold">Coupon 				<?=$_GET['number_ticket_1'];?> of <?=$_GET['number_ticket_2'];?></td></tr><tr><td class="smallbold">TKT ORIG: <?= $_GET['trip_origin']?></td><td class="smallbold">TKT DEST:<?= $_GET['trip_destination']?></td><td class="smallbold">Tariff: BZ-200    </td></tr></tbody></table
</div>
