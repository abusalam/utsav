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
if($_FILES['file_res_copy']['name']=='')
{

$file_res_copy=$_REQUEST['file_res_copy_old'];
}
else
{

$exp=explode('/',$_FILES['file_res_copy']['type']);
//echo $fsize=$_FILES['file_res_copy']['size'].'<br>';
 //echo $fsize=$_FILES['file_res_copy']['size']/1000000;

if(($exp[1]=='pdf') || ($exp[1]=='jpeg') || ($exp[1]=='jpg') || ($exp[1]=='png')) 
{

$root1=$_SESSION['id'].'_'.rand(111,999).$_FILES['file_res_copy']['name'];
$dst1='../doc/res/'.$root1;
move_uploaded_file($_FILES['file_res_copy']['tmp_name'],$dst1);
$file_res_copy=$root1;
}
else
{
$file_res_copy=$_REQUEST['file_res_copy_old'];
	echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=upload&msg=error";</script>';
}





}

if($_FILES['file_mem_det']['name']=='')
{

$file_mem_det=$_REQUEST['file_mem_det_old'];
}
else
{
$exp=explode('/',$_FILES['file_mem_det']['type']);
//echo $fsize=$_FILES['file_mem_det']['size'].'<br>';
 //echo $fsize=$_FILES['file_res_copy']['size']/1000000;
if(($exp[1]=='pdf') || ($exp[1]=='jpg') || ($exp[1]=='jpeg') || ($exp[1]=='png')) 
{
$root2=$_SESSION['id'].'_'.rand(111,999).$_FILES['file_mem_det']['name'];
$dst2='../doc/member/'.$root2;
move_uploaded_file($_FILES['file_mem_det']['tmp_name'],$dst2);
$file_mem_det=$root2;



}
else
{
$file_mem_det=$_REQUEST['file_mem_det_old'];
	echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=upload&msg=error";</script>';
}

}

if($_FILES['file_noc_land']['name']=='')
{

$file_noc_land=$_REQUEST['file_noc_land_old'];
}
else
{
$exp=explode('/',$_FILES['file_noc_land']['type']);
//echo $fsize=$_FILES['file_noc_land']['size'].'<br>';
 //echo $fsize=$_FILES['file_res_copy']['size']/1000000;
if(($exp[1]=='pdf') || ($exp[1]=='jpg') || ($exp[1]=='jpeg') || ($exp[1]=='png')) 
{
$root3=$_SESSION['id'].'_'.rand(111,999).$_FILES['file_noc_land']['name'];
$dst3='../doc/Land_NOC/'.$root3;
move_uploaded_file($_FILES['file_noc_land']['tmp_name'],$dst3);
$file_noc_land=$root3;
}
else
{
$file_noc_land=$_REQUEST['file_noc_land_old'];
	echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=upload&msg=error";</script>';
}


}
if($_FILES['file_site_plan']['name']=='')
{

$file_site_plan=$_REQUEST['file_site_plan_old'];
}
else
{





$exp=explode('/',$_FILES['file_site_plan']['type']);
//echo $fsize=$_FILES['file_site_plan']['size'].'<br>';
 //echo $fsize=$_FILES['file_res_copy']['size']/1000000;
if(($exp[1]=='pdf') || ($exp[1]=='jpg') || ($exp[1]=='jpeg') || ($exp[1]=='png')) 
{
$root9=$_SESSION['id'].'_'.rand(111,999).$_FILES['file_site_plan']['name'];
$dst9='../doc/siteplan/'.$root9;
move_uploaded_file($_FILES['file_site_plan']['tmp_name'],$dst9);
$file_site_plan=$root9;
}
else
{
$file_site_plan=$_REQUEST['file_site_plan_old'];
	echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=upload&msg=error";</script>';
}


}


if($_FILES['file_last_puja_per']['name']=='')
{

$file_last_puja_per=$_REQUEST['file_last_puja_per_old'];
}
else
{
$exp=explode('/',$_FILES['file_last_puja_per']['type']);
//echo $fsize=$_FILES['file_last_puja_per']['size'].'<br>';
 //echo $fsize=$_FILES['file_res_copy']['size']/1000000;
if(($exp[1]=='pdf') || ($exp[1]=='jpg') || ($exp[1]=='jpeg') || ($exp[1]=='png')) 
{
$root4=$_SESSION['id'].'_'.rand(111,999).$_FILES['file_last_puja_per']['name'];
$dst4='../doc/pujaper/'.$root4;
move_uploaded_file($_FILES['file_last_puja_per']['tmp_name'],$dst4);
$file_last_puja_per=$root4;
}
else
{
$file_last_puja_per=$_REQUEST['file_last_puja_per_old'];
	echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=upload&msg=error";</script>';
}

}

if($_FILES['file_pmnt_electric']['name']=='')
{

$file_pmnt_electric=$_REQUEST['file_pmnt_electric_old'];
}
else
{






$exp=explode('/',$_FILES['file_pmnt_electric']['type']);
//echo $fsize=$_FILES['file_pmnt_electric']['size'].'<br>';
 //echo $fsize=$_FILES['file_res_copy']['size']/1000000;
if(($exp[1]=='pdf') || ($exp[1]=='jpg') || ($exp[1]=='jpeg') || ($exp[1]=='png')) 
{
$root5=$_SESSION['id'].'_'.rand(111,999).$_FILES['file_pmnt_electric']['name'];
$dst5='../doc/elec_bill/'.$root5;
move_uploaded_file($_FILES['file_pmnt_electric']['tmp_name'],$dst5);
$file_pmnt_electric=$root5;
}
else
{
$file_pmnt_electric=$_REQUEST['file_pmnt_electric_old'];
	echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=upload&msg=error";</script>';
}






}


if($_FILES['file_fire_pay']['name']=='')
{

$file_fire_pay=$_REQUEST['file_fire_pay_old'];
}
else
{



$exp=explode('/',$_FILES['file_fire_pay']['type']);
//echo $fsize=$_FILES['file_fire_pay']['size'].'<br>';
 //echo $fsize=$_FILES['file_res_copy']['size']/1000000;
if(($exp[1]=='pdf') || ($exp[1]=='jpg') || ($exp[1]=='jpeg') || ($exp[1]=='png')) 
{
$root6=$_SESSION['id'].'_'.rand(111,999).$_FILES['file_fire_pay']['name'];
$dst6='../doc/fire/'.$root6;
move_uploaded_file($_FILES['file_fire_pay']['tmp_name'],$dst6);
$file_fire_pay=$root6;
}
else
{
$file_fire_pay=$_REQUEST['file_fire_pay_old'];
	echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=upload&msg=error";</script>';
}




}

if($_FILES['file_bank_p_book']['name']=='')
{

$file_bank_p_book=$_REQUEST['file_bank_p_book_old'];
}
else
{





$exp=explode('/',$_FILES['file_bank_p_book']['type']);
//echo $fsize=$_FILES['file_bank_p_book']['size'].'<br>';
 //echo $fsize=$_FILES['file_res_copy']['size']/1000000;
if(($exp[1]=='pdf') || ($exp[1]=='jpg') || ($exp[1]=='jpeg') || ($exp[1]=='png')) 
{
$root10=$_SESSION['id'].'_'.rand(111,999).$_FILES['file_bank_p_book']['name'];
$dst10='../doc/bank_p_book/'.$root10;
move_uploaded_file($_FILES['file_bank_p_book']['tmp_name'],$dst10);
$file_bank_p_book=$root10;
}
else
{
$file_bank_p_book=$_REQUEST['file_bank_p_book_old'];
	echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=upload&msg=error";</script>';
}


}

if($_FILES['file_muni_form']['name']=='')
{

$file_muni_form=$_REQUEST['file_muni_form_old'];
}
else
{


$exp=explode('/',$_FILES['file_muni_form']['type']);
//echo $fsize=$_FILES['file_muni_form']['size'].'<br>';
 //echo $fsize=$_FILES['file_res_copy']['size']/1000000;
if(($exp[1]=='pdf') || ($exp[1]=='jpg') || ($exp[1]=='jpeg') || ($exp[1]=='png')) 
{
$root7=$_SESSION['id'].'_'.rand(111,999).$_FILES['file_muni_form']['name'];
$dst7='../doc/muni_form/'.$root7;
move_uploaded_file($_FILES['file_muni_form']['tmp_name'],$dst7);
$file_muni_form=$root7;
}
else
{
$file_muni_form=$_REQUEST['file_muni_form_old'];
	echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=upload&msg=error";</script>';
}







}

if($_FILES['file_muni_pay']['name']=='')
{

$file_muni_pay=$_REQUEST['file_muni_pay_old'];
}
else
{




$exp=explode('/',$_FILES['file_muni_pay']['type']);
//echo $fsize=$_FILES['file_muni_pay']['size'].'<br>';
 //echo $fsize=$_FILES['file_res_copy']['size']/1000000;
if(($exp[1]=='pdf') || ($exp[1]=='jpg') || ($exp[1]=='jpeg') || ($exp[1]=='png')) 
{
$root8=$_SESSION['id'].'_'.rand(111,999).$_FILES['file_muni_pay']['name'];
$dst8='../doc/muni_pay/'.$root8;
move_uploaded_file($_FILES['file_muni_pay']['tmp_name'],$dst8);
$file_muni_pay=$root8;
}
else
{
$file_muni_pay=$_REQUEST['file_muni_pay_old'];
	echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=upload&msg=error";</script>';
}










}


$file_res_copy=$file_res_copy;
$file_mem_det=$file_mem_det;
$file_noc_land=$file_noc_land;

$file_last_puja_per=$file_last_puja_per;
$file_pmnt_electric=$file_pmnt_electric;
$file_fire_pay=$file_fire_pay;
$file_muni_form=$file_muni_form;
$file_muni_pay=$file_muni_pay;
$file_site_plan=$file_site_plan;
$file_bank_p_book=$file_bank_p_book;

//echo "A".$_REQUEST['org'];
 $pair="
file_res_copy='".$file_res_copy."',
file_mem_det='".$file_mem_det."',
file_noc_land='".$file_noc_land."',
file_last_puja_per='".$file_last_puja_per."',
file_pmnt_electric='".$file_pmnt_electric."',
file_fire_pay='".$file_fire_pay."',
file_muni_form='".$file_muni_form."',
file_muni_pay='".$file_muni_pay."',
file_site_plan='".$file_site_plan."',
file_bank_p_book='".$file_bank_p_book."',






submission_date=NOW()";



//$update=$ob->db_update("user_reg","$pair","mobile='".$mobile."' AND otp='".$otp."' AND id='".$nid."'");
$update=$ob->db_update("application","$pair","id='".$_REQUEST['nid']."'");
	


if($update){
	
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=checklist";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=upload";</script>';
	}
}
else {
 
 

 
 

$field="file_res_copy,

	file_mem_det,
	file_noc_land,
	file_last_puja_per,
	file_pmnt_electric,
	file_fire_pay,
	file_muni_form,
	file_muni_pay,
	file_site_plan,
	file_bank_p_book,
	submission_date
	
	
	";	
 

	 $value="'".$_SESSION['id']."','".$_SESSION['ps']."','".$_REQUEST['org']."','".$_REQUEST['orgmob']."','".$_REQUEST['orgemail']."','".$_REQUEST['orgadd']."','".$_REQUEST['secname']."','".$_REQUEST['secmob']."','".$_REQUEST['secmail']."','".$_REQUEST['secadd']."','".$_REQUEST['pandaladd']."','".$_REQUEST['wardno']."','".$_REQUEST['holdingno']."','".$_REQUEST['from']."','".$_REQUEST['to']."',NOW()";
	 

	
	
	$insert=$ob->db_insert("application","$field","$value");	
	



	 
 
	}
	
	
	if($insert){
	
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=checklist";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="../indexes.php?action=upload";</script>';
	}
	
	?>
