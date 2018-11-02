<?php 
//error_reporting(E_ALL);
//ini_set('display_errors','On');
session_start();
if(! isset($_SESSION['id'])) {
	echo 'Not Allowed';
	exit();
}
//echo "RB".$re=$_REQUEST['target']-$_REQUEST['achievement'];
include_once("../config/config.php");
include_once("../config/database.php");
$ob= new database();
 
 
 $checkrecs=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'");

if($checkrecs){ 

//echo "A".$_REQUEST['org'];
$pair="org_name='".$_REQUEST['org']."',
org_mobile='".$_REQUEST['orgmob']."',
org_email='".$_REQUEST['orgemail']."',
org_address='".$_REQUEST['orgadd']."',
sec_name='".$_REQUEST['secname']."',
sec_mobile='".$_REQUEST['secmob']."',
sec_email='".$_REQUEST['secmail']."',
sec_address='".$_REQUEST['secadd']."',
puja_loc='".$_REQUEST['pandaladd']."',
puja_ward_no='".$_REQUEST['wardno']."',
puja_holding_no='".$_REQUEST['holdingno']."',
puja_from='".$_REQUEST['from']."',
puja_to='".$_REQUEST['to']."',






submission_date=NOW()";
//$update=$ob->db_update("user_reg","$pair","mobile='".$mobile."' AND otp='".$otp."' AND id='".$nid."'");
$update=$ob->db_update("application","$pair","id='".$_REQUEST['nid']."'");
	
if($update){
	
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=land";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=organisers";</script>';
	}
	

}
else {
 
 

 
 
$r=rand(111111,999999);
$field="user_id,
	ps,
	org_name,
	org_mobile,
	org_email,
	org_address,
	sec_name,
	sec_mobile,
	sec_email,
	sec_address,
	puja_loc,
	puja_ward_no,
	puja_holding_no,
	puja_from,
	puja_to,
	submission_date
	
	
	";	
 

	 $value="'".$_SESSION['id']."','".$_SESSION['ps']."','".$_REQUEST['org']."','".$_REQUEST['orgmob']."','".$_REQUEST['orgemail']."','".$_REQUEST['orgadd']."','".$_REQUEST['secname']."','".$_REQUEST['secmob']."','".$_REQUEST['secmail']."','".$_REQUEST['secadd']."','".$_REQUEST['pandaladd']."','".$_REQUEST['wardno']."','".$_REQUEST['holdingno']."','".$_REQUEST['from']."','".$_REQUEST['to']."',NOW()";
	 

	
	
	$insert=$ob->db_insert("application","$field","$value");	
	



	 
 
	}
	
	
	if($insert){
	
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=land";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=organisers";</script>';
	}
	
	?>