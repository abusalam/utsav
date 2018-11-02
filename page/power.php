<?php

include_once("config/config.php");
include_once("config/database.php");



$ob= new database();


include"lib/header.php";
include"lib/menu.php";
?> 


<script type="text/javascript">


function pop_up(id){

   var url = "assign.php?id="+id
   //alert();
   $.post(url, function(data) {
       
      
      $('#overlay_form').html(data);  //Setting the content of html 
       
   });
   //open popup
   $("#overlay_form").fadeIn(300);
   positionPopup();
   
  }

             function positionPopup(){
  if(!$("#overlay_form").is(':visible')){
  return;
  }
  $("#overlay_form").css({
  left:63,
  top:-100,
  position:'absolute'
  });
  }
               function close_cd()
  {
   $("#overlay_form").fadeOut(700); //Closing the opened window
  }
  
  function pop_up1(id){

   var url = "view_profile.php?id="+id
   //alert();
   $.post(url, function(data) {
       
      
      $('#overlay_form').html(data);  //Setting the content of html 
       
   });
   //open popup
   $("#overlay_form").fadeIn(300);
   positionPopup();
   
  }

             function positionPopup(){
  if(!$("#overlay_form").is(':visible')){
  return;
  }
  $("#overlay_form").css({
  left:-63,
  top:-100,
  position:'absolute'
  });
  }
               function close_cd()
  {
   $("#overlay_form").fadeOut(700); //Closing the opened window
  }
</script>

 <script>
			   $(window).load(function(){
  setTimeout(function(){ $('.video-field-new').fadeOut("very slow") }, 2000);
});</script>


<style>


  #overlay_form{
  position: absolute;
  border: 5px solid gray;
  padding: 2px 24px 2px 2px;
  background: white;
  left:263px;
  top:-45px;
  /*width: 321px;*/
  /*height: 400px;*/
  
  }
  #pop{
  display: block;
  border: 1px solid gray;
  width: 65px;
  text-align: center;
  padding: 6px;
  border-radius: 5px;
  text-decoration: none;
  margin: 0 auto;
  }
  
  
</style>

<style>
  #overlay_form{
  position: absolute;
  border: 5px solid gray;
  padding: 2px 24px 2px 2px;
  background: white;
  left:263px;
  top:-145px;
 width: 921px;
 
  
  }
  #pop{
  display: block;
  border: 1px solid gray;
  width: 65px;
  text-align: center;
  padding: 6px;
  border-radius: 5px;
  text-decoration: none;
  margin: 0 auto;
  }
</style>


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Application Submission
            <small></small>
          </h1>
		  <div style="margin-left:height:70px; background-color:#9ECFCF; text-align:center" class="video-field-new"> <?php if($_REQUEST[edit]=='successfull') { echo "<b style='color:green;padding:10px'>Data Successfully Updated.</b>"; } ?></div>
				  
				  
				  <div style="margin-left:height:70px; background-color:#9ECFCF; text-align:center"> <?php if($_REQUEST[edit]=='fail') { echo "<b style='color:red;padding:10px'>Error in Data Updation.</b>"; } ?></div>
				  
				  <div style="margin-left:height:70px; background-color:#9ECFCF; text-align:center" class="video-field-new"> <?php if($_REQUEST[delete]=='successfull') { echo "<b style='color:green;padding:10px'>Data Successfully Deleted.</b>"; } ?></div>
				  
				  
				  <div style="margin-left:height:70px; background-color:#9ECFCF; text-align:center"> <?php if($_REQUEST[delete]=='fail') { echo "<b style='color:red;padding:10px'>Error in Data Deletion.</b>"; } ?></div> 
				  
		 <ol class="breadcrumb">
            <li><a href="indexes.php?action=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
           <li><a href="indexes.php?action=changespass"><i class="active"></i> Change Password</a></li>
			
			<li class="active"> <a href="logout.php">Logout</a></li>
			<li class="active"> </li>
			<li class="active"> </li>
          </ol> 		  
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <!-- /.box -->
<div id="overlay_form" style="display:none;z-index:9999999">
 </div>
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
				
                  
					
				


	

	
 
 	<div>
				
						<?php include"lib/menu_horizontal.php"; ?>
					
				<div class="content">
				 
					
					
					
					<section id="section-3">
					<?php
					
					$checkrec=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'");
//$checkUser=cek($user,$pass);	

/*if($checkrec){ 
$checkrecords=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'");


}*/



?>
						<div class="mediabox" style="width:700px">
							<form method="post" action="fun/power.php">
							<table style="padding-bottom:60px">
							
							 <tr height="57"  style="margin-bottom:200px; margin-bottom:20px" ><td width="400" style="background-color:rgba(255, 235, 215, 0.56)"><b style="color:#FF0000">*</b> Name of The Customer Care Centre<input   type="text"  id="customername" class="form-control" width="width:20px" 
						
						 name="customername"   size="200"  <?php if($checkrec){ ?>   value="<?php echo $checkrec->name_ccc; ?>"<?php }  ?> /> </td>
						 
						 </tr>
						 
						  <tr height="20"></tr>
						 <tr  height="57" style="margin-top:200px"><td style="background-color:#EEEEDD"><b style="color:#FF0000">*</b>Name of the authorised representative of the organisation who will be connected  by licenseee  in connection with electricity supply:<input  type="text"  id="authname" class="form-control" width="width:20px" 
						
						 name="authname"  <?php if($checkrec){ ?>   value="<?php echo $checkrec->elec_auth_pers; ?>"<?php }  ?>  /> </td>
						 </tr>
						
						 <tr height="20"></tr>
						 <tr height="57"><td style="background-color:rgba(255, 235, 215, 0.56)"><b style="color:#FF0000">*</b> Address of the person as mentioned above :<input  type="text"  id="authadd" class="form-control" width="width:20px" 
						
						 name="authadd"   <?php if($checkrec){ ?>   value="<?php echo $checkrec->add_elec_auth_pers; ?>"<?php }  ?> /> </td>
						 </tr>
						 <tr height="20"></tr>
						 <tr height="57"><td style="background-color:#EEEEDD"><b style="color:#FF0000">*</b> Location where the temporary supply is required (specify important landmark and nearest electric pole number):<input  type="text"  id="suplyloc" class="form-control" width="width:20px" 
						
						 name="suplyloc"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->loc_temp_suply; ?>"<?php }  ?> /> </td>
						 </tr>
						 
						  <tr height="20"></tr>
						 <tr height="57"><td style="background-color:rgba(255, 235, 215, 0.56)"><b style="color:#FF0000">*</b> Name and address of the land owner where the temporary connection is required, if any:<input  type="text"  id="lonweradd" class="form-control" width="width:20px" 
						
						 name="lonweradd"   <?php if($checkrec){ ?>   value="<?php echo $checkrec->land_owner_elec; ?>"<?php }  ?> /> </td>
						 
						 
						 
						 
						 
						 
						 
						 </tr>
						  <tr height="20"></tr>
						<tr height="57"><td style="background-color:#EEEEDD"><b style="color:#FF0000">*</b> Whether NOC has been obtained from the land owner:
						 
						 
						 
						 
						<select class="form-control"  name="landownernoc" id="landownernoc">
							
							  <?php if($checkrec){ ?>
							   <?php if($checkrec->land_elec_noc=='Yes'){ ?>
							    <option value="Yes" selected="selected">Yes</option>
							 <option value="No">No</option>
							   
							    <?php } elseif($checkrec->land_elec_noc=='No') { ?>
								 <option value="Yes">Yes</option>
							 <option value="No" selected="selected">No</option>
							  <?php } elseif($checkrec->land_elec_noc=='') { ?>
							  
							 <option value="">---select---</option>
							 <option value="Yes">Yes</option>
							 <option value="No">No</option>
							  
							  
							  
							   <?php } } else { ?>
							    <option value="">---select---</option>
							 <option value="Yes">Yes</option>
							 <option value="No">No</option>
							   <?php } ?>
							 </select> 
						 
						 
						 </td>
						 </tr> 
						  <tr height="20"></tr>
						<tr height="57"><td style="background-color:rgba(255, 235, 215, 0.56)"><b style="color:#FF0000"></b> Consumer number of the land owner:<input  type="text"  id="consno" class="form-control" width="width:20px" 
						
						 name="consno"  <?php if($checkrec){ ?>   value="<?php echo $checkrec->consumer_no; ?>"<?php }  ?>   /> </td>
						 </tr> 
						  <tr height="20"></tr>
						 <tr height="57"><td style="background-color:rgba(255, 235, 215, 0.56)"><b style="color:#FF0000">*</b> Supply required days<input  type="text"  id="srd" class="form-control" width="width:20px" 
						
						 name="srd"     <?php if($checkrec){ ?>   value="<?php echo $checkrec->suplier_req_day; ?>"<?php }  ?>   /> </td>
						 </tr> 
						  <tr height="20"></tr>
						  <tr height="57"><td style="background-color:#EEEEDD"><b style="color:#FF0000">*</b> Supply required from<input  type="date"  id="srf" class="form-control" width="width:20px" 
						
						 name="srf"     <?php if($checkrec){ ?>   value="<?php echo $checkrec->suplier_req_from; ?>"<?php }  ?>   /> </td>
						 </tr>
						  <tr height="20"></tr>
						 <tr height="57"><td style="background-color:rgba(255, 235, 215, 0.56)"><b style="color:#FF0000">*</b> Connected load:<input  type="text"  id="cload" class="form-control" width="width:20px" 
						
						 name="cload"     <?php if($checkrec){ ?>   value="<?php echo $checkrec->connect_load; ?>"<?php }  ?>   /> </td>
						 </tr> 
						  <tr height="20"></tr>
						 <tr height="57"><td style="background-color:#EEEEDD"><b style="color:#FF0000">*</b> Name of licensed electrical contractor who is responsible for supervising full electrical installation where temporary supply required:<input  type="text"  id="elecconname" class="form-control" width="width:20px" 
						
						 name="elecconname"     <?php if($checkrec){ ?>   value="<?php echo $checkrec->elec_contactor_name; ?>"<?php }  ?>   /> </td>
						 </tr>  <tr height="20"></tr>
						 <tr height="57"><td style="background-color:rgba(255, 235, 215, 0.56)"><b style="color:#FF0000">*</b> Address of the person mentioned above:<input  type="text"  id="elecconaddr" class="form-control" width="width:20px" 
						
						 name="elecconaddr"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->elec_contactor_addr; ?>"<?php }  ?>    /> </td>
						 </tr> 
						 
						  <tr height="20"></tr>
						 <tr height="57"><td><p>Undertaking</p>
<p>1. We will not use electricity more days in comparison with my declaration.
</p>
<p>2. We will not use more electricity in comparison with my declaration.
</p>
<p>3. We will provide easily accessible space for meter installation.
</p>
<p>4. Temporary wiring will be done by maintainiong safety norms of W.B.S.E.D.C.L.
</p>
<p>5. We will take three(3) phase balance load from DIR.
</p>
<p>6. Meter and main switch to be installed in easily accessible space for LT/HT mobile van.
</p>
<p><b style="color:#FF0000">* </b> Agree
<input  type="checkbox" <?php if($checkrec->elec_agree=='on'){ ?>   checked="checked"<?php }  ?> id="elec_agree"  width="width:20px" 
						
						 name="elec_agree"    /> </p></td>
						 </tr> 
						 
						 
						 <tr height="40"><td colspan="6" align="center"><input  type="submit"  	 class="myButton"   name="submit"  <?php if($checkrec->finalize=='Yes'){ ?> disabled="disabled"   <?php } ?>    value="Save & Next"   onClick="return validat();"/>  </td>
						 <?php if($checkrec){ ?>  <input  type="hidden"  
						
						 name="nid"     value="<?php echo $checkrec->id; ?>"  <?php }  ?>
						 </tr>	
						 </table>
							</form>
						
						</div>
					</section>
					
					
					
				</div><!-- /content -->
			</div><!-- /tabs -->
			
		<script src="js_tab/cbpFWTabs.js"></script>
		<script>
			new CBPFWTabs( document.getElementById( 'tabs' ) );
		</script>												
	 



                      
                      
                    
				  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div>
	  
	   <footer class="main-footer">
        <div class="pull-right hidden-xs">
           <img src="logo.png"  style="margin-top:-7px">
        </div>
        <strong>Copyright &copy; 2016<a href=""> NIC</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
	
	
	<style>
.myButton {
	-moz-box-shadow: 0px 10px 14px -7px #276873;
	-webkit-box-shadow: 0px 10px 14px -7px #276873;
	box-shadow: 0px 10px 14px -7px #276873;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #599bb3), color-stop(1, #408c99));
	background:-moz-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-webkit-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-o-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-ms-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#599bb3', endColorstr='#408c99',GradientType=0);
	background-color:#599bb3;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:7px 10px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #408c99), color-stop(1, #599bb3));
	background:-moz-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-webkit-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-o-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-ms-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:linear-gradient(to bottom, #408c99 5%, #599bb3 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#408c99', endColorstr='#599bb3',GradientType=0);
	background-color:#408c99;
}
.myButton:active {
	position:relative;
	top:1px;
}
</style>
<script>
	function validat()
	{
	
	
	
	var customername=document.getElementById("customername").value;
	var authname=document.getElementById("authname").value;
	var authadd=document.getElementById("authadd").value;
	var suplyloc=document.getElementById("suplyloc").value;
	var lonweradd=document.getElementById("lonweradd").value;
	var landownernoc=document.getElementById("landownernoc").value;
	var consno=document.getElementById("consno").value;
	var srd=document.getElementById("srd").value;
	var srf=document.getElementById("srf").value;
	var cload=document.getElementById("cload").value;
	var elecconname=document.getElementById("elecconname").value;
	var elecconaddr=document.getElementById("elecconaddr").value;
	 
	
	if((customername=='') || (customername=='Null'))
	{
	document.getElementById("customername").focus();
	alert("Name of The Customer Care Centre can't blank");
	return false;
	}
	
	
	if((authname=='') || (authname=='Null'))
	{
	document.getElementById("authname").focus();
	alert("Name of the authorised representative of the organisation who will be connected by licenseee in connection with electricity supply can't blank");
	return false;
	}
	
	if((authadd=='') || (authadd=='Null'))
	{
	document.getElementById("authadd").focus();
	alert("Address of the person as mentioned above  can't blank");
	return false;
	}
	if((suplyloc=='') || (suplyloc=='Null'))
	{
	document.getElementById("suplyloc").focus();
	alert("Location where the temporary supply is required (specify important landmark and nearest electric pole number) can't blank");
	return false;
	}
	
	if((lonweradd=='') || (lonweradd=='Null'))
	{
	document.getElementById("lonweradd").focus();
	alert("Name and address of the land owner where the temporary connection is required, if any: can't blank");
	return false;
	}
	
	
	
	
	if((landownernoc=='') || (landownernoc=='Null'))
	{
	document.getElementById("landownernoc").focus();
	alert("Whether NOC has been obtained from the land owner can't blank");
	return false;
	}
	
	
	if((srd=='') || (srd=='Null'))
	{
	document.getElementById("srd").focus();
	alert("NSupply required days can't blank");
	return false;
	}
	if((srf=='') || (srf=='Null'))
	{
	document.getElementById("srf").focus();
	alert("Supply required from can't blank");
	return false;
	}
	
	if((cload=='') || (cload=='Null'))
	{
	document.getElementById("cload").focus();
	alert("Connected load can't blank");
	return false;
	}
	
	
	if((elecconname=='') || (elecconname=='Null'))
	{
	document.getElementById("elecconname").focus();
	alert("Name of licensed electrical contractor who is responsible for supervising full electrical installation where temporary supply required can't blank");
	return false;
	}
	
	if((elecconaddr=='') || (elecconaddr=='Null'))
	{
	document.getElementById("elecconaddr").focus();
	alert("Address of the person mentioned above can't blank");
	
	return false;
	}
	
	if(document.getElementById("elec_agree").checked== false)
	{
	document.getElementById("elec_agree").focus();
	alert(" Agree can't blank");
	return false;
	}
	if(document.getElementById("elec_agree").checked== true)
	{
	return true;
	
	}
	

	
	
	}
	</script>
    <!-- page script -->
  <!--<script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": false,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>-->
	  <?php
     //include"lib/footer.php";
	 ?>