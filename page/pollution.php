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
				 
					
					
					
					
					
					
					<section id="section-5">
					<?php
					
					$checkrec=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'");



?>
						<div class="mediabox" style="width:700px">
							<form method="post" action="fun/pollution.php">
							<table style="padding-bottom:60px">
							
							
						 
						 <tr height="40"><td><p>Undertaking</p>
						 
<p>1. That, I on behalf of my organisation, undertake that my organisation will comply with the following norms strictly as fixed upon by the West Bengal Pollution Control Board, for organising  a community Durga puja/kali puja in accordance with the Environment (Protection), Act, 1985 read with the Noise Pollution (Regulation & control) Rules, 2000 Norms as are follows:</p>
<p>a.
That my organisation will use and operate microphones obtaining permission from the concerned police authorities of district authorities and will abide by all the terms and conditions fixed upon by the police authorities and district authorities at the time of granting such permission.</p><p>b. 
Microphones will be used or operated fixing `sound limiter` with the amplifire system in accordance with the order passed by the Hon'ble High Court, Calcutta, in/c/with matter no. 4303(W) of 1995 (Om Birangana religious society, petitioners-vs-state of West Bengal and others, respondents), for maintaining ambient noise slandered as  specified for different areas as per the aforementioned Act and rules mentioned above.</p><p>c.
No microphone shall be used or operated within `silent zone` areas i.e. within 100 meters of any educational institutions, hospitals, nursing home or court areas in accordence with the Act and rule as mentioned above. (During holidays and after office hours, the area of the educational institutions and courts are not treated as `Silent Zone`).</p><p>d.
That, no banned category of the noise making fireworks which generates noise more than 90 dB(A), impulse from a distance of 5 meters from the brusting point shall be used by the members of the community puja organiser either within the puja festive period or during the immersion ceremonial procession of idols.</p><p>e.
That, no Disk  Jockey  Set(D.J) will be used during the procession of the immersion of the idols.</p><p>f. 
That, the following norms will be complieed  with strictly during the immersion procession:</p><p>I.
                         The offerings, like flowers and leafs etc. will be deposited in the Bins ,places  or pits  as arranged by the concerned local authorities on the banks of rivers, ponds, water bodies.</p><p> II.
                          Immersions of idols will take place in accordance with the schedule dates fixed up by the Police Authorities or by the District Authorities as the case may be.</p>
<p>2.     That in case of violation of all the above mentioned norms,  The West Bengal Pollution Control Board and the other authorities concerned under statut  shall be  at liberty to take necesser penal action in accordance with law, against the community puja committee by imposing responsibility upon the president/secretary of the puja  committee.</p>

<p>3. That, emphasis will bw given to the led and toxic metal free paints to prtepare the idols and to prevent water polution after immersion</p>
<p> <b style="color:#FF0000">* </b>Agree <input  type="checkbox"  id="polagree"  width="width:20px" 
						
				<?php if($checkrec->polution_agree=='on') { ?>   checked="checked"<?php }  ?>		 name="polagree"    /></p>  
				
				<input  type="hidden"  
						
						 name="nid"     value="<?php echo $checkrec->id; ?>"   /></td>
						 </tr>
						<tr height="40"><td colspan="6" align="center"><input  type="submit"  
						
						 name="submit" class="myButton"  onClick="return validat();"  <?php if($checkrec->finalize=='Yes'){ ?> disabled="disabled"   <?php } ?>    value="Save & Next"  /> </td>
						 
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
	<script>
	function validat()
	{
if(document.getElementById("polagree").checked== false)
	{
	document.getElementById("polagree").focus();
	alert(" Agree can't blank");
	return false;
	}
	if(document.getElementById("polagree").checked== true)
	{
	return true;
	
	}
	

	
	
	}
	</script>
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