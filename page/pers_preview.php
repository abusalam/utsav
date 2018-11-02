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
          <h1>
           Application Submission
            <small></small>
          </h1>
		  <div style="margin-left:height:70px; background-color:#9ECFCF; text-align:center" class="video-field-new"> <?php if($_REQUEST[edit]=='successfull') { echo "<b style='color:green;padding:10px'>Data Successfully Updated.</b>"; } ?></div>
				  
				  
				 
				  
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
				
						
				<div class="content">
				 
					<section id="section-8">
						<?php
					
					//$checkrec=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'");
//$checkUser=cek($user,$pass);	

/*if($checkrec){ 
$checkrecords=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'");


}*/
	$sendid=base64_decode($_REQUEST[sendvalue]);
$ex=explode('.',$sendid);


$dataset=$ob->get_rec("application","*","id=$ex[1]","");

?>
						<div class="mediabox" style="width:700px">
							<form method="post" action="fun/upload.php" enctype="multipart/form-data">
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
							
							 <tr height="50"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;">
							     <td width="300" ><b style="color:#FF0000">*</b> WBSEDCL <strong>(7449302653)</strong></td>
							     <td><?php if($dataset->elec_per!='')
							 {  echo "<label style='color:#006600'>Permitted on $dataset->elec_per_date</label>" ;?>
							 


<?php } else  { ?>
<label style="color:#FF0000">Pending </label>
<?php }  ?></td>
						 
						 </tr>
						 
						 
						 
						 <tr height="50" style="background-color:#EEEEDD">
						 <td><b style="color:#FF0000">*</b> Fire Department <strong> (03512-278854)</strong></td>
						 <td><?php if($dataset->fir_per!='')
							 {  echo "<label style='color:#006600'>Permitted on $dataset->fir_per_date</label>" ;?>
							 


<?php } else  { ?>
<label style="color:#FF0000">Pending </label>
<?php }  ?>
						  </td>
						 </tr>
						 
						 
						 <tr height="50"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;">
						 <td><b style="color:#FF0000">*</b> Pollution Department<strong>(7602306370)</strong></td><td><?php if($dataset->polution_per!='')
							 {  echo "<label style='color:#006600'>Permitted on $dataset->polution_per_date</label>" ;?>
							 


<?php } else  { ?>
<label style="color:#FF0000">Pending </label>
<?php }  ?></td>
						 </tr>
						
						 <tr height="50" style="background-color:#EEEEDD">
						 <td><b style="color:#FF0000">*</b> Minucipality <strong>(EBM:03512252324/9434120207/9434186130) (OMM:03512-260235/9476375079)</strong></td>
						 <td><?php if($dataset->muni_per!='')
							 {  echo "<label style='color:#006600'>Permitted on $dataset->muni_per_date</label>" ;?>
							 


<?php } else  { ?>
<label style="color:#FF0000">Pending </label>
<?php }  ?></td>
						 </tr>  
						 
						
						<tr height="50"  style="background-color:rgba(255, 235, 215, 0.56); padding:20px 10px 20px;">
						    <td><b style="color:#FF0000">*</b> Police Department<strong>(9434105550)</strong></td>
						    <td><?php if($dataset->police_per!='')
							 {  echo "<label style='color:#006600'>Permitted on $dataset->police_per_date</label>" ;?>
							 


<?php } else  { ?>
<label style="color:#FF0000">Pending </label>
<?php }  ?></td>
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