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
$pair="muni_form_no='".$_REQUEST['formsl']."',
puja_year_since='".$_REQUEST['pujacont']."',
exp_last_year='".$_REQUEST['lastexp']."',
present_budget='".$_REQUEST['budget']."',
imm_place='".$_REQUEST['immplace']."',
imm_date='".$_REQUEST['immdate']."',
secu_arrg='".$_REQUEST['secuarng']."',
spec_arrg='".$_REQUEST['specarng']."',
det_encro_muni='".$_REQUEST['encro']."',


submission_date=NOW()


	
	";	
 




	

 

	 
$update=$ob->db_update("application","$pair","id='".$_REQUEST['nid']."'");
	
if($update){
	
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=police";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=municipality";</script>';
	}

}
else {
 
 

 
 
$r=rand(111111,999999);
$field="
	
	muni_form_no,
	puja_year_since,
	exp_last_year,
	present_budget,
	imm_place,
	imm_date,
	
	secu_arrg,
	spec_arrg,
	det_encro_muni,
	
	submission_date
	
	
	";	
 

	 $value="'".$_REQUEST['formsl']."','".$_REQUEST['pujacont']."','".$_REQUEST['lastexp']."','".$_REQUEST['budget']."','".$_REQUEST['immplace']."','".$_REQUEST['immdate']."','".$_REQUEST['secuarng']."','".$_REQUEST['specarng']."','".$_REQUEST['encro']."',NOW()";
	 

	
	
	$insert=$ob->db_insert("application","$field","$value");	
	



	 
 
	}
	

	if($insert){
	
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=police";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=municipality";</script>';
	}
	
	?>