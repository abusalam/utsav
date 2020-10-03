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
          <h1>Application for permission to hold <?php echo PUJA_NAME;?></h1>
		  <div style="margin-left:height:70px; background-color:#9ECFCF; text-align:center" class="video-field-new"> <?php if($_REQUEST[edit]=='successfull') { echo "<b style='color:green;padding:10px'>Data Successfully Updated.</b>"; } ?></div>
				  
				  
				  <div style="margin-left:height:70px; background-color:#9ECFCF; text-align:center"> <?php if($_REQUEST[edit]=='fail') { echo "<b style='color:red;padding:10px'>Error in Data Updation.</b>"; } ?></div>
				  
				  <div style="margin-left:height:70px; background-color:#9ECFCF; text-align:center" class="video-field-new"> <?php if($_REQUEST[delete]=='successfull') { echo "<b style='color:green;padding:10px'>Data Successfully Deleted.</b>"; } ?></div>
				  
				  
				  <div style="margin-left:height:70px; background-color:#9ECFCF; text-align:center"> <?php if($_REQUEST[delete]=='fail') { echo "<b style='color:red;padding:10px'>Error in Data Deletion.</b>"; } ?></div> 
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
				 
					<section id="section-1">
					
						
						
						
					</section>
					
					<section id="section-2">
					
					<?php
					
					$checkrec=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'");
//$checkUser=cek($user,$pass);	

/*if($checkrec){ 
$checkrecords=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'");


}*/



?>
	
						<div class="mediabox" style="width:730px">
							
							
							<form method="post" action="fun/land.php">
							
							<table style="padding-bottom:60px">
							
							 <tr height="40" style="background-color:rgba(255, 235, 215, 0.56)"><td width="160"><b style="color:#FF0000">*</b> Select Land of </td><td style="padding-right:20px; width:200px"><select  class="form-control" name="landtype" id="landtype" >
							 
							 
							 
							 <?php if($checkrec){ ?>
							   <?php if($checkrec->land_of=='Private'){ ?>
							   <option value="Private" selected="selected">Private</option>
							 <option value="Municipality">Municipality</option>
							 <option value="PWD">PWD</option>
							  <option value="Land Department">Land Department</option>
							   <option value="Others">Others</option>
							   
							    <?php } elseif($checkrec->land_of=='Municipality') { ?>
								 <option value="Private" >Private</option>
							 <option value="Municipality" selected="selected">Municipality</option>
							 <option value="PWD">PWD</option>
							  <option value="Land Department">Land Department</option>
							   <option value="Others">Others</option>
							   
							    <?php } elseif($checkrec->land_of=='PWD'){ ?>
							   <option value="Private" >Private</option>
							 <option value="Municipality">Municipality</option>
							 <option value="PWD" selected="selected">PWD</option>
							  <option value="Land Department">Land Department</option>
							   <option value="Others">Others</option>
							   
							    <?php } elseif($checkrec->land_of=='Land Department'){ ?>
							   <option value="Private" >Private</option>
							 <option value="Municipality">Municipality</option>
							 <option value="PWD" >PWD</option>
							  <option value="Land Department" selected="selected">Land Department</option>
							   <option value="Others">Others</option>
							   
							   
							   <?php } elseif($checkrec->land_of=='Others'){ ?>
							   <option value="Private" >Private</option>
							 <option value="Municipality">Municipality</option>
							 <option value="PWD" >PWD</option>
							  <option value="Land Department" >Land Department</option>
							   <option value="Others" selected="selected">Others</option>
							   
							  <?php } elseif($checkrec->land_of=='') { ?>
							  
							 <option value="">---Select---</option>
							 <option value="Private">Private</option>
							 <option value="Municipality">Municipality</option>
							 <option value="PWD">PWD</option>
							  <option value="Land Department">Land Department</option>
							   <option value="Others">Others</option>
							  
							  
							  
							   <?php } } else { ?>
							   <option value="">---Select---</option>
							 <option value="Private">Private</option>
							 <option value="Municipality">Municipality</option>
							 <option value="PWD">PWD</option>
							  <option value="Land Department">Land Department</option>
							   <option value="Others">Others</option>
							   <?php } ?>
							 
							 
							 
							 
							 </select> </td><td style=" width:20px"></td>
						 <td style="width:240px"> <b style="color:#FF0000">*</b> Area of the Pandal in sq. feet </td><td><input  type="text"  id="parea" class="form-control" width="width:20px" 
						
						 name="parea"  size="200"     <?php if($checkrec){ ?>   value="<?php echo $checkrec->pandal_area; ?>"<?php }  ?> /> </td>
						 
						 </tr>
						 
						 
						 <tr height="40" style="background-color:#EEEEDD"><td><b style="color:#FF0000">*</b>  Name of the Land Owner</td><td><input  type="text"  id="landowner" class="form-control" width="width:20px" 
						
						 name="landowner"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->land_owner; ?>"<?php }  ?>   /> </td><td></td>
						 
						 
						 <td style="padding-right:20px; width:200px"> <b style="color:#FF0000">*</b> NOC for using land   obtained or not  </td><td>
						 
						 <select id="lnoc" class="form-control"  name="lnoc" >
							
							  <?php if($checkrec){ ?>
							   <?php if($checkrec->land_noc=='Yes'){ ?>
							    <option value="Yes" selected="selected">Yes</option>
							 <option value="No">No</option>
							   
							    <?php } elseif($checkrec->land_noc=='No') { ?>
								 <option value="Yes">Yes</option>
							 <option value="No" selected="selected">No</option>
							  <?php } elseif($checkrec->land_noc=='') { ?>
							  
							 <option value="">---select---</option>
							 <option value="Yes">Yes</option>
							 <option value="No">No</option>
							  
							  
							  
							   <?php } } else { ?>
							    <option value="">---select---</option>
							 <option value="Yes">Yes</option>
							 <option value="No">No</option>
							   <?php } ?>
							 </select>
						 
						  <?php if($checkrec){ ?>  <input  type="hidden"  
						
						 name="nid"     value="<?php echo $checkrec->id; ?>"/>  <?php }  ?> 
						  </td>
						 </tr>
						
						
						
						 <tr height="40"><td colspan="6" align="center"><input  type="submit"  
						
						 name="submit"  class="myButton"  style="margin-top:20px"<?php if($checkrec->finalize=='Yes'){ ?> disabled="disabled"   <?php } ?>    value="Save & Next"   onClick="return validat();"/>  </td>
						 
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
	 



                      
                      
                    
				  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div>
      <?php include"lib/footer.php"; ?>
    </div><!-- ./wrapper -->


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
	
	
	var landtype=document.getElementById("landtype").value;
	var parea=document.getElementById("parea").value;
	var landowner=document.getElementById("landowner").value;
	var lnoc=document.getElementById("lnoc").value;
	
	
	if((landtype=='') || (landtype=='Null'))
	{
	document.getElementById("landtype").focus();
	alert("Select Land of");
	return false;
	}
	
	if((parea=='') || (parea=='Null'))
	{
	document.getElementById("parea").focus();
	alert("Area of the Pandal in sq. feet can't blank");
	return false;
	}
	
	if((landowner=='') || (landowner=='Null'))
	{
	document.getElementById("landowner").focus();
	alert("Name of the Land Owner can't blank");
	return false;
	}
	if((lnoc=='') || (lnoc=='Null'))
	{
	document.getElementById("lnoc").focus();
	alert("NOC for using land obtained or not can't blank");
	return false;
	}
	
	

	
	
	}
	</script>