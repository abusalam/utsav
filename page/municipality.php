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
				 
					
					
					
					
					
					
					
					
					
					
					
					<section id="section-6">
					
					<?php
					
					$checkrec=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'");
//$checkUser=cek($user,$pass);	

/*if($checkrec){ 
$checkrecords=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'");


}*/



?>
						<div class="mediabox" style="width:700px">
							<form method="post" action="fun/muni.php">
							<table style="padding-bottom:60px">
							
							 <tr height="77"><td width="400" style="padding-right:20px"><b style="color:#FF0000">* </b>Form Sl. No. of Municipality<input  type="text"  id="formsl" class="form-control" width="width:20px" 
						
						 name="formsl"   size="270" style="padding-right:20px"  <?php if($checkrec){ ?>   value="<?php echo $checkrec->muni_form_no; ?>"<?php }  ?> /></td>
						 
						
						 
						 
						<td style="padding-left:70px"><b style="color:#FF0000">* </b>Since how many years Puja continue: <input  type="text"  id="pujacont" class="form-control" width="width:20px" 
						
						 name="pujacont"   style="padding-right:20px"   <?php if($checkrec){ ?>   value="<?php echo $checkrec->puja_year_since; ?>"<?php }  ?>/> </td>
						 </tr>
						
						
						 <tr height="77"><td style="padding-right:20px"><b style="color:#FF0000">* </b>Last year expenditure:<input  type="text"  id="lastexp" class="form-control" width="width:20px" 
						
						 name="lastexp"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->exp_last_year; ?>"<?php }  ?> /> </td>
						 <td style="padding-left:70px"><b style="color:#FF0000">* </b>Budget for this year:<input  type="text"  id="budget" class="form-control" width="width:20px" 
						
						 name="budget"     <?php if($checkrec){ ?>   value="<?php echo $checkrec->present_budget; ?>"<?php }  ?>/> </td>
						 </tr>
						 
						 
						 <tr height="77"><td style="padding-right:20px"><b style="color:#FF0000">* </b> Place of Immersion of Idol<input  type="text"  id="immplace" class="form-control" width="width:20px" 
						
						 name="immplace"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->imm_place; ?>"<?php }  ?> /> </td>
						 <td style="padding-left:70px"><b style="color:#FF0000">* </b>Date of Immersion<input  type="date"  id="date" class="form-control" width="width:20px" 
						
						 name="immdate"   size="200"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->imm_date; ?>"<?php }  ?>/> </td>
						 </tr>
						 
						 
						  <tr height="77"><td colspan="2"><b style="color:#FF0000">* </b>Mention Security Arrangments for puja Pandal <input  type="text"  id="secuarng" class="form-control" width="width:20px" 
						
						 name="secuarng"     <?php if($checkrec){ ?>   value="<?php echo $checkrec->secu_arrg; ?>"<?php }  ?>/> </td>
						 </tr>
						  <tr height="77"><td colspan="2"><b style="color:#FF0000">* </b>Mention arrangments  for Spectators <input  type="text"  id="specarng" class="form-control" width="width:20px" 
						
						 name="specarng"     <?php if($checkrec){ ?>   value="<?php echo $checkrec->spec_arrg; ?>"<?php }  ?>/> </td>
						 </tr>
						  <tr height="77"><td colspan="2"><b style="color:#FF0000">* </b>Provide details, if Pandal encroaching  the Municipality road <input  type="text"  id="encro" class="form-control" width="width:20px" 
						
						 name="encro"     <?php if($checkrec){ ?>   value="<?php echo $checkrec->det_encro_muni; ?>"<?php }  ?>/> <?php if($checkrec){ ?>  <input  type="hidden"  
						
						 name="nid"     value="<?php echo $checkrec->id; ?>" />  <?php }  ?> </td>
						 </tr>
						 
						 <tr height="40"><td colspan="6" align="center"><input  type="submit"  
						
						 name="submit"   class="myButton" <?php if($checkrec->finalize=='Yes'){ ?> disabled="disabled"   <?php } ?>    value="Save & Next"  onClick="return validat();"/>   </td>
						 
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
	
	
	var formsl=document.getElementById("formsl").value;
	var pujacont=document.getElementById("pujacont").value;
	var lastexp=document.getElementById("lastexp").value;
	var budget=document.getElementById("budget").value;
	var immplace=document.getElementById("immplace").value;
	var date=document.getElementById("date").value;
	var secuarng=document.getElementById("secuarng").value;
	var specarng=document.getElementById("specarng").value;
	var encro=document.getElementById("encro").value;
	
	
	


	if((formsl=='') || (formsl=='Null'))
	{
	document.getElementById("formsl").focus();
	alert(" Form Sl. No. of Municipality can't blank");
	return false;
	}
	
	if((pujacont=='') || (pujacont=='Null'))
	{
	document.getElementById("pujacont").focus();
	alert("Since how many years Puja continue can't blank");
	return false;
	}
	
	
	if((lastexp=='') || (lastexp=='Null'))
	{
	document.getElementById("lastexp").focus();
	alert("Last year expenditure can't blank");
	return false;
	}
	
	if((budget=='') || (budget=='Null'))
	{
	document.getElementById("budget").focus();
	alert("Budget for this year can't blank");
	return false;
	}
	if((immplace=='') || (immplace=='Null'))
	{
	document.getElementById("immplace").focus();
	alert("Place of Immersion of Idol can't blank");
	return false;
	}
	if((date=='') || (date=='Null'))
	{
	document.getElementById("date").focus();
	alert("Date of Immersion( can't blank");
	return false;
	}
	if((secuarng=='') || (secuarng=='Null'))
	{
	document.getElementById("secuarng").focus();
	alert("Mention Security Arrangments for puja pandal can't blank");
	return false;
	}
	if((specarng=='') || (specarng=='Null'))
	{
	document.getElementById("specarng").focus();
	alert(" Mention arrangments for Spectators can't blank");
	return false;
	}
	if((encro=='') || (encro=='Null'))
	{
	document.getElementById("encro").focus();
	alert("Provide details, if Pandal encroaching the Municipality road can't blank");
	return false;
	}

	
	
	

	
	
	}
	</script>