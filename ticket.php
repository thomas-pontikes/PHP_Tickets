<?php
$ticketname = strtoupper($_POST['ticket_holder_name']);
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
$date3 = $_POST['date3'];
$time = $_POST['ticket_time'];
$ampm = $_POST['ticket_time_ofday'];
$route = $_POST['routenbr'];
$origin = $_POST['ticket_origin'];
$destination = $_POST['ticket_destination'];
$coupon_origin = $_POST['trip_origin'];
$coupon_destination = $_POST['trip_destination'] ;
$price = $_POST['ticket_price'];	
$coupon_num = $_POST['number_ticket_1'];
$coupon_num2 = $_POST['number_ticket_2'];

$miles = rand(50,70);
$conf = rand(3925566001,4925566001);
$rand = rand(03743,05743);
$boarding = rand(1,10);
$rand_card = array("AMERICAN EXPRESS","VISA","DISCOVER","MASTERCARD");
$rand_num = rand(0,3);
$final_card = $rand_card[$rand_num];
$randtimeh = rand(1,12);
$randtimem = rand(10,59);
$ampmarray = array("a","p");
$randtimenum = rand(0,1);
$randampm = $ampmarray[$randtimenum];
$purch_date = date('d',strtotime("-1 days"));
?>

<!DOCTYPE html >
<html lang="en">
<head>
</head>

<div id="mainContent">

<div id="contentContainer">



<div id="jpedal" style="position:relative; width: 935px; height: 1210px; overflow: hidden; margin: 0 auto; box: 0 2px 6px rgba(100, 100, 100, 0.5);">

<!-- Begin shared CSS values -->
<style type="text/css" >
.t {
	position: absolute;
	-webkit-transform-origin: top left;
	-moz-transform-origin: top left;
	-o-transform-origin: top left;
	-ms-transform-origin: top left;
	-webkit-transform: scale(0.25);
	-moz-transform: scale(0.25);
	-o-transform: scale(0.25);
	-ms-transform: scale(0.25);
	z-ticket_asset: 2;
	position:absolute;
	white-space:nowrap;
	overflow:visible;
}
</style>
<!-- End shared CSS values -->


<!-- Begin inline CSS -->
<style type="text/css" >

#t1_1{-webkit-transform:matrix(0,-1.19,1,0,285, 275) scale(0.25);-ms-transform:matrix(0,-1.19,1,0,285, 275) scale(0.25);-moz-transform:matrix(0,-1.19,1,0,285, 275) scale(0.25);-o-transform:matrix(0,-1.19,1,0,285, 275) scale(0.25);}
#t2_1{left:701px;top:105px;}
#t3_1{left:757px;top:117px;}
#t4_1{left:312px;top:57px;}
#t5_1{left:312px;top:367px;}
#t6_1{left:444px;top:367px;}
#t7_1{left:312px;top:391px;}
#t8_1{left:312px;top:167px;}
#t9_1{left:312px;top:241px;}
#ta_1{left:636px;top:76px;}
#tb_1{left:579px;top:92px;}
#tc_1{left:390px;top:116px;}
#td_1{left:66px;top:354px;}
#te_1{left:322px;top:266px;}
#tf_1{left:465px;top:266px;}
#tg_1{left:335px;top:316px;}
#th_1{left:312px;top:354px;}
#ti_1{left:444px;top:354px;}
#tj_1{left:510px;top:354px;}
#tk_1{left:322px;top:342px;}
#tl_1{left:301px;top:41px;}
#tm_1{left:367px;top:41px;}
#tn_1{left:322px;top:92px;}
#to_1{left:322px;top:116px;}
#tp_1{left:390px;top:92px;}
#tq_1{left:579px;top:139px;}
#tr_1{left:55px;top:76px;}
#ts_1{left:335px;top:304px;letter-spacing:35px;}
#tt_1{left:467px;top:304px;}
#tu_1{left:312px;top:214px;}
#tv_1{left:568px;top:254px;}
#tw_1{left:312px;top:179px;}
#tx_1{left:579px;top:280px;}
#ty_1{left:579px;top:113px;}
#tz_1{left:579px;top:292px;}
#t10_1{left:55px;top:53px;letter-spacing:4px;}
#t11_1{left:222px;top:38px;}
#t12_1{left:55px;top:238px;}
#t13_1{left:66px;top:229px;}
#t14_1{left:55px;top:113px;}
#t15_1{left:55px;top:151px;}
#t16_1{left:176px;top:151px;}
#t17_1{left:156px;top:128px;}
#t18_1{left:55px;top:41px;}
#t19_1{left:55px;top:203px;}
#t1a_1{left:78px;top:191px;}
#t1b_1{left:55px;top:316px;}
#t1c_1{left:55px;top:328px;}
#t1d_1{left:55px;top:342px;}
#t1e_1{left:55px;top:292px;}
#t1f_1{left:78px;top:280px;}
#t1g_1{left:568px;top:367px;}
#t1h_1{left:667px;top:367px;}
#t1i_1{left:335px;top:280px;}
#t1j_1{left:511px;top:280px;}
#t1k_1{left:335px;top:280px;}
#t1l_1{left:423px;top:280px;}
#t1m_1{left:568px;top:354px;}
#t1n_1{left:446px;top:391px;}
#t1o_1{left:567px;top:391px;}
#t1p_1{left:568px;top:342px;}
#t1q_1{left:568px;top:266px;}
#t1r_1{left:645px;top:266px;}
#t1s_1{left:322px;top:292px;}
#t1t_1{left:465px;top:292px;}
#t1u_1{left:58px;top:472px;}
#t1v_1{left:58px;top:484px;}
#t1w_1{left:124px;top:484px;}
#t1x_1{left:58px;top:497px;}
#t1y_1{left:58px;top:509px;}
#t1z_1{left:673px;top:507px;}
#t20_1{left:138px;top:586px;}
#t21_1{left:270px;top:586px;}
#t22_1{left:479px;top:586px;}
#t23_1{left:699px;top:586px;}
#t24_1{left:55px;top:638px;}
#t25_1{left:55px;top:646px;}
#t26_1{left:55px;top:654px;}
#t27_1{left:55px;top:662px;}
#t28_1{left:55px;top:671px;}
#t29_1{left:55px;top:679px;}
#t2a_1{left:55px;top:687px;}
#t2b_1{left:55px;top:695px;}
#t2c_1{left:55px;top:704px;}
#t2d_1{left:55px;top:712px;}
#t2e_1{left:55px;top:720px;}
#t2f_1{left:55px;top:728px;}
#t2g_1{left:55px;top:737px;}
#t2h_1{left:55px;top:745px;}
#t2i_1{left:55px;top:753px;}
#t2j_1{left:55px;top:761px;}
#t2k_1{left:55px;top:770px;}
#t2l_1{left:55px;top:778px;}
#t2m_1{left:55px;top:786px;}
#t2n_1{left:55px;top:794px;}
#t2o_1{left:55px;top:803px;}
#t2p_1{left:55px;top:811px;}
#t2q_1{left:55px;top:819px;}
#t2r_1{left:55px;top:827px;}
#t2s_1{left:55px;top:836px;}
#t2t_t{left:100px;top:950px;} 
#t1_1,#t2_1,#t3_1,#t4_1,#t5_1,#t6_1,#t7_1,#t8_1,#t9_1,#ta_1,#tb_1,#tc_1,#td_1,#te_1,#tf_1,#tg_1,#th_1,#ti_1,#tj_1,#tk_1,#tl_1,#tm_1,#tn_1,#to_1,#tp_1,#tq_1,#tr_1,#ts_1,#tt_1,#tu_1,#tv_1,#tw_1,#tx_1,#ty_1,#tz_1,#t10_1,#t11_1,#t12_1,#t13_1,#t14_1,#t15_1,#t16_1,#t17_1,#t18_1,#t19_1,#t1a_1,#t1b_1,#t1c_1,#t1d_1,#t1e_1,#t1f_1,#t1g_1,#t1h_1,#t1i_1,#t1j_1,#t1k_1,#t1l_1,#t1m_1,#t1n_1,#t1o_1,#t1p_1,#t1q_1,#t1r_1,#t1s_1,#t1t_1 {
	-webkit-transform-origin: left top;
	-ms-transform-origin: left top;
	-moz-transform-origin: left top;
	-o-transform-origin: left top;
}

.s1_1{
	FONT-SIZE: 51px;
	FONT-FAMILY: AJJBIG-Courier1;
	color: rgb(0,0,0);
}

.s5_1{
	FONT-SIZE: 42px;
	FONT-FAMILY: AJJBIG-Courier1;
	color: rgb(0,0,0);
}

.s6_1{
	FONT-SIZE: 36px;
	FONT-FAMILY: AJJBIG-Courier1;
	color: rgb(0,0,0);
}

.s3_1{
	FONT-SIZE: 122px;
	FONT-FAMILY: PYVMTI-Helvetica1;
	color: rgb(0,0,0);
}

.s2_1{
	FONT-SIZE: 73px;
	FONT-FAMILY: AJJBIG-Courier1;
	color: rgb(0,0,0);
}

.s4_1{
	FONT-SIZE: 48px;
	FONT-FAMILY: AJJBIG-Courier1;
	color: rgb(0,0,0);
}

.v2{
-webkit-transform: scale(0.25, 0.42);
-ms-transform: scale(0.25, 0.42);
-moz-transform: scale(0.25, 0.42);
-o-transform: scale(0.25, 0.42);
}

.v3{
-webkit-transform: scale(0.25, 0.20);
-ms-transform: scale(0.25, 0.20);
-moz-transform: scale(0.25, 0.20);
-o-transform: scale(0.25, 0.20);
}

.v1{
-webkit-transform: scale(0.25, 0.21);
-ms-transform: scale(0.25, 0.21);
-moz-transform: scale(0.25, 0.21);
-o-transform: scale(0.25, 0.21);
}

</style>
<!-- End inline CSS -->

<!-- Begin embedded font definitions -->
<style type="text/css" >

@font-face {
	font-family: PYVMTI-Helvetica1;
	src: url("ticket_asset/fonts/PYVMTI-Helvetica.eot");
	src: url("ticket_asset/fonts/PYVMTI-Helvetica.eot?#iefix") format("embedded-opentype"),
		url("ticket_asset/fonts/PYVMTI-Helvetica.woff") format("woff");
}

@font-face {
	font-family: AJJBIG-Courier1;
	src: url("ticket_asset/fonts/AJJBIG-Courier.eot");
	src: url("ticket_asset/fonts/AJJBIG-Courier.eot?#iefix") format("embedded-opentype"),
		url("ticket_asset/fonts/AJJBIG-Courier.woff") format("woff");
}

</style>
<!-- End embedded font definitions -->

<!-- Begin text definitions (Positioned/styled in CSS) -->
<div id="t1_1" class="t s1_1">074012901592943700016008</div>
<div id="t2_1" class="t v1 s2_1">BOARDING #</div>
<div id="t3_1" class="t v2 s2_1"><?php echo $boarding;?></div>
<div id="t4_1" class="t v3 s3_1">BONANZA BUS LINES</div>
<div id="t5_1" class="t v1 s2_1">COUPON </div>
<div id="t6_1" class="t v1 s2_1">0<?php echo $coupon_num;?> OF 0<?php echo $coupon_num2;?></div>
<div id="t7_1" class="t v1 s2_1">0001600</div>
<div id="t8_1" class="t v1 s2_1">----------------------------------------</div>
<div id="t9_1" class="t v1 s2_1">----------------------------------------</div>
<div id="ta_1" class="t v2 s2_1"><?php echo"{$date1}{$date2}{$date3}";?> <?php echo"{$time}{$ampm}";?></div>
<div id="tb_1" class="t v1 s2_1"> DEP: </div>
<div id="tc_1" class="t v1 s2_1"><?php $destination;?></div>
<div id="td_1" class="t v1 s2_1">1 2 3 4 5 6 7</div>
<div id="te_1" class="t v1 s2_1">FARE </div>
<div id="tf_1" class="t v1 s2_1">$<?php echo $price;?></div>
<div id="tg_1" class="t v1 s2_1"><?php echo $final_card;?> </div>
<div id="th_1" class="t v1 s2_1">MILES: </div>
<div id="ti_1" class="t v1 s2_1"><?php echo $miles;?> </div>
<div id="tj_1" class="t v1 s2_1"><?php echo $miles;?></div>
<div id="tk_1" class="t v1 s2_1">AM/AM</div>
<div id="tl_1" class="t v1 s2_1">NBTA </div>
<div id="tm_1" class="t v1 s2_1">0117</div>
<div id="tn_1" class="t v1 s2_1">FROM:</div>
<div id="to_1" class="t v1 s2_1">TO:  <?php echo $destination;?></div>
<div id="tp_1" class="t v1 s2_1"><?php echo $origin;?> </div>
<div id="tq_1" class="t v2 s2_1">ADULT</div>
<div id="tr_1" class="t v2 s2_1"><?php echo $ticketname;?></div>
<div id="ts_1" class="t v1 s2_1">FEE: </div>
<div id="tt_1" class="t v1 s2_1">$1.50</div>
<div id="tu_1" class="t v2 s2_1">TICKET FOR SCHEDULE <?php echo $route;?> /<?php echo"{$date1}{$date2}{$date3}";?></div>
<div id="tv_1" class="t v1 s2_1">CONF#: <?php echo $conf;?></div>
<div id="tw_1" class="t v1 s2_1">CANCELLATION FEE 20% WHEN VALID FOR REFUND</div>
<div id="tx_1" class="t v1 s2_1"><?php echo"{$purch_date}{$date2}{$date3}";?> <?php echo $randtimeh ;?>:<?php echo $randtimem ?><?php echo $randampm;?> 1042</div>
<div id="ty_1" class="t v2 s2_1">SCHED <?php echo $route;?></div>
<div id="tz_1" class="t v1 s2_1">PPWS241 </div>
<div id="t10_1" class="t v1 s2_1">BOARDING #: </div>
<div id="t11_1" class="t v2 s2_1"><?php echo $boarding;?></div>
<div id="t12_1" class="t v2 s2_1"><?php echo $coupon_destination;?></div>
<div id="t13_1" class="t v1 s2_1">*COUPON DEST*</div>
<div id="t14_1" class="t v2 s2_1"><?php echo"{$date1}{$date2}{$date3}";?></div>
<div id="t15_1" class="t v2 s2_1">SCHD: BZ </div>
<div id="t16_1" class="t v2 s2_1"><?php echo $route;?></div>
<div id="t17_1" class="t v1 s2_1"> <?php echo"{$time}{$ampm}";?></div>
<div id="t18_1" class="t v1 s2_1">REBOARD PASS</div>
<div id="t19_1" class="t v1 s2_1"><?php echo $coupon_origin;?></div>
<div id="t1a_1" class="t v1 s2_1">COUPON ORIG</div>
<div id="t1b_1" class="t v1 s2_1">CONF#: <?php echo $conf;?></div>
<div id="t1c_1" class="t v1 s2_1"><?php echo"{$date1}{$date2}{$date3}";?> <?php echo"{$time}{$ampm}"?></div>
<div id="t1d_1" class="t v1 s2_1">SOLD AT:0<?php echo $rand;?></div>
<div id="t1e_1" class="t v1 s2_1"><?php echo $destination;?></div>
<div id="t1f_1" class="t v1 s2_1">TKT DEST</div>
<div id="t1g_1" class="t v1 s2_1">TARIFF: </div>
<div id="t1h_1" class="t v1 s2_1">BZ-200</div>
<div id="t1i_1" class="t v1 s2_1">TAX </div>
<div id="t1j_1" class="t v1 s2_1">XX</div>
<div id="t1k_1" class="t v1 s2_1">TAX </div>
<div id="t1l_1" class="t v1 s2_1">NONE</div>
<div id="t1m_1" class="t v1 s2_1">TKT DEST:<?php echo $destination;?></div>
<div id="t1n_1" class="t v1 s2_1">074 01 29 </div>
<div id="t1o_1" class="t v1 s2_1">01592943 7</div>
<div id="t1p_1" class="t v1 s2_1">TKT ORIG:<?php echo $origin;?></div>
<div id="t1q_1" class="t v1 s2_1">03743 </div>
<div id="t1r_1" class="t v1 s2_1">PETER PAN WE MA</div>
<div id="t1s_1" class="t v1 s2_1">SUBTOTAL: </div>
<div id="t1t_1" class="t v1 s2_1">$<?php echo $price;?></div>
<div id="t1u_1" class="t s4_1">NO REFUNDS OR EXCHANGES EXCEPT AS PROVIDED</div>
<div id="t1v_1" class="t s4_1">HEREIN. </div>
<div id="t1w_1" class="t s4_1">AND DUPLICATION OR ALTERATION OF THIS</div>
<div id="t1x_1" class="t s4_1">TICKET IS STRICTLY PROHIBITED AND SHALL SUBJECT</div>
<div id="t1y_1" class="t s4_1">THE BEARER TO PROSECUTION.</div>
<div id="t1z_1" class="t s5_1">074012901592943700016008</div>
<div id="t20_1" class="t s2_1">^^^^^^^^^^ </div>
<div id="t21_1" class="t s2_1">PLEASE FOLD HERE. </div>
<div id="t22_1" class="t s2_1">DO NOT CUT or TEAR </div>
<div id="t23_1" class="t s2_1">^^^^^^^^^^</div>
<div id="t24_1" class="t s6_1">Passenger agrees baggage is checked subject to governing tariffs or the following contract of carriage. Liability limited to $250 per adult</div>
<div id="t25_1" class="t s6_1">ticket and $125 per child fare ticket, except that a greater value may be declared and purchased on baggage in interstate travel up to a maximum</div>
<div id="t26_1" class="t s6_1">liability of $1,000. Baggage claims must be supported by this check, I.D. check of transportation ticket, and excess value declaration (if any).</div>
<div id="t27_1" class="t s6_1">Late claim of baggage is subject to storage charges. Note: Passenger's ticket receipts must accompany baggage claims. THIS CHECK MUST BE</div>
<div id="t28_1" class="t s6_1">SURRENDERED IN ORDER TO OBTAIN BAGGAGE. "Under Government Regulations and Carrier's tariffs all baggage must be properly identified." YOUR</div>
<div id="t29_1" class="t s6_1">BAGGAGE MUST BE CLAIMED PROMPTLY ON ARRIVAL. STORAGE CHARGES WILL BE ASSESSED AND COLLECTED FOR LATE CLAIM OF BAGGAGE. Note: Passenger's ticket</div>
<div id="t2a_1" class="t s6_1">receipts must accompany baggage claims.</div>
<div id="t2b_1" class="t s6_1">SMOKING PROHIBITED.</div>
<div id="t2c_1" class="t s6_1">ISSUING CARRIER WILL BE RESPONSIBLE ONLY FOR TRANSPORTATION ON ITS OWN LINES, in accordance with tariff regulations and limitations, AND ASSUMES</div>
<div id="t2d_1" class="t s6_1">NO RESPONSIBILITY FOR ANY ACTS OR OMISSIONS OF OTHERS OCCURRING WITHIN OR OUTSIDE THE UNITED STATES, except as imposed by law with respect to</div>
<div id="t2e_1" class="t s6_1">baggage. Seating aboard vehicles operated in interstate or foreign commerce is without regard to race, color, creed, or national origin. ONE WAY</div>
<div id="t2f_1" class="t s6_1">FARES LIMITED TO 90 DAYS, ROUND TRIP FARES LIMITED TO 1 YEAR, SPECIAL FARES LIMITED AS ENDORSED.NOTICE: INTERSTATE BAGGAGE LIABILITY. Liability</div>
<div id="t2g_1" class="t s6_1">for loss of or damage to checked Baggage is limited to actual value not to exceed $250 per Adult Fare or $125 per Child Fare, unless greater</div>
<div id="t2h_1" class="t s6_1">value is declared and paid each time baggage is checked. The maximum declared value cannot exceed $1000 per passenger. Excess value purchased</div>
<div id="t2i_1" class="t s6_1">does not cover valuable articles and certain articles are not accepted as baggage (ask agent for information). Excess value coverage may be</div>
<div id="t2j_1" class="t s6_1">purchased at the ticket counter. Ask agent for information regarding limitations on the value of baggage checked intrastate. Carrier will not</div>
<div id="t2k_1" class="t s6_1">accept any liability for unchecked baggage.PLACE YOUR NAME AND ADDRESS IN AND ON YOUR BAGGAGE. Government regulations and Carrier's Tariffs</div>
<div id="t2l_1" class="t s6_1">require that all Baggage must be properly identified. Baggage I.D. Tags should clearly show the name and address to which lost baggage should be</div>
<div id="t2m_1" class="t s6_1">forwarded. Free Baggage ID tags are available at all Ticket Windows and Baggage Counters. Additionally, the passenger's name and address must be</div>
<div id="t2n_1" class="t s6_1">on the inside of all baggage.NOTICE: INTERSTATE EXPRESS LIABILITY (NOT NEGOTIABLE) SUBJECT TO TARIFF REGULATIONS LIABILITY. This carrier will</div>
<div id="t2o_1" class="t s6_1">not pay loss or damage claims over $100 per shipment or $50 per package up to the limit allowed, whichever is greater, unless a grater value is</div>
<div id="t2p_1" class="t s6_1">declared and charges for such greater value paid. Maximum valuation on any one shipment is limited by tariff (See tariff for intrastate</div>
<div id="t2q_1" class="t s6_1">exceptions. In no event shall the Carrier be liable for CONSEQUENTIAL or INCIDENTAL DAMAGES for loss, damage, or delay.PASSENGERS TRAVELING TO</div>
<div id="t2r_1" class="t s6_1">CANADA OR MEXICO MUST HAVE PROPER TRAVEL DOCUMENTS WHICH MAY BE CHECKED AT OR PRIOR TO BOARDING A SCHEDULE DEPARTING INTO CANADA OR MEXICO AND</div>
<div id="t2s_1" class="t s6_1">WHICH WILL BE REQUIRED FOR ENTRY INTO CANADA OR MEXICO.</div>




<!-- End text definitions -->

<!-- Begin page background -->
<div id="pg1Overlay" style="width:100%; height:100%; position:absolute; z-ticket_asset:1; background-color:rgba(0,0,0,0); -webkit-user-select: none;"></div>
<div id="pg1"><img src="/ticket_asset/1.png" id="pdf1" style="width:935px; height:1210px; background-color:white;"/><!--[if lt IE 9]><img src="ticket_asset/fallback1.png" id="fallback1" style="width:935px; height:1210px; position:absolute; left:0; "/><![endif]--></div>

<!-- End page background -->

<!-- Begin page loading JS -->
<script type="text/javascript">
var isIE = false;
var f1 = [['t2_1',440],['t4_1',1263],['t6_1',352],['ta_1',618],['tc_1',660],['td_1',571],['tg_1',704],['tp_1',660],['tr_1',659],['tu_1',1421],['tv_1',748],['tw_1',1848],['tx_1',836],['ty_1',440],['t10_1',537],['t12_1',659],['t13_1',571],['t15_1',351],['t18_1',527],['t19_1',659],['t1a_1',483],['t1c_1',615],['t1d_1',615],['t1e_1',659],['t1f_1',351],['t1m_1',1056],['t1n_1',396],['t1o_1',440],['t1p_1',1056],['t1r_1',660],['t1u_1',1232],['t1w_1',1085],['t1x_1',1378],['t1y_1',762],['t21_1',748],['t22_1',792],['t24_1',3058],['t25_1',3168],['t26_1',3168],['t27_1',2992],['t28_1',3036],['t29_1',3146],['t2a_1',858],['t2b_1',417],['t2c_1',3168],['t2d_1',3102],['t2e_1',3168],['t2f_1',3146],['t2g_1',3080],['t2h_1',3102],['t2i_1',3058],['t2j_1',3102],['t2k_1',3058],['t2l_1',3168],['t2m_1',3168],['t2n_1',3102],['t2o_1',3146],['t2p_1',2970],['t2q_1',3124],['t2r_1',3124],['t2s_1',1210]];
function load1(){
	var timeout = 100;
	if (navigator.userAgent.match(/iPhone|iPad|iPod|Android/i)) timeout = 500;
	setTimeout(function() {adjustWordSpacing(f1);},timeout);
}
</script>
<!--[if lt IE 9]><script type="text/javascript">
isIE = true;

var divCount = 101;
var ieDivs = [];
for (var i = 1; i < divCount; i++) {
	var div = document.getElementById("t" + i.toString(36) + "_1");
	if(div.currentStyle.left == "auto" && div.currentStyle.top == "auto"){
        ieDivs.push([true,div]);
	}else{
        ieDivs.push([false,div,div.offsetTop,div.offsetLeft]);
	}
}
for (i = 0; i < divCount-1; i++) {
    if (ieDivs[i][0]) {
        ieDivs[i][1].style.display = "none";
    } else {
        ieDivs[i][1].style.top = (ieDivs[i][2] * 4) + "px";
        ieDivs[i][1].style.left = (ieDivs[i][3] * 4) + "px";
        ieDivs[i][1].style.zoom = "25%";
    }
}
</script><![endif]-->
<!-- End page loading JS -->

</div>

</div>
</div>
</div>
</div>
</body>
</html>
