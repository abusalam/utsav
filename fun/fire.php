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
$pair="fir_pandal_area='".$_REQUEST['pandalarea']."',
fir_pandal_height='".$_REQUEST['hpandal']."',
fir_persn_present='".$_REQUEST['noinpandal']."',
fir_material_cons_pandal='".$_REQUEST['material']."',
fir_agree='".$_REQUEST['fireagree']."',

submission_date=NOW()



	
	";	
 



	

 

	 
$update=$ob->db_update("application","$pair","id='".$_REQUEST['nid']."'");
	
if($update){
	
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=pollution";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=fire";</script>';
	}

}
else {
 
 

 
 
$r=rand(111111,999999);
$field="
	
	fir_pandal_area,
	fir_pandal_height,
	fir_persn_present,
	fir_material_cons_pandal,
	fir_agree,
	submission_date
	
	
	";	
 

	 $value="'".$_REQUEST['pandalarea']."','".$_REQUEST['hpandal']."','".$_REQUEST['noinpandal']."','".$_REQUEST['material']."','".$_REQUEST['fireagree']."',NOW()";
	 

	
	
	$insert=$ob->db_insert("application","$field","$value");	
	



	 
 
	}
	

	if($insert){
	
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=pollution";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=fire";</script>';
	}
	
	?>