<!--<div style="background:#999900; height:10px; width:680px" >
</div>-->
<?php 
$ex=explode("=",$_SERVER['REQUEST_URI']);

?>
<!--#00a65a-->
<span ><a href="indexes.php?action=organisers" <?php if($ex[1]=='organisers') { ?> class="myButton_ative" <?php } else { ?>  class="myButton1" <?php  } ?>id="" ><span style="padding:4px; font-size:13px; font-weight:100; ">Organisers</span></a></span>
						<span><a href="indexes.php?action=land" <?php if($ex[1]=='land') { ?> class="myButton_ative" <?php } else { ?>  class="myButton1" <?php  } ?> ><span style="padding:2px; font-size:13px; font-weight:100;  ">Site/Land</span></a></span>
						<span><a href="indexes.php?action=power"  <?php if($ex[1]=='power') { ?> class="myButton_ative" <?php } else { ?>  class="myButton1" <?php  } ?>  ><span style="padding:2px; font-size:13px; font-weight:100;">Power Supply</span></a></span>
						<span><a href="indexes.php?action=fire" <?php if($ex[1]=='fire') { ?> class="myButton_ative" <?php } else { ?>  class="myButton1" <?php  } ?>  ><span style="padding:2px; font-size:13px; font-weight:100; ">Fire</span></a></span>
						<span><a href="indexes.php?action=pollution" <?php if($ex[1]=='pollution') { ?> class="myButton_ative" <?php } else { ?>  class="myButton1" <?php  } ?> ><span style="padding:2px; font-size:13px; font-weight:100; ">Pollution</span></a></span>
						<span><a href="indexes.php?action=municipality" <?php if($ex[1]=='municipality') { ?> class="myButton_ative" <?php } else { ?>  class="myButton1" <?php  } ?>  ><span style="padding:2px; font-size:13px; font-weight:100; " >Municipality</span></a></span>
						<span><a href="indexes.php?action=police" <?php if($ex[1]=='police') { ?> class="myButton_ative" <?php } else { ?>  class="myButton1" <?php  } ?> ><span style="padding:2px;; font-size:13px; font-weight:100;">Police</span></a></span>
	<span><a href="indexes.php?action=upload" <?php if($ex[1]=='upload') { ?> class="myButton_ative" <?php } else { ?>  class="myButton1" <?php  } ?> ><span style="padding:2px; font-size:13px; font-weight:100; ">Upload</span></a></span>					
			
			<span><a href="indexes.php?action=checklist" <?php if($ex[1]=='checklist') { ?> class="myButton_ative" <?php } else { ?>  class="myButton1" <?php  } ?> ><span style="padding:2px; font-size:13px; font-weight:100; ">Checklist</span></a></span>	
				<?php if ($_SESSION['cat']=='') {
				
				$checkUser=$ob->get_rec("application","*","`user_id`='".$_SESSION['id']."'");
//$checkUser=cek($user,$pass);	

if($checkUser){


				?>
			<span><a href="indexes.php?action=preview&sendvalue=<?php  echo base64_encode ('id.'.$checkUser->id.'.val'); ?>"class="myButton1"  target="_blank"><span style="padding:2px; font-size:13px; font-weight:100; ">Preview</span></a></span>
			<?php  } else  {  ?>
				<span><a href="indexes.php?action=preview&sendvalue=<?php  echo base64_encode ('id.'.$checkUser->id.'.val'); ?>"class="myButton1"  target="_blank"><span style="padding:2px; font-size:13px; font-weight:100; ">Preview</span></a></span>
				<?php  }  } ?>
			
			
			<!--<div style="background:#999900; height:10px; width:680px" >
</div>-->

<style>
.myButton1 {
	-moz-box-shadow:inset 0px 1px 0px 0px #fff6af;
	-webkit-box-shadow:inset 0px 1px 0px 0px #fff6af;
	box-shadow:inset 0px 1px 0px 0px #fff6af;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffec64), color-stop(1, #ffab23));
	background:-moz-linear-gradient(top, #ffec64 5%, #ffab23 100%);
	background:-webkit-linear-gradient(top, #ffec64 5%, #ffab23 100%);
	background:-o-linear-gradient(top, #ffec64 5%, #ffab23 100%);
	background:-ms-linear-gradient(top, #ffec64 5%, #ffab23 100%);
	background:linear-gradient(to bottom, #ffec64 5%, #ffab23 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffec64', endColorstr='#ffab23',GradientType=0);
	background-color:#ffec64;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #ffaa22;
	display:inline-block;
	cursor:pointer;
	color:#333333;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:4px 10px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffee66;
}
.myButton1:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffab23), color-stop(1, #ffec64));
	background:-moz-linear-gradient(top, #ffab23 5%, #ffec64 100%);
	background:-webkit-linear-gradient(top, #ffab23 5%, #ffec64 100%);
	background:-o-linear-gradient(top, #ffab23 5%, #ffec64 100%);
	background:-ms-linear-gradient(top, #ffab23 5%, #ffec64 100%);
	background:linear-gradient(to bottom, #ffab23 5%, #ffec64 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffab23', endColorstr='#ffec64',GradientType=0);
	background-color:#ffab23;
}
.myButton1:active {
	position:relative;
	top:1px;
	
}

</style>

<style>
.myButton {
	-moz-box-shadow: 0px 10px 14px -7px #276873;
	-webkit-box-shadow: 0px 10px 14px -7px #276873;
	box-shadow: 0px 10px 14px -7px #276873;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #599bb3), color-stop(1, #408c99));
	background:-moz-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-webkit-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-o-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-ms-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#599bb3', endColorstr='#408c99',GradientType=0);
	background-color:#599bb3;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:7px 10px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #408c99), color-stop(1, #599bb3));
	background:-moz-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-webkit-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-o-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-ms-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:linear-gradient(to bottom, #408c99 5%, #599bb3 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#408c99', endColorstr='#599bb3',GradientType=0);
	background-color:#408c99;
}
.myButton:active {
	position:relative;
	top:1px;
	
}
/*.a:active { 
    background-color: #0033FF;
}
#a:active { 
    background-color: #0033FF;
}*/



.myButton_ative {
	-moz-box-shadow: 0px 1px 0px 0px #f2fadc;
	-webkit-box-shadow: 0px 1px 0px 0px #f2fadc;
	box-shadow: 0px 1px 0px 0px #f2fadc;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #dbe6c4), color-stop(1, #9ba892));
	background:-moz-linear-gradient(top, #dbe6c4 5%, #9ba892 100%);
	background:-webkit-linear-gradient(top, #dbe6c4 5%, #9ba892 100%);
	background:-o-linear-gradient(top, #dbe6c4 5%, #9ba892 100%);
	background:-ms-linear-gradient(top, #dbe6c4 5%, #9ba892 100%);
	background:linear-gradient(to bottom, #dbe6c4 5%, #9ba892 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dbe6c4', endColorstr='#9ba892',GradientType=0);
	background-color:#dbe6c4;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #b2b8ad;
	display:inline-block;
	cursor:pointer;
	color:#0000CC;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:4px 10px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ced9bf;
}
.myButton_ative:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #9ba892), color-stop(1, #dbe6c4));
	background:-moz-linear-gradient(top, #9ba892 5%, #dbe6c4 100%);
	background:-webkit-linear-gradient(top, #9ba892 5%, #dbe6c4 100%);
	background:-o-linear-gradient(top, #9ba892 5%, #dbe6c4 100%);
	background:-ms-linear-gradient(top, #9ba892 5%, #dbe6c4 100%);
	background:linear-gradient(to bottom, #9ba892 5%, #dbe6c4 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#9ba892', endColorstr='#dbe6c4',GradientType=0);
	background-color:#9ba892;
}
.myButton_ative:active {
	position:relative;
	top:1px;
}

</style>