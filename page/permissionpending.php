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
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12"><!-- /.box -->
                <div id="overlay_form" style="display:none;z-index:9999999"></div>
                <div class="box">
                    <div>
                        <div class="box-header">
                            <h3 class="box-title"></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
        	                <div class="content">
                        		<section id="section-8">
                        			<div class="mediabox" style="width:700px">
<?php $checkrecords=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'"); ?>
<?php if ($checkrecords->final_per=='Yes'): ?>
                                        <div style="color:#006600;font-size:32px">Permitted on <?=$checkrecords->final_per_date?></div>
<?php elseif ($checkrecords->final_per=='No'): ?> 
                                        <div style="color:#FF0000;font-size:32px">Rejected on <?=$checkrecords->final_per_date?></div>
<?php else: ?>
                                        <div style="color:#FF00FF;font-size:32px">Your application is in process.</div>
                                        <div style="color:#006600;font-size:24px">Permission letter will be generated after final approval.</div>
<?php endif ?>
                        			</div>
                        		</section>
        		            </div><!-- /content -->
                        </div><!-- /.box-body -->
                    </div><!-- /tabs -->
    		        <script src="js_tab/cbpFWTabs.js"></script>
            		<script>
            			new CBPFWTabs( document.getElementById( 'tabs' ) );
            		</script>												
                </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- ./wrapper -->
    <?php include "lib/footer.php"; ?>