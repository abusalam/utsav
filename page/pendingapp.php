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
				
				<div class="content">
				 
					<section id="section-1">
					<?php
					if($_SESSION['cat']=='Power')
					{
					$fld='elec_per';
					}
					if($_SESSION['cat']=='Fire')
					{
					$fld='fir_per';
					}
					if($_SESSION['cat']==$_SESSION['ps'])
					{
					$fld='muni_per';
					}
					if($_SESSION['cat']=='Police')
					{
					$fld='police_per';
					}
					if($_SESSION['cat']=='Pollution')
					{
					$fld='polution_per';
					}
					if($_SESSION['cat']=='SDO')
					{
					$fld='final_per';
					}
					
if($_SESSION['cat']=='SDO') {
    /*$checkrecord=$ob->get_recs("application","*","$fld='' and `elec_per`='Yes' and `fir_per`='Yes'   and `police_per`='Yes' and `polution_per`='Yes' and `finalize`='Yes'","org_name");*/
    $checkrecord=$ob->get_recs("application","*","$fld='' and `police_per`='Yes'","org_name");					
} else if($_SESSION['cat']=='Police') {
    $checkrecord=$ob->get_recs("application","*","$fld='' and `elec_per`='Yes' and `finalize`='Yes' and `ps`='".$_SESSION['ps']."'","org_name");
/*$checkrecord=$ob->get_recs("application","*","$fld='' and `elec_per`='Yes' and `fir_per`='Yes'  and `polution_per`='Yes' and `finalize`='Yes'","");*/	
} else if($_SESSION['cat']=='admin') {
    $checkrecord=$ob->get_recs("application","*","final_per!='Yes'","org_name");	
} else {
    if($_SESSION['cat']==$_SESSION['ps']) {
        $checkrecord=$ob->get_recs("application","*","$fld='' and `finalize`='Yes' and `ps`='".$_SESSION['cat']."'","org_name");
    } else {
        $checkrecord=$ob->get_recs("application","*","$fld='' and `finalize`='Yes' ","org_name");
    }
}
//$checkUser=cek($user,$pass);	

/*if($checkrec){ 
$checkrecords=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'");


}*/

?>
						<div class="mediabox" style="width:960px">
							<form method="post" action="fun/permission.php">
							<!--<pre><?=var_dump($_SESSION)?></pre>-->
							<table border="1" style="width:100%">
							<tr>
							 <th>Sl. No</th>
							 <th> Application ID</th>
							 <th>Organiser</th>
							 <th>Full Preview</th>
							 
							  <th>Document Preview </th>
							<?php if($_SESSION['cat']=='admin')
{?><th>Permission Status </th>

	<?php } else {  ?>
							 <th>Permission</th> <?php }  ?>
							 </tr>
							 <?php $c=1; if($checkrecord) { foreach($checkrecord as $app) {?>
							 <tr>
							 <td><?php echo $c; ?></td>	
							  <td><?php echo $app->app_id ?></td>	
							   <td><?php echo $app->org_name ?></td>
							  
							   <td><a href="indexes.php?action=preview&sendvalue=<?php  echo base64_encode ('id.'.$app->id.'.val'); ?>" target="_blank">Preview</a></td>	

								 <td><a href="indexes.php?action=doc_preview&id=<?php echo $app->id; ?>"  target="_blank">Click to view Document</a></td>
								 
								 <?php if($_SESSION['cat']=='admin')
{?> <td><a href="indexes.php?action=per_preview&id=<?php echo $app->id; ?>"  target="_blank">View Permission</a></td>

	<?php } else {  ?>
							   <td><select name="p<?php echo $c ;?>">
							       <option value="">---Select---</option>
							       <option value="Yes">Permitted</option>
							       <option value="No">Rejected</option>
							       </select>
							    <input  type="hidden"  
						
						 name="nid<?php echo $c;  ?>" value="<?php echo $app->id ?>"  /> <input  type="hidden"  
						
						 name="mob_no<?php echo $c;  ?>" value="<?php echo $app->org_mobile; ?>"  />
						 
						 
						 
						 
							   </td>
							   <?php }  ?> 
							   	
							</tr>
							 <?php $c++ ; } } ?>
							 
							 <tr height="40"><td colspan="7" align="center">
							 
							<?php if($_SESSION['cat']!='admin') { ?>
							 <input  type="submit"  
						
						 name="submit"      value="Submit"  /> </td>
						 <input  type="hidden"  
						
						 name="fld"      value="<?php echo $fld; ?>"  />
						 
						 <input  type="hidden"  
						
						 name="loop"      value="<?php echo $c-1 ?>"  />
						  <?php } ?>
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
	  <?php include "lib/footer.php";?>
    </div><!-- ./wrapper -->