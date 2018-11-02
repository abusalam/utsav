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
$pair="ck_sit_pln='".$_REQUEST['site']."',
ck_wbsedcl='".$_REQUEST['elec']."',
ck_fire_noc='".$_REQUEST['fire']."',
ck_muni_noc='".$_REQUEST['mnoc']."',
ck_land_own='".$_REQUEST['lw']."',
ck_dec='".$_REQUEST['dec']."',
ck_electrician='".$_REQUEST['ea']."',
ck_last_inc_exp='".$_REQUEST['lya']."',
ck_sourc_fund='".$_REQUEST['b']."',
ck_bill_book='".$_REQUEST['book']."',
ck_photocopy='".$_REQUEST['photo']."',
ck_org_res='".$_REQUEST['res']."',
ck_imm_date='".$_REQUEST['immdate']."',

ck_voln_list='".$_REQUEST['vol']."',
ck_auth_list='".$_REQUEST['con']."',
ck_vio='".$_REQUEST['lhead']."',
ck_thana_noc='".$_REQUEST['thananoc']."',

ck_mike='".$_REQUEST['mike']."',
ck_vol_emg='".$_REQUEST['volp']."',



submission_date=NOW()";











//$update=$ob->db_update("user_reg","$pair","mobile='".$mobile."' AND otp='".$otp."' AND id='".$nid."'");
$update=$ob->db_update("application","$pair","id='".$_REQUEST['nid']."'");
	
if($update){
	
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=checklist";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=checklist";</script>';
	}

}
else {
 
 

 
 
$r=rand(111111,999999);
$field="ck_sit_pln,
	ck_wbsedcl,
	ck_fire_noc,
	ck_muni_noc,
	ck_land_own,
	ck_dec,
	ck_electrician,
	ck_last_inc_exp,
	ck_sourc_fund,
	ck_bill_book,
	ck_photocopy,
	ck_org_res,
	ck_imm_date,
	ck_voln_list,
	ck_auth_list,
	ck_vio,
	ck_thana_noc,
	ck_mike,
	ck_vol_emg,
	submission_date
	
	
	";	
 

	 $value="'".$_REQUEST['site']."','".$_REQUEST['elec']."','".$_REQUEST['fire']."','".$_REQUEST['mnoc']."','".$_REQUEST['lw']."','".$_REQUEST['dec']."','".$_REQUEST['ea']."','".$_REQUEST['lya']."','".$_REQUEST['b']."','".$_REQUEST['book']."','".$_REQUEST['photo']."','".$_REQUEST['res']."','".$_REQUEST['immdate']."','".$_REQUEST['vol']."','".$_REQUEST['con']."','".$_REQUEST['lhead']."','".$_REQUEST['thananoc']."','".$_REQUEST['mike']."','".$_REQUEST['volp']."',NOW()";
	 

	
	
	$insert=$ob->db_insert("application","$field","$value");	
	



	 
 
	}
	
	
	if($insert){
	
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=checklist";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=checklist";</script>';
	}
	
	?>