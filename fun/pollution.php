<?php 
session_start();
if(! isset($_SESSION['id'])) {
	exit();
}
//echo "RB".$re=$_REQUEST['target']-$_REQUEST['achievement'];
include_once("../config/config.php");
include_once("../config/database.php");
$ob= new database();
 
 
 $checkrecs=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'");

if($checkrecs){ 

//echo "A".$_REQUEST['org'];
$pair="polution_agree='".$_REQUEST['polagree']."',






submission_date=NOW()";
//$update=$ob->db_update("user_reg","$pair","mobile='".$mobile."' AND otp='".$otp."' AND id='".$nid."'");
$update=$ob->db_update("application","$pair","id='".$_REQUEST['nid']."'");
if($update){
	
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=municipality";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=pollution";</script>';
	}	


}
else {
 
 

 
 
$r=rand(111111,999999);
$field="polution_agree,
	
	submission_date
	
	
	";	
 

	 $value="'".$_REQUEST['polagree']."',NOW()";
	 

	
	
	$insert=$ob->db_insert("application","$field","$value");	
	



	 
 
	}
	
	
	if($insert){
	
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=municipality";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=pollution";</script>';
	}
	
	?>