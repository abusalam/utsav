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
				 
					
					
					<section id="section-8">
					
					<?php
					
					$checkrec=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'");


?>
						<div class="mediabox" style="width:700px">
							<form method="post" action="fun/checklist.php">
							<table style="padding-bottom:60px" border="1" align="center">
							
							 <tr height="40"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><td width="400">Site Plan with Pandal layout 
</td><td align="center"><input type="checkbox"   <?php if($checkrec->ck_sit_pln!=''){ ?>   checked="checked"<?php }  ?>  name="site" id="site" style="margin-top:6px" /></td>
						 
						 </tr>
						 
						 
						 
						 <tr height="40"  style="background-color:#EEEEDD"><td>WBSEDCL current permission or genarator owners agreement</td><td align="center" style="width:20px"><input type="checkbox"   name="elec" id="elec" <?php if($checkrec->ck_wbsedcl!=''){ ?>   checked="checked"<?php }  ?> style="margin-top:6px" /></td>
						 </tr>
						 
						 
						 <tr height="40"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><td>Fire department current NOC</td><td align="center"><input type="checkbox" <?php if($checkrec->ck_fire_noc!=''){ ?>   checked="checked"<?php }  ?>  name="fire" id="fire" style="margin-top:6px" /></td>
						 </tr>
						
						
						
						<tr height="40"  style="background-color:#EEEEDD"><td>Municipal chairman/GP Pradhan NOC

</td><td align="center"><input type="checkbox"  <?php if($checkrec->ck_muni_noc!=''){ ?>   checked="checked"<?php }  ?> name="mnoc" id="mnoc" style="margin-top:6px" /></td>  
						 </tr>
						 <tr height="40"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><td>Land owners permiossion with his full contact details
</td><td align="center"><input type="checkbox" <?php if($checkrec->ck_land_own!=''){ ?>   checked="checked"<?php }  ?>  name="lw" id="lw" style="margin-top:6px" /></td>
						 </tr>
						 
						 
						  <tr height="40"  style="background-color:#EEEEDD"><td>Decorators agreement with full contact details</td><td align="center"><input type="checkbox"  <?php if($checkrec->ck_dec!=''){ ?>   checked="checked"<?php }  ?> name="dec" id="dec" style="margin-top:6px" /></td>
						 </tr>
						  <tr height="40"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><td>Electrician agreement with full contact details</td><td align="center"><input type="checkbox"  <?php if($checkrec->ck_electrician!=''){ ?>   checked="checked"<?php }  ?>  name="ea" id="ea" style="margin-top:6px" /></td>
						 </tr>
						  <tr height="40"  style="background-color:#EEEEDD"><td>Last year actual income-expenditure statement</td><td align="center"><input type="checkbox"  <?php if($checkrec->ck_last_inc_exp!=''){ ?>   checked="checked"<?php }  ?>  name="lya" id="lya" style="margin-top:6px" /></td>
						 </tr>
						 
						  <tr height="40"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><td>Budget in details showing source of fund</td><td align="center"><input type="checkbox"   <?php if($checkrec->ck_sourc_fund!=''){ ?>   checked="checked"<?php }  ?> name="b" id="b" style="margin-top:6px" /></td>
						 </tr>
						  <tr height="40"  style="background-color:#EEEEDD"><td>Bill books for subscription(one sample and all book no. & sl no. in signed list in duplicate</td><td align="center"><input type="checkbox"   <?php if($checkrec->ck_bill_book!=''){ ?>   checked="checked"<?php }  ?> name="book" id="book" style="margin-top:6px" /></td>
						 </tr>
						 
						  <tr height="40"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><td>Photocopy of last year puja permit</td><td align="center"><input type="checkbox"   <?php if($checkrec->ck_photocopy!=''){ ?>   checked="checked"<?php }  ?> name="photo" id="photo" style="margin-top:6px" /></td>
						 </tr>
						  <tr height="40"  style="background-color:#EEEEDD"><td>Resolution of orgamnigers for this puja on own letter head during puja dates,schedule,location,orgnisers name, budget description, registration No.</td><td align="center"><input type="checkbox"  <?php if($checkrec->ck_org_res!=''){ ?>   checked="checked"<?php }  ?>  name="res" id="res" style="margin-top:6px" /></td>
						 </tr>
						  <tr height="40"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><td>Immersion Dtae, time ,place,route in own letter head , seal & sign </td><td align="center"><input type="checkbox"  <?php if($checkrec->ck_imm_date!=''){ ?>   checked="checked"<?php }  ?>  name="immdate" id="immdate" style="margin-top:6px" /></td>
						 </tr>
						  <tr height="40"  style="background-color:#EEEEDD"><td>List of names of volunteers with contact no for 24 hours pandal guard</td><td align="center"><input type="checkbox"  <?php if($checkrec->ck_voln_list!=''){ ?>   checked="checked"<?php }  ?>  name="vol" id="vol" style="margin-top:6px" /></td>
						 </tr>
						  <tr height="40"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><td>List of Name with contact details who are vauthorised to collect subscription</td><td align="center"><input type="checkbox"  <?php if($checkrec->ck_auth_list!=''){ ?>   checked="checked"<?php }  ?>  name="con" id="con" style="margin-top:6px" /></td>
						 </tr>
						  <tr height="40"  style="background-color:#EEEEDD"><td>Undertaking of organiser of own letterhead with seal & full signature of organisers stating to abide by all directions of govt/ authority and liable for any vilolation</td><td align="center"><input type="checkbox" <?php if($checkrec->ck_vio!=''){ ?>   checked="checked"<?php }  ?>   name="lhead" id="lhead" style="margin-top:6px" /></td>
						 </tr>
						 
						  <tr height="40"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><td>No objection from the local thana</td><td align="center"><input type="checkbox"  <?php if($checkrec->ck_thana_noc!=''){ ?>   checked="checked"<?php }  ?>  name="thananoc" id="thananoc" style="margin-top:6px" /></td>
						 </tr>
						  <tr height="40"  style="background-color:#EEEEDD"><td>Mike supplier aggrement(mike timing as per directive of WBPCB/Other competent authority)</td><td align="center"><input type="checkbox"  <?php if($checkrec->ck_mike!=''){ ?>   checked="checked"<?php }  ?> name="mike" id="mike" style="margin-top:6px" /></td>
						 </tr>
						  <tr height="40"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;"><td>List of name of volunteers with contact no. form keeping emergency light in the puja pandal</td><td align="center"><input type="checkbox"   <?php if($checkrec->ck_vol_emg!=''){ ?>   checked="checked"<?php }  ?>name="volp" id="volp" style="margin-top:6px"  />  <?php if($checkrec){ ?>  <input  type="hidden"  
						
						 name="nid"     value="<?php echo $checkrec->id; ?>"  <?php }  ?> /></td>
						 </tr>
						 
						  <tr height="40" ><td colspan="7" align="center"><input  type="submit"  
						
						 name="submit"  class="myButton "  <?php if($checkrec->finalize=='Yes'){ ?> disabled="disabled"   <?php } ?>   value="Save"  /> </td>
						 
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