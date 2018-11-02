<?php
session_start();

//echo "RB";
include_once("config/config.php");
include_once("config/database.php");
$ob= new database();



?>
<?php 
	
	
	
if(isset($_REQUEST['submitlogin'])){

echo $user=$_REQUEST['user_id'];
$pass=$_REQUEST['password'];
//$pass=base64_encode($pass);
 
//include_once("config/fun.php");
 $checkUser=$ob->get_rec("user_reg","*","moblie='".$user."' AND password='".$pass."'");
//$checkUser=cek($user,$pass);	

if($checkUser){
 
	 $_SESSION['userid']=$checkUser->user_id;
	 $_SESSION['user']=$checkUser->code;
	 	 $_SESSION['org_club']=$checkUser->org_club;
	  $_SESSION['cat']=$checkUser->category;
	 $_SESSION['ps']=$checkUser->ps;
	 echo  $_SESSION['id']=$checkUser->id;
	// die();
	 $_SESSION['code']=$checkUser->code;
	//$pair="date_time='".$curtime."'";	
	//$ob->db_update("user","$pair","user_id='".$user."'");	
	//echo "ok";
	
	
	/* if(($_SESSION['code']=='22') || ($_SESSION['code']=='23') || ($_SESSION['code']=='24'))
	 {
	echo '<script type="text/javascript" language="javascript">window.location="indexes.php?action=dashboard";</script>';
	
	}
	
	else
	{*/
	echo '<script type="text/javascript" language="javascript">window.location="indexes.php?action=dashboard";</script>';
	
	/*}*/

}
else{
	
	echo '<script type="text/javascript" language="javascript">window.location="";</script>';
}

	
}



?>