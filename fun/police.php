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
$pair="imm_place='".$_REQUEST['plimm']."',
imm_date='".$_REQUEST['dtimm']."',
ing_cele_details='".$_REQUEST['celedet']."',
cul_details='".$_REQUEST['culdet']."',
artist_details='".$_REQUEST['artdet']."',
ppl_per='".$_REQUEST['pplper']."',
pandal_dim='".$_REQUEST['pandaldim']."',
volun_no='".$_REQUEST['volunno']."',
entry_point_det='".$_REQUEST['entrydet']."',
exit_point_det='".$_REQUEST['exitdet']."',


crowd_cont='".$_REQUEST['crowdcont']."',
high_court='".$_REQUEST['highcont']."',
proc_route='".$_REQUEST['prort']."',
proc_time='".$_REQUEST['protime']."',
proc_crowd='".$_REQUEST['procrowd']."',


proc_musician='".$_REQUEST['promusc']."',
porc_vehicle='".$_REQUEST['proveh']."',
idol_height='".$_REQUEST['idolht']."',
fin_aid='".$_REQUEST['finaid']."',
police_agree='".$_REQUEST['policeagre']."',
submission_date=NOW()
	
 ";
	 



	

 

	 
$update=$ob->db_update("application","$pair","id='".$_REQUEST['nid']."'");
	
if($update){
	
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=upload";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=police";</script>';
	}

}
else {
 
 

 
 
$r=rand(111111,999999);
$field="imm_place,
	imm_date,
	ing_cele_details,
	cul_details,
	artist_details,
	ppl_per,
	pandal_dim,
	volun_no,
	entry_point_det,
	exit_point_det,
	crowd_cont,
	high_court,
	proc_route,
	proc_time,
	proc_crowd,
	proc_musician,
	porc_vehicle,
	idol_height,
	fin_aid,
	police_agree,
	submission_date
	
	
	";	
 
	 $value="'".$_REQUEST['plimm']."','".$_REQUEST['dtimm']."','".$_REQUEST['celedet']."','".$_REQUEST['culdet']."','".$_REQUEST['artdet']."','".$_REQUEST['pplper']."','".$_REQUEST['pandaldim']."','".$_REQUEST['volunno']."','".$_REQUEST['entrydet']."','".$_REQUEST['exitdet']."','".$_REQUEST['crowdcont']."','".$_REQUEST['highcont']."','".$_REQUEST['prort']."','".$_REQUEST['protime']."','".$_REQUEST['procrowd']."','".$_REQUEST['promusc']."','".$_REQUEST['proveh']."','".$_REQUEST['idolht']."','".$_REQUEST['finaid']."','".$_REQUEST['policeagre']."',NOW()";
	 

	
	
	$insert=$ob->db_insert("application","$field","$value");	
	



	 
 
	}
	

	if($insert){
	
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=upload";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=police";</script>';
	}
	
	?>