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
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta charset="utf-8" />
</head>

<body style="margin: 0;">

<div id="jpedal" style="overflow: hidden; position:relative; width: 909px; height: 1286px;">

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
	z-index: 2;
	position:absolute;
	white-space:nowrap;
	overflow:visible;
}
</style>
<!-- End shared CSS values -->

<!-- Begin shared JS -->
<script type="text/javascript">

// Ensure that we're not replacing any onload events
function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			if (oldonload) {
				oldonload();
			}
			func();
		}
	}
}
addLoadEvent(function(){load1();});

function adjustWordSpacing(widths) {
    var i, allLinesDone = false;
    var isDone = [];
    var currentSpacing = [];
    var elements = [];
    
    // Initialise arrays
    for (i = 0; i < widths.length; i++) {
        elements[i] = document.getElementById(widths[i][0]);
        elements[i].style.wordSpacing = '0px';//Required if rerunning
    }
    for (i = 0; i < widths.length; i++) {
        if (isIE) widths[i][1] = widths[i][1] * 4;
        currentSpacing[i] = Math.floor((widths[i][1] - elements[i].offsetWidth) / elements[i].innerHTML.match(/\s.|&nbsp;./g).length);//min
        if (isIE) currentSpacing[i] = Math.floor(currentSpacing[i] / 4);
        isDone[i] = false;
    }
    
    while (!allLinesDone) {
        // Add each adjustment to the render queue without forcing a render
        for (i = 0; i < widths.length; i++) {
            if (!isDone[i]) {
                elements[i].style.wordSpacing = currentSpacing[i] + 'px';
            }            
        }
        
        allLinesDone = true;
        // If elements still need to be wider, add 1 to the word spacing
        for (i = 0; i < widths.length; i++) {
            if (!isDone[i] && currentSpacing[i] < 160) {
                if (elements[i].offsetWidth >= widths[i][1]) {
                    isDone[i] = true;
                } else {
                    currentSpacing[i]++;
                    allLinesDone = false;
                }
            }
        }
    }
    
    for (i = 0; i < widths.length; i++) {
        elements[i].style.wordSpacing = (currentSpacing[i] - 1) + 'px';
    }
}

</script>
<!-- End shared JS -->


<!-- Begin inline CSS -->
<style type="text/css" >

#t1_1{left:350px;top:183px;}
#t2_1{left:339px;top:425px;}
#t3_1{left:483px;top:425px;}
#t4_1{left:616px;top:318px;}
#t5_1{left:616px;top:304px;}
#t6_1{left:605px;top:291px;}
#t7_1{left:339px;top:49px;}
#t8_1{left:483px;top:398px;}
#t9_1{left:350px;top:398px;}
#ta_1{left:350px;top:385px;}
#tb_1{left:259px;top:49px;}
#tc_1{left:605px;top:398px;}
#td_1{left:605px;top:385px;}
#te_1{left:605px;top:371px;}
#tf_1{left:605px;top:277px;}
#tg_1{left:505px;top:331px;}
#th_1{left:516px;top:318px;}
#ti_1{left:505px;top:304px;}
#tj_1{left:106px;top:385px;}
#tk_1{left:95px;top:371px;}
#tl_1{left:95px;top:358px;}
#tm_1{left:95px;top:344px;}
#tn_1{left:616px;top:161px;letter-spacing:2px;}
#to_1{left:616px;top:134px;letter-spacing:2px;}
#tp_1{left:671px;top:94px;}
#tq_1{left:616px;top:102px;}
#tr_1{left:427px;top:129px;}
#ts_1{left:427px;top:102px;}
#tt_1{left:361px;top:129px;}
#tu_1{left:361px;top:102px;}
#tv_1{left:350px;top:264px;}
#tw_1{left:117px;top:304px;}
#tx_1{left:95px;top:318px;}
#ty_1{left:533px;top:69px;letter-spacing:-3px;}
#tz_1{left:106px;top:250px;}
#t10_1{left:117px;top:210px;}
#t11_1{left:95px;top:268px;letter-spacing:2px;}
#t12_1{left:95px;top:223px;}
#t13_1{left:195px;top:144px;letter-spacing:2px;}
#t14_1{left:95px;top:62px;}
#t15_1{left:95px;top:174px;letter-spacing:4px;}
#t16_1{left:95px;top:134px;}
#t17_1{left:95px;top:94px;letter-spacing:2px;}
#t18_1{left:350px;top:242px;letter-spacing:1px;}
#t19_1{left:361px;top:371px;}
#t1a_1{left:372px;top:344px;}
#t1b_1{left:361px;top:331px;}
#t1c_1{left:372px;top:318px;}
#t1d_1{left:361px;top:304px;}
#t1e_1{left:582px;top:161px;}
#t1f_1{left:290px;top:121px;}
#t1g_1{left:722px;top:542px;}
#t1h_1{left:162px;top:174px;}
#t1i_1{left:217px;top:174px;}
#t1j_1{left:472px;top:385px;}
#t1k_1{left:538px;top:385px;}
#t1l_1{left:350px;top:223px;}
#t1m_1{left:84px;top:502px;}
#t1n_1{left:109px;top:502px;}
#t1o_1{left:171px;top:502px;}
#t1p_1{left:197px;top:502px;}
#t1q_1{left:273px;top:502px;}
#t1r_1{left:328px;top:502px;}
#t1s_1{left:353px;top:502px;}
#t1t_1{left:422px;top:502px;}
#t1u_1{left:84px;top:519px;}
#t1v_1{left:120px;top:519px;}
#t1w_1{left:214px;top:519px;}
#t1x_1{left:243px;top:519px;}
#t1y_1{left:330px;top:519px;}
#t1z_1{left:358px;top:519px;}
#t20_1{left:401px;top:519px;}
#t21_1{left:459px;top:519px;}
#t22_1{left:84px;top:535px;}
#t23_1{left:152px;top:535px;}
#t24_1{left:235px;top:535px;}
#t25_1{left:267px;top:535px;}
#t26_1{left:313px;top:535px;}
#t27_1{left:374px;top:535px;}
#t28_1{left:405px;top:535px;}
#t29_1{left:459px;top:535px;}
#t2a_1{left:84px;top:552px;}
#t2b_1{left:84px;top:618px;}
#t2c_1{left:451px;top:659px;}
#t2d_1{left:533px;top:659px;}
#t2e_1{left:452px;top:895px;}
#t2f_1{left:535px;top:895px;}
#t2g_1{left:573px;top:895px;}
#t2h_1{left:263px;top:1155px;}
#t2i_1{left:347px;top:1155px;}
#t2j_1{left:620px;top:1175px;}
#t2k_1{left:264px;top:1190px;}
#t2l_1{left:382px;top:1190px;}
#t2m_1{left:252px;top:736px;}
#t2n_1{left:84px;top:644px;}
#t2o_1{left:84px;top:659px;}
#t2p_1{left:84px;top:673px;}
#t2q_1{left:199px;top:673px;}
#t2r_1{left:84px;top:689px;}
#t2s_1{left:84px;top:703px;}
#t2t_1{left:84px;top:720px;}
#t2u_1{left:122px;top:720px;}
#t2v_1{left:252px;top:735px;}
#t2w_1{left:84px;top:735px;}
#t2x_1{left:84px;top:750px;}
#t2y_1{left:84px;top:764px;}
#t2z_1{left:350px;top:764px;}
#t30_1{left:84px;top:1007px;}
#t31_1{left:99px;top:1007px;}
#t32_1{left:84px;top:1022px;}
#t33_1{left:84px;top:1038px;}
#t34_1{left:99px;top:1038px;}
#t35_1{left:494px;top:1038px;}
#t36_1{left:84px;top:1053px;}
#t37_1{left:84px;top:1077px;}
#t38_1{left:183px;top:1077px;}
#t39_1{left:84px;top:1088px;}
#t3a_1{left:84px;top:1100px;}
#t3b_1{left:122px;top:1100px;}
#t3c_1{left:84px;top:1114px;}
#t3d_1{left:84px;top:1128px;}
#t3e_1{left:84px;top:1141px;}
#t3f_1{left:84px;top:1155px;}
#t3g_1{left:84px;top:992px;}
#t3h_1{left:84px;top:779px;}
#t3i_1{left:122px;top:779px;}
#t3j_1{left:84px;top:794px;}
#t3k_1{left:84px;top:808px;}
#t3l_1{left:84px;top:825px;}
#t3m_1{left:150px;top:824px;}
#t3n_1{left:84px;top:840px;}
#t3o_1{left:84px;top:854px;}
#t3p_1{left:84px;top:867px;}
#t3q_1{left:84px;top:881px;}
#t3r_1{left:84px;top:895px;}
#t3s_1{left:84px;top:915px;}
#t3t_1{left:168px;top:915px;}
#t3u_1{left:84px;top:931px;}
#t3v_1{left:84px;top:944px;}
#t3w_1{left:84px;top:958px;}
#t3x_1{left:84px;top:976px;}
#t3y_1{left:147px;top:976px;}
#t3z_1{left:348px;top:976px;}
#t40_1{left:591px;top:735px;}
#t41_1{left:84px;top:1065px;}
#t42_1{left:84px;top:1175px;}
#t43_1{left:131px;top:1175px;}
#t44_1{left:429px;top:1175px;}
#t45_1{left:84px;top:1190px;}
#t46_1{left:628px;top:659px;}

.s3_1{
	FONT-SIZE: 103px;
	FONT-FAMILY: CMCJBC-CourierNew1;
	color: rgb(0,0,0);
}

.s1_1{
	FONT-SIZE: 73px;
	FONT-FAMILY: CMCJBC-CourierNew1;
	color: rgb(0,0,0);
}

.s6_1{
	FONT-SIZE: 48px;
	FONT-FAMILY: CMCJBC-CourierNew1;
	color: rgb(0,0,0);
}

.s7_1{
	FONT-SIZE: 30px;
	FONT-FAMILY: CMCJBC-CourierNew1;
	color: rgb(0,0,0);
}

.s9_1{
	FONT-SIZE: 30px;
	FONT-FAMILY: RCDBSJ-CourierNew-Bold1;
	color: rgb(0,0,0);
}

.s4_1{
	FONT-SIZE: 73px;
	FONT-FAMILY: DSPWLF-Arial1;
	color: rgb(0,0,0);
}

.s5_1{
	FONT-SIZE: 61px;
	FONT-FAMILY: DSPWLF-Arial1;
	color: rgb(0,0,0);
}

.s8_1{
	FONT-SIZE: 24px;
	FONT-FAMILY: CMCJBC-CourierNew1;
	color: rgb(0,0,0);
}

.s2_1{
	FONT-SIZE: 55px;
	FONT-FAMILY: DSPWLF-Arial1;
	color: rgb(0,0,0);
}

.v1_1{
-webkit-transform: scale(0.25, 0.50);
-ms-transform: scale(0.25, 0.50);
-moz-transform: scale(0.25, 0.50);
-o-transform: scale(0.25, 0.50);
}

.t.m1_1{
-webkit-transform:matrix(0,1,-1,0,0, 0) scale(0.25);
-ms-transform:matrix(0,1,-1,0,0, 0) scale(0.25);
-moz-transform:matrix(0,1,-1,0,0, 0) scale(0.25);
-o-transform:matrix(0,1,-1,0,0, 0) scale(0.25);
}

</style>
<!-- End inline CSS -->

<!-- Begin embedded font definitions -->
<style id="fonts1" type="text/css" >

@font-face {
	font-family: RCDBSJ-CourierNew-Bold1;
	src :url("./greyhound_asset/fonts/RCDBSJ-CourierNew-Bold.woff") format("woff");
}

@font-face {
	font-family: DSPWLF-Arial1;
	src :url("./greyhound_asset/fonts/DSPWLF-Arial.woff") format("woff");
}
@font-face {
	font-family: CMCJBC-CourierNew1;
	src :url("./greyhound_asset/fonts/CMCJBC-CourierNew.woff") format("woff");
}

</style>
<!-- End embedded font definitions -->

<!-- Begin text definitions (Positioned/styled in CSS) -->
<div id="t1_1" class="t s1_1">----------------------------------------</div>
<div id="t2_1" class="t s1_1">0004500</div>
<div id="t3_1" class="t s1_1">001 01 29  14086162 9</div>
<div id="t4_1" class="t s1_1">TINTERNET502</div>
<div id="t5_1" class="t s1_1">17Jul15 07:52a</div>
<div id="t6_1" class="t s1_1">01508  DALLAS INTER </div>
<div id="t7_1" class="t s1_1">NBTA 0043</div>
<div id="t8_1" class="t s1_1">01 OF 01</div>
<div id="t9_1" class="t s1_1">COUPON</div>
<div id="ta_1" class="t s1_1">MILES:</div>
<div id="tb_1" class="t v1_1 s2_1"><?php echo $boarding;?></div>
<div id="tc_1" class="t s1_1">TARIFF:  MACP</div>
<div id="td_1" class="t s1_1">TKT DEST:<?php echo $destination;?></div>
<div id="te_1" class="t s1_1">TKT ORIG:<?php echo $origin;?></div>
<div id="tf_1" class="t s1_1">CONF#: 6242122101</div>
<div id="tg_1" class="t s1_1"><?php echo $price;?></div>
<div id="th_1" class="t s1_1">$0.00</div>
<div id="ti_1" class="t s1_1">$<?php echo $price;?></div>
<div id="tj_1" class="t s1_1">047</div>
<div id="tk_1" class="t s1_1">SOLD AT: 01508</div>
<div id="tl_1" class="t s1_1">17Jul15 07:52a</div>
<div id="tm_1" class="t s1_1">CONF#: 6242122101</div>
<div id="tn_1" class="t v1_1 s2_1">ADULT</div>
<div id="to_1" class="t v1_1 s2_1">SCHED 0277</div>
<div id="tp_1" class="t v1_1 s2_1"><?php echo"{$date1}{$date2}{$date3}";?> <?php echo"{$time}{$ampm}";?></div>
<div id="tq_1" class="t s1_1">DEP:</div>
<div id="tr_1" class="t s1_1"><?php echo $destination;?></div>
<div id="ts_1" class="t s1_1"><?php echo $origin;?></div>
<div id="tt_1" class="t s1_1">TO:</div>
<div id="tu_1" class="t s1_1">FROM:</div>
<div id="tv_1" class="t s1_1">----------------------------------------</div>
<div id="tw_1" class="t s1_1">TKT DEST</div>
<div id="tx_1" class="t s1_1"><?php echo $destination;?></div>
<div id="ty_1" class="t s3_1">GREYHOUND LINES, INC.</div>
<div id="tz_1" class="t s1_1">*COUPON DEST*</div>
<div id="t10_1" class="t s1_1">COUPON ORIG</div>
<div id="t11_1" class="t v1_1 s2_1"><?php echo $coupon_destination;?></div>
<div id="t12_1" class="t s1_1"><?php echo $coupon_origin;?></div>
<div id="t13_1" class="t s4_1"><?php echo"{$time}{$ampm}";?></div>
<div id="t14_1" class="t s1_1">BOARDING #:</div>
<div id="t15_1" class="t v1_1 s2_1">SCHD:</div>
<div id="t16_1" class="t v1_1 s2_1"><?php echo"{$date1}{$date2}{$date3}";?></div>
<div id="t17_1" class="t v1_1 s2_1"><?php echo $ticketname;?></div>
<div id="t18_1" class="t v1_1 s2_1">TICKET FOR SCHEDULE 0277 / <?php echo"{$date1}{$date2}{$date3}";?></div>
<div id="t19_1" class="t s1_1">MC/MC</div>
<div id="t1a_1" class="t s1_1"><? echo $final_card ?></div>
<div id="t1b_1" class="t s1_1">TOTAL:</div>
<div id="t1c_1" class="t s1_1">TAX</div>
<div id="t1d_1" class="t s1_1">FARE</div>
<div id="t1e_1" class="t v1_1 s2_1">OW</div>
<div id="t1f_1" class="t m1_1 s5_1">0010129140861629</div>
<div id="t1g_1" class="t s5_1">0010129140861629</div>
<div id="t1h_1" class="t v1_1 s2_1">GLI</div>
<div id="t1i_1" class="t v1_1 s2_1">0277</div>
<div id="t1j_1" class="t s1_1">181</div>
<div id="t1k_1" class="t s1_1">181</div>
<div id="t1l_1" class="t s1_1">NO REFUND,SUBJECT TO A FEE,IF VALID FOR EXCHANGE</div>
<div id="t1m_1" class="t s6_1">NO</div>
<div id="t1n_1" class="t s6_1">REFUNDS</div>
<div id="t1o_1" class="t s6_1">OR</div>
<div id="t1p_1" class="t s6_1">EXCHANGES</div>
<div id="t1q_1" class="t s6_1">EXCEPT</div>
<div id="t1r_1" class="t s6_1">AS</div>
<div id="t1s_1" class="t s6_1">PROVIDED</div>
<div id="t1t_1" class="t s6_1">HEREIN.</div>
<div id="t1u_1" class="t s6_1">ANY</div>
<div id="t1v_1" class="t s6_1">DUPLICATION</div>
<div id="t1w_1" class="t s6_1">OR</div>
<div id="t1x_1" class="t s6_1">ALTERATION</div>
<div id="t1y_1" class="t s6_1">OF</div>
<div id="t1z_1" class="t s6_1">THIS</div>
<div id="t20_1" class="t s6_1">TICKET</div>
<div id="t21_1" class="t s6_1">IS</div>
<div id="t22_1" class="t s6_1">STRICTLY</div>
<div id="t23_1" class="t s6_1">PROHIBITED</div>
<div id="t24_1" class="t s6_1">AND</div>
<div id="t25_1" class="t s6_1">SHALL</div>
<div id="t26_1" class="t s6_1">SUBJECT</div>
<div id="t27_1" class="t s6_1">THE</div>
<div id="t28_1" class="t s6_1">BEARER</div>
<div id="t29_1" class="t s6_1">TO</div>
<div id="t2a_1" class="t s6_1">PROSECUTION.</div>
<div id="t2b_1" class="t s1_1">------------------PLEASE FOLD HERE. DO NOT CUT or TEAR------------------</div>
<div id="t2c_1" class="t s7_1">www.greyhound.com</div>
<div id="t2d_1" class="t s7_1">and www.greyhound.ca</div>
<div id="t2e_1" class="t s7_1">www.greyhound.com</div>
<div id="t2f_1" class="t s7_1">or (CA)</div>
<div id="t2g_1" class="t s7_1">www.greyhound.ca</div>
<div id="t2h_1" class="t s7_1">www.greyhound.com</div>
<div id="t2i_1" class="t s7_1">or (CA) www.greyhound.ca</div>
<div id="t2j_1" class="t s7_1">ifsr@greyhound.com</div>
<div id="t2k_1" class="t s7_1">canada.info@greyhound.ca</div>
<div id="t2l_1" class="t s7_1">or by phone at (800) 661-TRIP (8747).</div>
<div id="t2m_1" class="t s8_1">___________________________________________________________________________________________</div>
<div id="t2n_1" class="t s9_1">TERMS AND CONDITIONS OF CARRIAGE &amp; NOTICE TO SHIPPERS</div>
<div id="t2o_1" class="t s7_1">All customers agree to all terms and conditions of travel and shipping found at</div>
<div id="t2p_1" class="t s9_1">LIMITATION OF LIABILITY</div>
<div id="t2q_1" class="t s7_1">Greyhound Lines, Inc. (“Greyhound” or “Carrier”) is responsible only for transportation on its own lines in accordance with applicable tariffs and</div>
<div id="t2r_1" class="t s7_1">limitations and assumes no responsibility for any acts or omissions of others, including interline partners, except as imposed by law. In no event shall Carrier be liable</div>
<div id="t2s_1" class="t s7_1">for consequential or incidental damages for loss, damage or delay, including weather delays.</div>
<div id="t2t_1" class="t s9_1">TICKETS</div>
<div id="t2u_1" class="t s7_1">Tickets are limited as endorsed and are not transferable. The unauthorized resale of tickets is strictly prohibited and will be prosecuted. No reservations are accepted</div>
<div id="t2v_1" class="t s7_1">Tickets are valid ONLY for the schedule,date and time for which purchased</div>
<div id="t2w_1" class="t s7_1">unless expressly stated otherwise.</div>
<div id="t2x_1" class="t s7_1">year from the date of sale, provided that an exchange or refund request must be made prior to the original travel date; otherwise, the ticket will be null and void.</div>
<div id="t2y_1" class="t s7_1">Greyhound is not responsible for lost or stolen tickets.</div>
<div id="t2z_1" class="t s7_1">Tickets sales are limited to 5 per passenger.</div>
<div id="t30_1" class="t s9_1">US:</div>
<div id="t31_1" class="t s7_1">Student and Veterans Advantage discount fares require a membership and Senior citizen’s fares require proof of age. Military discounts require a valid</div>
<div id="t32_1" class="t s7_1">United States military ID presented upon request.</div>
<div id="t33_1" class="t s9_1">CA:</div>
<div id="t34_1" class="t s7_1">Student discount fares require an International Student Identity Card or Student ID.</div>
<div id="t35_1" class="t s7_1">Military discounts require a valid Military ID</div>
<div id="t36_1" class="t s7_1">, retired Military ID, Veteran of Canada card or Club XTra card for military dependents.</div>
<div id="t37_1" class="t s9_1">INTERNATIONAL TRAVEL</div>
<div id="t38_1" class="t s7_1">Passengers must have proper travel documents which may be checked at or prior to boarding an international schedule</div>
<div id="t39_1" class="t s7_1">and which will be required for entry into another country.</div>
<div id="t3a_1" class="t s9_1">BAGGAGE</div>
<div id="t3b_1" class="t s7_1">Liability for baggage is limited by applicable tariff. All baggage must be claimed promptly upon arrival. Storage charges apply for late claim of baggage.</div>
<div id="t3c_1" class="t s7_1">Liability for lost or damaged interstate checked baggage is limited to actual value not to exceed $250 per Adult Fare or $125 per Child Fare. Certain articles are not</div>
<div id="t3d_1" class="t s7_1">accepted for carriage. There is no liability for unchecked baggage. Baggage must be properly identified including name and address. Baggage claims must be supported by</div>
<div id="t3e_1" class="t s7_1">claim check, identification, ticket receipt and excess value declaration (if any). Carrier may open and inspect baggage. Ask an agent for value limitations on intrastate</div>
<div id="t3f_1" class="t s7_1">baggage. All limitations found on (US)</div>
<div id="t3g_1" class="t s7_1">displayed as an option.</div>
<div id="t3h_1" class="t s9_1">TRAVEL</div>
<div id="t3i_1" class="t s7_1">Departure dates and times may change. Carrier is not responsible for delays caused by breakdowns, road conditions, weather or other conditions beyond</div>
<div id="t3j_1" class="t s7_1">Carrier’s reasonable control. With the exception of Priority Seating, Express Service and accommodations for disabled and elderly passengers, seating is on a first</div>
<div id="t3k_1" class="t s7_1">come/first served basis and is without regard to race, color, creed, national origin or any other protected characteristic.</div>
<div id="t3l_1" class="t s9_1">FARES AND FEES</div>
<div id="t3m_1" class="t s7_1">Fares are valid ONLY for the schedule, date and time for which quoted. Discount fares are subject to date, time and schedule restrictions. Fares</div>
<div id="t3n_1" class="t s7_1">may be subject to additional charges including taxes, fees and carrier price differences. For non-refundable and advance purchase tickets, departure dates and times may be</div>
<div id="t3o_1" class="t s7_1">changed for a fee provided that advance purchase requirements are not violated (including holiday blackout restrictions) and all transactions and travel are completed</div>
<div id="t3p_1" class="t s7_1">within a year of the original purchase date. Requests for exchanges must be made prior to the original travel date; otherwise, the ticket will be null and void. Fares are</div>
<div id="t3q_1" class="t s7_1">payable in local currency only unless stated otherwise. Fares are subject to change and may be higher during holiday and peak periods. More information on specific fare</div>
<div id="t3r_1" class="t s7_1">classes and restrictions can be found at the Greyhound ticket office and on (US)</div>
<div id="t3s_1" class="t s9_1">REFUNDS &amp; UPGRADES</div>
<div id="t3t_1" class="t s7_1">For refundable tickets only, unused one-way and round-trip walk-up fare tickets have a refund value equal to the fare paid, unless otherwise expressly</div>
<div id="t3u_1" class="t s7_1">stated on the ticket. Advance purchase discount fares are non-refundable and may be upgraded to a walk-up fare for a charge of $20 per transaction plus the difference</div>
<div id="t3v_1" class="t s7_1">between the advance purchase fare and walk-up fare; provided, however, that if the walk-up fare is less than the advance purchase fare, no refund will be given. Origin</div>
<div id="t3w_1" class="t s7_1">and/or destination may NOT be changed via upgrade.</div>
<div id="t3x_1" class="t s9_1">SPECIAL FARES</div>
<div id="t3y_1" class="t s7_1">Special Fares are subject to availability.</div>
<div id="t3z_1" class="t s7_1">If quoted fare price is no longer available at the time of final booking, the current price will be</div>
<div id="t40_1" class="t s7_1">. All unrestricted one-way and round trip tickets are good for one</div>
<div id="t41_1" class="t s9_1">SMOKING IS PROHIBITED</div>
<div id="t42_1" class="t s9_1">CONTACT US</div>
<div id="t43_1" class="t s7_1">For questions, please contact the Fare and Schedule Department.</div>
<div id="t44_1" class="t s7_1">An agent may be reached via email at (US)</div>
<div id="t45_1" class="t s7_1">or by phone at (800) 231-2222 and (CA)</div>
<div id="t46_1" class="t s7_1">as applicable.</div>

<!-- End text definitions -->

<!-- Begin page background -->
<div id="pg1Overlay" style="width:100%; height:100%; position:absolute; z-index:1; background-color:rgba(0,0,0,0); -webkit-user-select: none;"></div>
<div id="pg1"><object width="909" height="1286" data="greyhound_asset/1.svg" type="image/svg+xml" id="pdf1" style="width:909px; height:1286px; background-color:white; -moz-transform:scale(1); z-index: 0;"></object></div>
<!-- End page background -->

<!-- Begin page loading JS -->
<script id="ld1" type="text/javascript">

var isIE = false;
var f1 = [['t3_1',930],['t5_1',619],['t6_1',841],['t7_1',398],['t8_1',354],['tb_1',74],['tc_1',575],['td_1',1063],['te_1',1063],['tf_1',752],['tk_1',619],['tl_1',619],['tm_1',752],['tn_1',210],['to_1',429],['tp_1',606],['tr_1',664],['ts_1',664],['tw_1',354],['tx_1',664],['ty_1',1223],['tz_1',575],['t10_1',487],['t11_1',656],['t12_1',664],['t13_1',262],['t14_1',487],['t16_1',296],['t17_1',656],['t18_1',1404],['t1h_1',103],['t1i_1',163],['t1l_1',2126],['t2b_1',3168],['t2d_1',360],['t2f_1',128],['t2i_1',433],['t2l_1',678],['t2n_1',971],['t2o_1',1448],['t2p_1',421],['t2q_1',2677],['t2r_1',3117],['t2s_1',1686],['t2u_1',3080],['t2v_1',1338],['t2w_1',623],['t2x_1',3007],['t2y_1',1026],['t2z_1',825],['t31_1',2750],['t32_1',898],['t34_1',1540],['t35_1',843],['t36_1',1613],['t37_1',366],['t38_1',2108],['t39_1',1063],['t3b_1',2823],['t3c_1',3043],['t3d_1',3062],['t3e_1',3098],['t3f_1',696],['t3g_1',421],['t3i_1',2732],['t3j_1',2988],['t3k_1',2255],['t3l_1',256],['t3m_1',2640],['t3n_1',3135],['t3o_1',3043],['t3p_1',3117],['t3q_1',3080],['t3r_1',1466],['t3s_1',330],['t3t_1',2750],['t3u_1',3043],['t3v_1',3062],['t3w_1',916],['t3x_1',238],['t3y_1',770],['t3z_1',1815],['t40_1',1210],['t41_1',385],['t42_1',183],['t43_1',1155],['t44_1',751],['t45_1',696],['t46_1',256]];
function load1(){
	var timeout = 100;
	if (navigator.userAgent.match(/iPhone|iPad|iPod|Android/i)) timeout = 500;
	setTimeout(function() {adjustWordSpacing(f1);},timeout);
}
</script>
<!--[if lt IE 9]><script type="text/javascript">
isIE = true;

var divCount = 151;
for (var i = 1; i < divCount; i++) {
	var div = document.getElementById("t" + i.toString(36) + "_1");
	div.style.top = (div.offsetTop * 4) + "px";
	div.style.left = (div.offsetLeft * 4) + "px";
	div.style.zoom = "25%";}
</script><![endif]-->
<!-- End page loading JS -->

</div>
</body>
</html>
