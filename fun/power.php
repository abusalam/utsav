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


$pair="name_ccc='".$_REQUEST['customername']."',
elec_auth_pers='".$_REQUEST['authname']."',
add_elec_auth_pers='".$_REQUEST['authadd']."',
loc_temp_suply='".$_REQUEST['suplyloc']."',

land_owner_elec='".$_REQUEST['lonweradd']."',
land_elec_noc='".$_REQUEST['landownernoc']."',
consumer_no='".$_REQUEST['consno']."',

suplier_req_day='".$_REQUEST['srd']."',
suplier_req_from='".$_REQUEST['srf']."',
connect_load='".$_REQUEST['cload']."',
elec_contactor_name='".$_REQUEST['elecconname']."',
elec_contactor_addr='".$_REQUEST['elecconaddr']."',

elec_agree='".$_REQUEST['elec_agree']."',
submission_date=NOW()

	";	
 

	
	 























	
	
 

	 
$update=$ob->db_update("application","$pair","id='".$_REQUEST['nid']."'");
	
if($update){
	
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=fire";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=power";</script>';
	}

}
else {
 
 

 
 
$r=rand(111111,999999);
$field="
	
	name_ccc,
	elec_auth_pers,
	add_elec_auth_pers,
	loc_temp_suply,
	land_owner_elec,
	land_elec_noc,
	consumer_no,
	suplier_req_day,
	suplier_req_from,
	connect_load,
	elec_contactor_name,
	elec_contactor_addr,
	elec_agree,
	submission_date
	
	";	
 

	 $value="'".$_REQUEST['customername']."','".$_REQUEST['authname']."','".$_REQUEST['authadd']."','".$_REQUEST['suplyloc']."','".$_REQUEST['lonweradd']."','".$_REQUEST['landownernoc']."','".$_REQUEST['consno']."','".$_REQUEST['srd']."','".$_REQUEST['srf']."',
	 '".$_REQUEST['cload']."','".$_REQUEST['elecconname']."','".$_REQUEST['elecconaddr']."','".$_REQUEST['elec_agree']."', 
	 
	 
	 NOW()";
	 

	
	
	$insert=$ob->db_insert("application","$field","$value");	
	



	 
 
	}
	

	if($insert){
	
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=power";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=land";</script>';
	}
	
	?>