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
$r=rand(111111,999999);
$_SESSION['otp']=$r;
$_SESSION['mob']=$_REQUEST['mobile'];
$_SESSION['org']=$_REQUEST['org'];
$fetchcdata=$ob->get_rec("user_reg","*","mobile='".$_REQUEST['mobile']."'");
if($fetchcdata)
{
$fetchcdata->mobile;
echo '<script type="text/javascript" language="javascript">window.location="../index.php?error=true";</script>';
}
else
{


$field="org_club,ps,email,mobile,otp,pwd,status,cur_date";	
$value="'".$_REQUEST['org']."','".$_REQUEST['ps']."','".$_REQUEST['email']."','".$_REQUEST['mobile']."','".$r."','".$_REQUEST['mobile']."','Y',NOW()";
	 

	
	$insert=$ob->db_insert("user_reg","$field","$value");	
	
    $liid=mysql_insert_id();
    $_SESSION['lid']=$_REQUEST['$liid'];	 
	$sql="SELECT `mobile`,`otp` FROM user_reg where id=$liid";
	// $dynamic=date("d-m-Y H:i:sa");	

	$rs=mysql_query($sql);
	while($row_=mysql_fetch_array($rs))
	{
	    $_SESSION['lid']=$liid;
	    $_SESSION['mobile']=$mobile;
	    $mob_no=$row_['mobile'];
		$otp=$row_['otp'];
		$DestinationAddress = $mob_no;
		//echo $Message=$row_['phone2'];
		$exp=explode("/",$row_['phone2']);
		$d=strtotime("+10 min");
		$Message='Your OTP is:'.$otp . ' Valid Upto: ' . date("d/m/Y h:i A", $d);
		// echo "RB".$Message=$row_['phone2'].'-'.$row_['phone2'].'-'.$row_['Aa']."<br>";
		//echo $mob_no=$row_['phone'];
		//echo $Message=$row_['message'];
		//echo "RB".$Message=$row_['gp'].'-'.$row_['ITa'].'-'.$row_['Aa']."<br>";
			
		include_once("sms/smsgw_cdac.php");
        sendOtpSMS($username,$encryp_password,$senderid,$Message,$DestinationAddress,$deptSecureKey);			
	}
	if($insert){
	
		echo '<script type="text/javascript" language="javascript">window.location="../otp.php?action=otp&edit=successfull";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="../otp.php?action=otp&update=fail";</script>';
	}
	
	}
	?>