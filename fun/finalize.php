<?php 
session_start();
if(! isset($_SESSION['id'])) {
	exit();
}
include_once("../config/config.php");
include_once("../config/database.php");
$ob= new database();
$cyear=date('Y');
$checkrecords=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'");
$ln = strlen((string)$checkrecords->id);
if($ln=='1') {
	$ln='000'.$checkrecords->id;
}
if($ln=='2') {
	$ln='00'.$checkrecords->id;
}
if($ln=='3') {
	$ln='0'.$checkrecords->id;
}
if($ln=='4') {
	$ln=$checkrecords->id;
}

$disable = false;
switch ('') {
    case $checkrecords->file_res_copy:
    case $checkrecords->file_mem_det:
    case $checkrecords->file_noc_land:
    case $checkrecords->file_last_puja_per:
    case $checkrecords->file_pmnt_electric:
    case $checkrecords->file_fire_pay:
    case $checkrecords->file_muni_form:
    case $checkrecords->file_muni_pay:
    case $checkrecords->file_site_plan:
    case $checkrecords->file_bank_p_book:
        $disable = true;
}
if($checkrecords->finalize == 'Yes') {
    $disable = true;
}

if($disable) {
    exit();
}

$ps=substr($_SESSION['ps'],0,3).'/'.$cyear.'/'.$ln;
$pair="app_id='".$ps."',finalize='Yes',finalize_date=NOW(),submission_date=NOW()";
echo $DestinationAddress=$_SESSION['mobile_no'];
echo $Message='Your Application ID is:'.$ps;

$update=$ob->db_update("application","$pair","id='".$_REQUEST['nid']."'");
if($update){
	include_once("sms/smsgw_cdac.php");
    sendSingleSMS($username,$encryp_password,$senderid,$Message,$DestinationAddress,$deptSecureKey);
	echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=finalize&msg=success";</script>';
}
