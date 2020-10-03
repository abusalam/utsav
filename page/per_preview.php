<?php
error_reporting(0);
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
<div id="overlay_form" style="display:none;z-index:9999999">
 </div>
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
				
                  
					
				


	

	
 
 	<div>
				
						
				<div class="content">
				 
					<section id="section-8">
						<?php $dataset=$ob->get_rec("application","*","id='".$_REQUEST[id]."'","");?>
						<div class="mediabox" style="width:700px">
							<table style="padding-bottom:60px">
							
							
							
							
							
							
							
					
					 <tr height="26"  style="background-color:#EEEEDD; padding:20px 10px 20px;"><td width="300" >  &nbsp; Organisation/Club: </td><td>
<?php if($dataset->elec_per!='')
							 {  echo "<label style='color:#0000CC'>$dataset->org_name</label>" ;?>
							 


<?php } else  { ?>
<label style="color:#FF0000"> </label>
<?php }  ?></td>
						 
						 </tr>
					
					 <tr height="20"  style="background-color:#EEEEDD; padding:20px 10px 20px;"><td width="300" > &nbsp; Application ID:</td><td width="300" ><?php echo "<label style='color:#0000CC'>$dataset->app_id</label>" ;?></td>
						 
						 </tr>
						<tr height="50"  style="background-color:#EEEEDD padding:20px 10px 20px;"><td width="300"  colspan="2"></td>
						 
						 </tr>	
							
							 <tr height="50"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><td width="300" ><b style="color:#FF0000">*</b> WBSEDCL (7449302653)</td><td>
<?php

if($dataset->elec_per=='Yes') {
    echo "<label style='color:#006600'>Permitted on $dataset->elec_per_date</label>" ;
} else if($dataset->elec_per=='No') {
    echo "<label style='color:#FF0000'>Rejected on $dataset->elec_per_date</label>" ; 
} else {
    echo '<label style="color:#0000FF">Pending </label>';
}

?>
</td></tr>
<tr height="50" style="background-color:#EEEEDD"><td><b style="color:#FF0000">*</b> Fire Department (03512-278854)</td><td>
<?php 

if($dataset->fir_per=='Yes') {
    echo "<label style='color:#006600'>Permitted on $dataset->fir_per_date</label>" ;
} else if($dataset->elec_per=='No') {
    echo "<label style='color:#FF0000'>Rejected on $dataset->fir_per_date</label>" ; 
} else {
    echo '<label style="color:#0000FF">Pending </label>';
}  

?>
</td></tr>
<tr height="50"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><td><b style="color:#FF0000">*</b> Pollution Department</td><td>
<?php

if($dataset->polution_per=='Yes') {
    echo "<label style='color:#006600'>Permitted on $dataset->polution_per_date</label>";
} else if($dataset->polution_per=='No') {
    echo "<label style='color:#FF0000'>Rejected on $dataset->polution_per_date</label>" ; 
} else  {
    echo '<label style="color:#0000FF">Pending </label>';
}  
?>
</td></tr>
<tr height="50" style="background-color:#EEEEDD"><td><b style="color:#FF0000">*</b> Municipality (EBM:03512252324/9434120207/9434186130 OMM:03512-260235/9476375079)</td><td>
<?php

if($dataset->muni_per=='Yes'){
    echo "<label style='color:#006600'>Permitted on $dataset->muni_per_date</label>" ;
} else if($dataset->muni_per=='No') {
    echo "<label style='color:#FF0000'>Rejected on $dataset->muni_per_date</label>" ; 
} else {
    echo '<label style="color:#0000FF">Pending </label>';
}

?>
</td></tr>  
<tr height="50"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><td><b style="color:#FF0000">*</b> Police Department</td><td>
<?php

if($dataset->police_per=='Yes') {
    echo "<label style='color:#006600'>Permitted on $dataset->police_per_date</label>" ;
} else if($dataset->police_per=='No') {
    echo "<label style='color:#FF0000'>Rejected on $dataset->police_per_date</label>" ; 
} else {
    echo '<label style="color:#0000FF">Pending </label>'; 
}

?>
</td></tr>
</table>

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
	  
    <?php include"lib/footer.php"; ?>
    </div><!-- ./wrapper -->
