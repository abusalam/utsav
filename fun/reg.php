<?php 
session_start();
//echo "RB".$re=$_REQUEST['target']-$_REQUEST['achievement'];
include_once("../config/config.php");
include_once("../config/database.php");
$ob= new database();
 $re=$_REQUEST['target']-$_REQUEST['achievement'];
$date=date_create(date("Y-m-d"));
date_add($date,date_interval_create_from_date_string("1 days"));
$cur=date_format($date,"Y-m-d");
if(isset($_REQUEST['regsubmit'])){

  $id=$_REQUEST['newid'];

 $mobile=$_REQUEST['mob'];
 $password=$_REQUEST['password'];
 $otp=$_REQUEST['otp'];



//include_once("config/fun.php");
 //echo $checkUser=$ob->get_rec("user_reg","*","mobile='".$mobile."' AND otp='".$otp."' AND id='".$nid."'");
 
 
$checkUser=$ob->get_rec("user_reg","*","id='".$id."' and `mobile`='".$mobile."'");
 
//$checkUser=$ob->get_rec("user_reg","*","id='".$id."' and `otp`='".$otp."' and `mobile`='".$mobile."'");
//$checkUser=cek($user,$pass);	

if($checkUser){
 
	
	
	$pair="pwd='".$password."',modified=NOW()";
//$update=$ob->db_update("user_reg","$pair","mobile='".$mobile."' AND otp='".$otp."' AND id='".$nid."'");
$update=$ob->db_update("user_reg","$pair","id='".$id."'");
	if($update){
	
		echo '<script type="text/javascript" language="javascript">window.location="../index.php?action=otp&report=successfull";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="../index.php?action=otp&update=fail";</script>';
	}
	
	}
	else
	{
	echo '<script type="text/javascript" language="javascript">window.location="../otp.php?action=otp&orperror=fail";</script>';
	
	}
	//die();
	
	 
 
	
	
	}
	?>