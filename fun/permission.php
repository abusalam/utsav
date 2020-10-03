<?php 
session_start();
if(! isset($_SESSION['id'])) {
	exit();
}
include_once("../config/config.php");
include_once("../config/database.php");
$ob = new database();
$sendsms=0;
for($i=1;$i<=$_REQUEST['loop'];$i++) {
	$per_date=$_REQUEST[fld].'_date';
	if($_REQUEST[p.$i]=='') {
 		$pair = "$_REQUEST[fld]='".$_REQUEST[p.$i]."',$per_date='',submission_date=NOW()";
	} else {
		$pair="$_REQUEST[fld]='".$_REQUEST[p.$i]."',$per_date=NOW(),submission_date=NOW()";
	}
	$sendsms++;
	$update=$ob->db_update("application","$pair","`id`='".$_REQUEST[nid.$i]."'");
	if($_SESSION['org_club']=='SDO'){
		$mob_no=$_REQUEST[mob_no.$i];
		$Message='Your application for puja has been approved by '.$_SESSION['cat']." Department";
		include_once("sms/smsgw_cdac.php");
		sendSingleSMS($username,$encryp_password,$senderid,$Message,$mob_no,$deptSecureKey);	
	} else {
		if($_REQUEST[p.$i]!='') {
			$mob_no=$_REQUEST[mob_no.$i];
			$Message='Your application has been disposed by '.$_SESSION['cat']." Department";
			include_once("sms/smsgw_cdac.php");
			sendSingleSMS($username,$encryp_password,$senderid,$Message,$mob_no,$deptSecureKey);
		}		
	}
}
echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=pendingapp";</script>';
