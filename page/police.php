<?php
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
				 
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					<section id="section-7">
					<?php
					
					$checkrec=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'");
//$checkUser=cek($user,$pass);	

/*if($checkrec){ 
$checkrecords=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'");


}*/



?>
	
						<div class="mediabox" style="width:700px">
							<form method="post" action="fun/police.php">
							<table style="padding-bottom:60px">
							
							 <tr height="57"><td width="400"    style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;">No. of celebrities during the inauguration with date and time
<input  type="text"  id="celedet" class="form-control" width="width:20px" 
						
						 name="celedet"   size="200"  <?php if($checkrec){ ?>   value="<?php echo $checkrec->ing_cele_details; ?>"<?php }  ?> /> </td>
						 
						 </tr>
						 
						 
						  <tr height="20"></tr>
						 <tr height="57"><td style="background-color:#EEEEDD;padding:20px 10px 20px;">Details of the cultural function in the puja pandal, if any date and duration:<input  type="text"  id="culdet" class="form-control" width="width:20px" 
						
						 name="culdet"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->cul_details; ?>"<?php }  ?>/> </td>
						 </tr>
						  <tr height="20"></tr>
						 
						 <tr height="57"><td  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;">Name of the celebrity artist attending the cultural function (date wise)<input  type="text"  id="artdet" class="form-control" width="width:20px" 
						
						 name="artdet"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->artist_details; ?>"<?php }  ?>/> </td>
						 </tr>
						
						 <tr height="20"></tr>
						
						<tr height="57"><td style="background-color:#EEEEDD; padding:20px 10px 20px;">Permision from phonographic performace limited(PPL) obtained Yes/No. 

<input  type="text"  id="pplper" class="form-control" width="width:20px" 
						
						 name="pplper"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->ppl_per; ?>"<?php }  ?>/> </td>
						 </tr>
						  <tr height="20"></tr>
						 <tr height="57"  style="background-color:rgba(255, 235, 215, 0.56);padding:20px 10px 20px;"><td> <b style="color:#FF0000">* </b>Dimension of the pandal (height length breath)
<input  type="text"  id="pandaldim" class="form-control" width="width:20px" 
						
						 name="pandaldim"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->pandal_dim; ?>"<?php }  ?>/> </td>
						 </tr>
						 
						  <tr height="20"></tr>
						  <tr height="57"><td style="background-color:#EEEEDD; padding:20px 10px 20px;"><b style="color:#FF0000">* </b>No. of volunteers to be deployed  <input  type="text"  id="volunno" class="form-control" width="width:20px" 
						
						 name="volunno"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->volun_no; ?>"<?php }  ?>/> </td>
						 </tr> <tr height="20"></tr>
						  <tr height="57"><td  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><b style="color:#FF0000">* </b>Number of entry points and width of each <input  type="text"  id="entrydet" class="form-control" width="width:20px" 
						
						 name="entrydet"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->entry_point_det; ?>"<?php }  ?>/> </td>
						 </tr> <tr height="20"></tr>
						  <tr height="57"><td style="background-color:#EEEEDD; padding:20px 10px 20px;"><b style="color:#FF0000">* </b>Number of exit point and width of each<input  type="text"  id="exitdet" class="form-control" width="width:20px" 
						
						 name="exitdet"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->exit_point_det; ?>"<?php }  ?>/> </td>
						 </tr> <tr height="20"></tr>
						 
						  <tr height="57"><td  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"> <b style="color:#FF0000">* </b>Whether adequate barricading will be made for crowd control (Y/N)<input  type="text"  id="crowdcont" class="form-control" width="width:20px" 
						
						 name="crowdcont"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->crowd_cont; ?>"<?php }  ?>/> </td>
						 </tr> <tr height="20"></tr>
						
 <tr height="40"><td style="background-color:#EEEEDD;padding:20px 10px 20px;"> <b style="color:#FF0000">* </b>Whether High Court guideline will be adhere to incase the encroachment of roads/through  fares in any way
 
 
 
 <select   id="highcont" class="form-control"  name="highcont">
							
							  <?php if($checkrec){ ?>
							   <?php if($checkrec->high_court=='Yes'){ ?>
							    <option value="Yes" selected="selected">Yes</option>
							 <option value="No">No</option>
							   
							    <?php } elseif($checkrec->high_court=='No') { ?>
								 <option value="Yes">Yes</option>
							 <option value="No" selected="selected">No</option>
							  <?php } elseif($checkrec->high_court=='') { ?>
							  
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
						 </tr> <tr height="20"></tr>
						<tr height="57"  style="background-color:rgba(255, 235, 215, 0.56);padding:20px 10px 20px;"><td> <b style="color:#FF0000">* </b>Date of immersion

<input  type="date"  id="dtimm" class="form-control" width="width:20px" 
						
						 name="dtimm"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->imm_date; ?>"<?php }  ?>/> </td>
						 </tr> <tr height="20"></tr>
						 <tr height="57"><td style="background-color:#EEEEDD;padding:20px 10px 20px;"> <b style="color:#FF0000">* </b>Place of immersion


<input  type="text"  id="plimm" class="form-control"  width="width:20px" 
						
						 name="plimm"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->imm_place; ?>"<?php }  ?>/> </td>
						 </tr> <tr height="20"></tr>
						 <tr height="57"><td  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><b style="color:#FF0000">* </b> Rout of the procession, if any (in case of holding immersion procession)



<input  type="text"  id="prort" class="form-control" width="width:20px" 
						
						 name="prort"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->proc_route; ?>"<?php }  ?>/> </td>
						 </tr> <tr height="20"></tr>
						 <tr height="57"><td style="background-color:#EEEEDD; padding:20px 10px 20px;"><b style="color:#FF0000">* </b> Time of immersion procession from       to




<input  type="text"  id="protime" class="form-control" width="width:20px" 
						
						 name="protime"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->proc_time; ?>"<?php }  ?>/> </td>
						 </tr> <tr height="20"></tr>
						  <tr height="57"><td  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><b style="color:#FF0000">* </b>Expected crowd strength in the immersion procession





<input  type="text"  id="procrowd" class="form-control" width="width:20px" 
						
						 name="procrowd"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->proc_crowd; ?>"<?php }  ?>/> </td>
						 </tr> <tr height="20"></tr>
						  <tr height="57"><td style="background-color:#EEEEDD; padding:20px 10px 20px;"><b style="color:#FF0000">* </b>No. of musicians/bands, if any in the immersion procession




<input  type="text"  id="promusc" class="form-control" width="width:20px" 
						
						 name="promusc"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->proc_musician; ?>"<?php }  ?>/> </td>
						 </tr> <tr height="20"></tr>
						  <tr height="57"><td  style="background-color:rgba(255, 235, 215, 0.56);padding:20px 10px 20px;"><b style="color:#FF0000">* </b>No. and type of vehicles used in procession 



<input  type="text"  id="proveh" class="form-control" width="width:20px" 
						
						 name="proveh"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->porc_vehicle; ?>"<?php }  ?>/> </td>
						 </tr> <tr height="20"></tr>
						 <tr height="57"><td style="background-color:#EEEEDD; padding:20px 10px 20px;"><b style="color:#FF0000">* </b>Height of the idol on vehicle from ground (in feet)
<input  type="text"  id="idolht" class="form-control" width="width:20px" 
						
						 name="idolht"   <?php if($checkrec){ ?>   value="<?php echo $checkrec->idol_height; ?>"<?php }  ?> /> </td>
						 </tr>
						  <tr height="20"></tr>
						  <tr height="57"><td  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><b style="color:#FF0000">* </b>Do you want to register your club for financial aid for low budget puja



<select id="finaid" class="form-control"  name="finaid">
							
							  <?php if($checkrec){ ?>
							   <?php if($checkrec->fin_aid=='Yes'){ ?>
							    <option value="Yes" selected="selected">Yes</option>
							 <option value="No">No</option>
							   
							    <?php } elseif($checkrec->fin_aid=='No') { ?>
								 <option value="Yes">Yes</option>
							 <option value="No" selected="selected">No</option>
							  <?php } elseif($checkrec->fin_aid=='') { ?>
							  
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
						
						 name="nid"     value="<?php echo $checkrec->id; ?>" />  <?php }  ?> </td>
						 </tr>
						 
						  <tr height="20"></tr>
						 <tr height="57"><td ><p>Undertaking</p>
<p>I, hereby declared that all statements made on the application are true, complete and correct to the best of my knowledge and belief. I understand that in the event of any information being found untrue or incorrect at any stage, this application is liable to rejected. 
</p>
<p><b style="color:#FF0000">* </b> Agree
<input  type="checkbox" <?php if($checkrec->police_agree=='on'){ ?>   checked="checked"<?php }  ?> id="policeagre"  width="width:20px" 
						
						 name="policeagre"    /> </p></td>
						 </tr>
						 
						 <tr height="40"><td colspan="6" align="center"><input  type="submit"  
						
						 name="submit"   <?php if($checkrec->finalize=='Yes'){ ?> disabled="disabled"   <?php } ?>   class="myButton"  value="Save & Next"  onClick="return validat();"/>   </td>
						 
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
    <?php include "lib/footer.php"; ?>
    </div><!-- ./wrapper -->

   <script>
	function validat()
	{
	
	
	
	var pandaldim=document.getElementById("pandaldim").value;
	var volunno=document.getElementById("volunno").value;
	var entrydet=document.getElementById("entrydet").value;
	var exitdet=document.getElementById("exitdet").value;
	
	var crowdcont=document.getElementById("crowdcont").value;
	var highcont=document.getElementById("highcont").value;
	
	var dtimm=document.getElementById("dtimm").value;
	var plimm=document.getElementById("plimm").value;
	var prort=document.getElementById("prort").value;
	var protime=document.getElementById("protime").value;
	
	var procrowd=document.getElementById("procrowd").value;
	var promusc=document.getElementById("promusc").value;
	
	
	
	var proveh=document.getElementById("proveh").value;
	var idolht=document.getElementById("idolht").value;
	var finaid=document.getElementById("finaid").value;

	if((pandaldim=='') || (pandaldim=='Null'))
	{
	document.getElementById("pandaldim").focus();
	alert(" Dimension of the pandal (height length breath) can't blank");
	return false;
	}
	
	
	if((volunno=='') || (volunno=='Null'))
	{
	document.getElementById("volunno").focus();
	alert("No. of volunteers to be deployed can't blank");
	return false;
	}
	
	if((entrydet=='') || (entrydet=='Null'))
	{
	document.getElementById("entrydet").focus();
	alert("Number of entry points and width of each can't blank");
	return false;
	}
	if((exitdet=='') || (exitdet=='Null'))
	{
	document.getElementById("exitdet").focus();
	alert("Number of exit point and width of each can't blank");
	return false;
	}
	
	
	if((crowdcont=='') || (crowdcont=='Null'))
	{
	document.getElementById("crowdcont").focus();
	alert("Whether adequate barricading will be made for crowd control (Y/N) can't blank");
	return false;
	}
	if((highcont=='') || (highcont=='Null'))
	{
	document.getElementById("highcont").focus();
	alert("Whether High Court guideline will be adhere to incase the encroachment of roads/through fares in any way can't blank");
	return false;
	}
	if((dtimm=='') || (dtimm=='Null'))
	{
	document.getElementById("dtimm").focus();
	alert("Date of immersion can't blank");
	return false;
	}if((plimm=='') || (plimm=='Null'))
	{
	document.getElementById("plimm").focus();
	alert("Place of immersion can't blank");
	return false;
	}
	if((prort=='') || (prort=='Null'))
	{
	document.getElementById("prort").focus();
	alert("Rout of the procession, if any (in case of holding immersion procession) to can't blank");
	return false;
	}if((protime=='') || (protime=='Null'))
	{
	document.getElementById("protime").focus();
	alert("Time of immersion procession from to can't blank");
	return false;
	}if((procrowd=='') || (procrowd=='Null'))
	{
	document.getElementById("procrowd").focus();
	alert("Expected crowd strength in the immersion procession can't blank");
	return false;
	}
	if((promusc=='') || (promusc=='Null'))
	{
	document.getElementById("promusc").focus();
	alert("No of musicians/bands, if any in the immersion procession can't blank");
	return false;
	}
	
	if((proveh=='') || (proveh=='Null'))
	{
	document.getElementById("proveh").focus();
	alert("No and type of vehicles used in procession can't blank");
	return false;
	}if((idolht=='') || (idolht=='Null'))
	{
	document.getElementById("idolht").focus();
	alert("Height of the idol on vehicle from ground (in feet) can't blank");
	return false;
	}
	if((finaid=='') || (finaid=='Null'))
	{
	document.getElementById("finaid").focus();
	alert("Do you want to register your club for financial aid for low budget puja can't blank");
	return false;
	}
	
	
	
	
	
	
	if(document.getElementById("policeagre").checked== false)
	{
	document.getElementById("policeagre").focus();
	alert(" Agree can't blank");
	return false;
	}
	if(document.getElementById("policeagre").checked== true)
	{
	return true;
	
	}
	

	
	
	}
	</script>