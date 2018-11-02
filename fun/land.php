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
$pair="land_of='".$_REQUEST['landtype']."',
pandal_area='".$_REQUEST['parea']."',
land_owner='".$_REQUEST['landowner']."',
land_noc='".$_REQUEST['lnoc']."',


submission_date=NOW()

	
	";	
 

	 
$update=$ob->db_update("application","$pair","id='".$_REQUEST['nid']."'");
	
if($update){
	
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=power";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=land";</script>';
	}

}
else {
 
 

 
 
$r=rand(111111,999999);
$field="
	
	land_of,
	pandal_area,
	land_owner,
	land_noc,
	
	submission_date
	
	
	";	
 

	 $value="'".$_REQUEST['landtype']."','".$_REQUEST['parea']."','".$_REQUEST['landowner']."','".$_REQUEST['lnoc']."',NOW()";
	 

	
	
	$insert=$ob->db_insert("application","$field","$value");	
	



	 
 
	}
	

	if($insert){
	
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=power";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=land";</script>';
	}
	
	?>