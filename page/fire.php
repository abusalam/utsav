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
				 
					
					
					
					
					
					
					<section id="section-4">
					<?php
					
					$checkrec=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'");
//$checkUser=cek($user,$pass);	

/*if($checkrec){ 
$checkrecords=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'");


}*/



?>
						<div class="mediabox" style="width:700px">
							<form method="post" action="fun/fire.php">
							<table style="padding-bottom:60px">
							
							 <tr height="77"><td width="400"><b style="color:#FF0000">*</b> Area of the pandal:<input  type="text"  id="pandalarea" class="form-control" width="width:20px" 
						
						 name="pandalarea"   size="200"   <?php if($checkrec){ ?>   value="<?php echo $checkrec->fir_pandal_area; ?>"<?php }  ?> /> </td>
						 
						 </tr>
						 
						 
						 <tr height="77"><td><b style="color:#FF0000">*</b> Height of the Pandal: <input  type="text"  id="hpandal" class="form-control" width="width:20px" 
						
						 name="hpandal"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->fir_pandal_height; ?>"<?php }  ?> /> </td>
						 </tr>
						
						
						 <tr height="77"><td><b style="color:#FF0000">*</b> Number of persons expected to be present at a time in the pandal:<input  type="text"  id="noinpandal" class="form-control" width="width:20px" 
						
						 name="noinpandal"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->fir_persn_present; ?>"<?php }  ?> /> </td>
						 </tr>
						
						 <tr height="77"><td><b style="color:#FF0000">*</b> Material used for construction in the pandal (in brief):<input  type="text"  id="material" class="form-control" width="width:20px" 
						
						 name="material"     <?php if($checkrec){ ?>   value="<?php echo $checkrec->fir_material_cons_pandal; ?>"<?php }  ?>/> </td>
						 </tr>
						 
						 
						 <tr height="77"><td><p>Undertaking</p>
<p>We hereby declared that we shall abide by the following rules and regulations for social security and safety in all respect and on behalf of the puja committee.</p>
<p>1.  Government license holder electric contractor and decorator with valid license number will be appointed for the electrification and erection of puja pandal</p>
<p>2. Separate entrance and exit for cover puja pandal shall be provided.</p><p>3. 
Enough place for movement of fire and Emergency service medical  shall be maintained.</p>
<p>4.
Width and the height of the gate 12ft. and 14ft. respectively, and  height of the superstructure shall not be more than 40ft.</p><p>5.
No open flame can be used within 200 yrds from the Puja Pandal and no cooking arrangement could be allowed within such radius.</p><p>6. 
Use of heigh inflammable materials for erection of the Pandal is discarded.</p><p>7. 
Cloths used for the Pandal to be dipped in fire retardant solution.</p>
<p>8. 
Provision of sufficient water of the fighting which shall not be less than 0.75Ltrs. Per Sq. Mtrs. Of floor area which pandal /structure and ISI marked appropriate fire extinguisher  @minimum  02 (two) per thousand sq. feet floor area, two nos. ceiling hook, lodder and sand bucket to be kept ready in the Pandal for fighting the small fire.</p><p>9. 
There must be a 04 (four) feet clear open space from the poperty line of the building, boundary wall or any other permanent structure as per judgment of the Hon'ble High Court, Calcutta Vid W.T.No.856 of 2009 dated 15.09.2009.</p>


<b style="color:#FF0000">* </b>
<span> Agree </span>
<span  style="padding-top:20px">
    <input  type="checkbox"  id="fireagree"  width="width:20px" name="fireagree" <?php if($checkrec->fir_agree=='on') { echo 'checked="checked"'; } ?>/>
<?php if($checkrec):?>
    <input  type="hidden" name="nid" value="<?=$checkrec->id?>"/>
<?php endif ?>
</span>
</td>
						 </tr>
						<tr height="40"><td colspan="6" align="center"><input  type="submit"  
						
						 name="submit"  class="myButton"  <?php if($checkrec->finalize=='Yes'){ ?> disabled="disabled"   <?php } ?>    value="Save & Next" onClick="return validat();"/>  </td>
						 
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
   <script>
	function validat()
	{
	
	
	
	var pandalarea=document.getElementById("pandalarea").value;
	var hpandal=document.getElementById("hpandal").value;
	var noinpandal=document.getElementById("noinpandal").value;
	var material=document.getElementById("material").value;
	
	
	if((pandalarea=='') || (pandalarea=='Null'))
	{
	document.getElementById("pandalarea").focus();
	alert("Area of the pandal can't blank");
	return false;
	}
	
	
	if((hpandal=='') || (hpandal=='Null'))
	{
	document.getElementById("hpandal").focus();
	alert("Height of the Pandal can't blank");
	return false;
	}
	
	if((noinpandal=='') || (noinpandal=='Null'))
	{
	document.getElementById("noinpandal").focus();
	alert("Number of persons expected to be present at a time in the pandal can't blank");
	return false;
	}
	if((material=='') || (material=='Null'))
	{
	document.getElementById("material").focus();
	alert("Material used for construction in the pandal (in brief) can't blank");
	return false;
	}
	
	
	if(document.getElementById("fireagree").checked== false)
	{
	document.getElementById("fireagree").focus();
	alert(" Agree can't blank");
	return false;
	}
	if(document.getElementById("fireagree").checked== true)
	{
	return true;
	
	}
	

	
	
	}
	</script>