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
				
						
				<div class="content">
				 
					<section id="section-8">
						<?php $dataset=$ob->get_rec("application","*","id='".$_REQUEST[id]."'",""); ?>
						<div class="mediabox" style="width:700px">
							<table style="padding-bottom:60px">

							 <tr height="50"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><td width="300" ><b style="color:#FF0000">*</b> Resolution of meeting for conducting puja </td><td>
<?php if($dataset->file_res_copy!='')
							 { ?>
							 

<a href="doc/res/<?php echo $dataset->file_res_copy; ?>"  target="_blank">Click to view</a>
<?php } else  { ?>
<a href="indexes.php?action=notdocupload"  target="_blank" style="color:#FF0000">Not uploaded</a>
<?php }  ?></td>
						 
						 </tr>
						 
						 
						 
						 <tr height="50" style="background-color:#EEEEDD"><td><b style="color:#FF0000">*</b> Member Details with phone No.</td><td><?php if($dataset->file_res_copy!='')
							 { ?>
							 

<a href="doc/member/<?php echo $dataset->file_mem_det; ?>"  target="_blank">Click to view</a>
<?php } else  { ?>
<a href="indexes.php?action=notdocupload"  target="_blank" style="color:#FF0000">Not uploaded</a>
<?php }  ?>
						  </td>
						 </tr>
						 
						 
						 <tr height="50"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><td><b style="color:#FF0000">*</b> NOC for Land of Pandal</td><td><?php if($dataset->file_noc_land!='')
							 { ?><a href="doc/Land_NOC/<?php echo $dataset->file_noc_land; ?>"  target="_blank">Click to view</a><?php } else  { ?>
<a href="indexes.php?action=notdocupload"  target="_blank" style="color:#FF0000">Not uploaded</a>
<?php }  ?></td>
						 </tr>
						
						 <tr height="50" style="background-color:#EEEEDD"><td><b style="color:#FF0000">*</b> Site Plan with Pandal Layout</td><td><?php if($dataset->file_site_plan!='')
							 { ?><a href="doc/siteplan/<?php echo $dataset->file_site_plan; ?>"  target="_blank">Click to view</a><?php } else  { ?>
<a href="indexes.php?action=notdocupload"  target="_blank" style="color:#FF0000">Not uploaded</a>
<?php }  ?></td>
						 </tr>  
						 
						
						<tr height="50"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><td><b style="color:#FF0000">*</b> Last Years puja permision copy

</td><td><?php if($dataset->file_last_puja_per!='')
							 { ?><a href="doc/pujaper/<?php echo $dataset->file_last_puja_per; ?>"  target="_blank">Click to view</a><?php } else  { ?>
<a href="indexes.php?action=notdocupload"  target="_blank" style="color:#FF0000">Not uploaded</a>
<?php }  ?></td>
						 </tr>
						 <tr height="50" style="background-color:#EEEEDD"><td><b style="color:#FF0000">*</b> Payment/Fees copy of WBSEDCL</td><td>
<?php if($dataset->file_pmnt_electric!='')
							 { ?><a href="doc/elec_bill/<?php echo $dataset->file_pmnt_electric; ?>"  target="_blank">Click to view</a><?php } else  { ?>
<a href="indexes.php?action=notdocupload"  target="_blank" style="color:#FF0000">Not uploaded</a>
<?php }  ?> </td>
						 </tr>
						 <tr height="50"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><td><b style="color:#FF0000">*</b>Copy of first page of Bank pass book indicating account number & IFSC code</td><td><?php if($dataset->file_bank_p_book!='')
							 { ?><a href="doc/bank_p_book/<?php echo $dataset->file_bank_p_book; ?>"  target="_blank">Click to view</a><?php } else  { ?>
<a href="indexes.php?action=notdocupload"  target="_blank" style="color:#FF0000">Not uploaded</a>
<?php }  ?></td>
						 </tr>
						 
						  <tr height="50" style="background-color:#EEEEDD"><td><b style="color:#FF0000">*</b> Payment/Fees copy of fire service</td><td><?php if($dataset->file_fire_pay!='')
							 { ?><a href="doc/fire/<?php echo $dataset->file_fire_pay; ?>"  target="_blank">Click to view</a><?php } else  { ?>
<a href="indexes.php?action=notdocupload"  target="_blank" style="color:#FF0000">Not uploaded</a>
<?php }  ?> </td>
						 </tr>
						  <tr height="50"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><td><b style="color:#FF0000">*</b> Filled up Municipality Form </td><td><?php if($dataset->file_muni_form!='')
							 { ?><a href="doc/muni_form/<?php echo $dataset->file_muni_form; ?>"  target="_blank">Click to view</a><?php } else  { ?>
<a href="indexes.php?action=notdocupload"  target="_blank" style="color:#FF0000">Not uploaded</a>
<?php }  ?></td>
						 </tr>
						  <tr height="50" style="background-color:#EEEEDD"><td><b style="color:#FF0000">*</b> Payment/Fees copy of Municipality</td><td><?php if($dataset->file_muni_pay!='')
							 { ?><a href="doc/muni_pay/<?php echo $dataset->file_muni_pay; ?>"  target="_blank">Click to view</a><?php } else  { ?>
<a href="indexes.php?action=notdocupload"  target="_blank" style="color:#FF0000">Not uploaded</a>
<?php }  ?> </td>
						 </tr>

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