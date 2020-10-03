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
		  <div style="margin-left:height:70px; background-color:#9ECFCF; text-align:center" class="video-field-new"> <?php if($_REQUEST[delete]=='successfull') { echo "<b style='color:green;padding:10px'>Data Successfully Deleted.</b>"; } ?></div>
		  <div style="margin-left:height:70px; background-color:#9ECFCF; text-align:center"> <?php if($_REQUEST[delete]=='fail') { echo "<b style='color:red;padding:10px'>Error in Data Deletion.</b>"; } ?></div>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
                <!-- /.box -->
                <div id="overlay_form" style="display:none;z-index:9999999"></div>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
 	                <div>
 	                    <?php include"lib/menu_horizontal.php"; ?>
				        <div class="content">
					<section id="section-8">
						<?php $checkrec=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'"); ?>
						<div class="mediabox" style="width:700px">
							<form method="post" action="fun/upload.php" enctype="multipart/form-data">
							<table style="padding-bottom:60px">
							    <tr height="50">
							        <td width="300" style="color:#FF0000"><b style="color:#FF0000">*</b> Note: All files must be (.pdf|.jpg|.png) type each of Maximum 1MB.</td>
							        <td>
							            <div style="margin-left:height:70px; background-color:#9ECFCF; text-align:center">
							                <?php if($_REQUEST[msg]=='error') { echo "<b style='color:red;padding:10px'>Error in file upload, please try again.</b>"; } ?>
						                </div>
					                </td>
				                </tr>
							    <tr height="50"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;">
							        <td width="300" ><b style="color:#FF0000">*</b> Resolution of meeting for conducting puja <strong  style="color:#FF0000">(Max 1MB)</strong></td>
							        <td>
							            <input  type="file"  id="file_res_copy" class="form-control" width="width:20px" name="file_res_copy" size="200" />
							            <input  type="hidden"  id="file_res_copy_old" class="form-control" width="width:20px" name="file_res_copy_old" size="200" value="<?=$checkrec->file_res_copy?>"/>
					                </td>
					                <td><?php if($checkrec){ echo $checkrec->file_res_copy; } ?></td>
				                </tr>
						 
						 
						 
						 <tr height="50" style="background-color:#EEEEDD">
						     <td><b style="color:#FF0000">*</b> Member Details with phone No. <strong  style="color:#FF0000">(Max 1MB)</strong></td>
						     <td>
						         <input  type="file"  id="file_mem_det" class="form-control" width="width:20px" 
						
						 name="file_mem_det"    />
						 
						  <input  type="hidden"  id="file_mem_det_old" class="form-control" width="width:20px" 
						
						 name="file_mem_det_old"   size="200"  value="<?php echo $checkrec->file_mem_det; ?>"   />
						  </td><td><?php if($checkrec){ ?>   <?php echo $checkrec->file_mem_det; ?><?php }  ?> </td>
						 </tr>
						 
						 
						 <tr height="50"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;">
						     <td><b style="color:#FF0000">*</b> NOC for Land of Pandal <strong  style="color:#FF0000">(Max 1MB)</strong></td><td><input  type="file"  id="file_noc_land" class="form-control" width="width:20px" 
						
						 name="file_noc_land"    /> <input  type="hidden"  id="file_noc_land" class="form-control" width="width:20px" 
						
						 name="file_noc_land_old"   size="200"  value="<?php echo $checkrec->file_noc_land; ?>"   /></td><td><?php if($checkrec){ ?>   <?php echo $checkrec->file_noc_land; ?><?php }  ?> </td>
						 </tr>
						
						 <tr height="50" style="background-color:#EEEEDD">
						     <td><b style="color:#FF0000">*</b> Site Plan with Pandal Layout <strong  style="color:#FF0000">(Max 1MB)</strong></td><td><input  type="file"  id="file_site_plan" class="form-control" width="width:20px" 
						
						 name="file_site_plan"    />
						 
						 <input  type="hidden"  id="file_site_plan" class="form-control" width="width:20px" 
						
						 name="file_site_plan_old"   size="200"  value="<?php echo $checkrec->file_site_plan; ?>"   />
						 
						  </td><td><?php if($checkrec){ ?>   <?php echo $checkrec->file_site_plan; ?><?php }  ?> </td>
						 </tr>  
						 
						
						<tr height="50"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;">
						    <td><b style="color:#FF0000">*</b> Last Years puja permision copy <strong  style="color:#FF0000">(Max 1MB)</strong></td><td><input  type="file"  id="file_last_puja_per" class="form-control" width="width:20px" 
						
						 name="file_last_puja_per"    /> <input  type="hidden"  id="file_last_puja_per" class="form-control" width="width:20px" 
						
						 name="file_last_puja_per_old"   size="200"  value="<?php echo $checkrec->file_last_puja_per; ?>"   /> </td><td><?php if($checkrec){ ?>   <?php echo $checkrec->file_last_puja_per; ?><?php }  ?> </td>
						 </tr>
						 <tr height="50" style="background-color:#EEEEDD">
						     <td><b style="color:#FF0000">*</b> Payment/Fees copy of WBSEDCL <strong  style="color:#FF0000">(Max 1MB)</strong></td><td>
<input  type="file"  id="file_pmnt_electric" class="form-control" width="width:20px" 
						
						 name="file_pmnt_electric"    />  <input  type="hidden"  id="file_pmnt_electric" class="form-control" width="width:20px" 
						
						 name="file_pmnt_electric_old"   size="200"  value="<?php echo $checkrec->file_pmnt_electric; ?>"   /></td><td><?php if($checkrec){ ?>   <?php echo $checkrec->file_pmnt_electric; ?><?php }  ?> </td>
						 </tr>
						 <tr height="50"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;">
						     <td><b style="color:#FF0000">*</b>Copy of first page of Bank pass book indicating account number & IFSC code <strong  style="color:#FF0000">(Max 1MB)</strong></td><td><input  type="file"  id="file_bank_p_book" class="form-control" width="width:20px" 
						
						 name="file_bank_p_book"    />  <input  type="hidden"  id="file_bank_p_book" class="form-control" width="width:20px" 
						
						 name="file_bank_p_book_old"   size="200"  value="<?php echo $checkrec->file_bank_p_book; ?>"   /></td><td><?php if($checkrec){ ?>   <?php echo $checkrec->file_bank_p_book; ?><?php }  ?> </td>
						 </tr>
						 
						  <tr height="50" style="background-color:#EEEEDD">
						      <td><b style="color:#FF0000">*</b> Payment/Fees copy of fire service <strong  style="color:#FF0000">(Max 1MB)</strong></td><td> <input  type="file"  id="file_fire_pay" class="form-control" width="width:20px" 
						
						 name="file_fire_pay"    /> <input  type="hidden"  id="file_fire_pay" class="form-control" width="width:20px" 
						
						 name="file_fire_pay_old"   size="200"  value="<?php echo $checkrec->file_fire_pay; ?>"   /></td><td><?php if($checkrec){ ?>   <?php echo $checkrec->file_fire_pay; ?><?php }  ?> </td>
						 </tr>
						  <tr height="50"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;">
						      <td><b style="color:#FF0000">*</b> Filled up Municipality Form <strong  style="color:#FF0000">(Max 1MB)</strong></td><td><input  type="file"  id="file_muni_form" class="form-control" width="width:20px" 
						
						 name="file_muni_form"    /> <input  type="hidden"  id="file_muni_form" class="form-control" width="width:20px" 
						
						 name="file_muni_form_old"   size="200"  value="<?php echo $checkrec->file_muni_form; ?>"   /></td><td><?php if($checkrec){ ?>   <?php echo $checkrec->file_muni_form; ?><?php }  ?> </td>
						 </tr>
						  <tr height="50" style="background-color:#EEEEDD">
						      <td><b style="color:#FF0000">*</b> Payment/Fees copy of Municipality <strong  style="color:#FF0000">(Max 1MB)</strong></td><td><input  type="file"  id="file_muni_pay" class="form-control" width="width:20px" 
						
						 name="file_muni_pay"    />  <input  type="hidden"  id="file_muni_pay" class="form-control" width="width:20px" 
						
						 name="file_muni_pay_old"   size="200"  value="<?php echo $checkrec->file_muni_pay; ?>"   /></td><td><?php if($checkrec){ ?>   <?php echo $checkrec->file_muni_pay; ?><?php }  ?> </td>
						 </tr>
						 
						 
						
						 
						 <tr height="40"><td colspan="7" align="center"><input  type="submit"  
						
						 name="submit"  <?php if($checkrec->finalize=='Yes'){ ?> disabled="disabled"   <?php } ?>     value="Save & Next"  class="myButton" /> </td>
						 <?php if($checkrec){ ?>  <input  type="hidden"  
						
						 name="nid"     value="<?php echo $checkrec->id; ?>" /><?php } ?> 
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
	 



                      
                      
                    
				
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div>
	  
<?php include"lib/footer.php";?>
    </div><!-- ./wrapper -->