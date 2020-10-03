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
                <div id="overlay_form" style="display:none;z-index:9999999"></div>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
	                    <?php $checkrec=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'"); ?>
		                <?php include"lib/menu_horizontal.php"; ?>
        				<div class="content">
					    <section id="section-1">
					
						<div class="mediabox" style="width:730px">
							<form method="post" action="fun/org.php">
							
							<table style="padding-bottom:60px;" border="0"  >
							
							 <tr height="40" ><td width="100" style="background-color:rgba(221, 221, 221, 0.83)"><b>Organisation / Club Name</b></td><td style="padding-right:10px;background-color:rgba(221, 221, 221, 0.83)"><input  type="text"  id="org" class="form-control" width="width:20px" 
						
						 name="org"  style="width:240px"  size="200"<?php if($checkrec){ ?>   value="<?php echo $checkrec->org_name; ?>"<?php }  else { ?>   value="<?php echo $_SESSION['org_club']; ?>"<?php }  ?>  /> </td><td></td>
						 <td width="160" style="background-color:rgba(255, 235, 215, 0.56)"><b><b style="color:#FF0000">* </b> Name of the Secretary</b></td><td style="background-color:rgba(255, 235, 215, 0.56)"><input  type="text"  id="secname" class="form-control" width="width:20px" 
						
						 name="secname"  size="200"  <?php if($checkrec){ ?>   value="<?php echo $checkrec->sec_name; ?>"<?php }  ?> /> </td>
						 
						 </tr>
						 
						 
						 <tr height="40" ><td style="background-color:rgba(51, 122, 183, 0.26)">Mobile No.</td><td  style="background-color:rgba(51, 122, 183, 0.26)"><input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"  style="width:200px"   <?php if($checkrec){ ?>   value="<?php echo $checkrec->org_mobile; ?>"<?php }    else { ?>   value="<?php echo $_SESSION['mobile_no']; ?>"<?php }  ?>  maxlength="10" /> </td><td></td>
						 
						 
						 <td style="background-color:#EEEEDD"> <b style="color:#FF0000">*</b> Secretary Mobile No. </td><td style="background-color:#EEEEDD"><input  type="text"  id="secmob" class="form-control" width="width:20px" 
						
						 name="secmob"   size="20"  style="width:200px"   <?php if($checkrec){ ?>   value="<?php echo $checkrec->sec_mobile; ?>"<?php }  ?>  maxlength="10" /> </td>
						 </tr>
						
						
						 <tr height="40" ><td style="background-color:rgba(221, 221, 221, 0.83)">Email Id</td><td style="background-color:rgba(221, 221, 221, 0.83)"><input  type="text"  id="orgemail" class="form-control" width="width:20px" 
						
						 name="orgemail"   style="width:200px"  <?php if($checkrec){ ?>   value="<?php echo $checkrec->org_email; ?>"<?php }  ?>  /> </td><td></td>
						 
						 <td style="background-color:rgba(255, 235, 215, 0.56); padding-left:4px"> Secretary Email</td><td style="background-color:rgba(255, 235, 215, 0.56)"><input  type="text"  id="secmail" class="form-control" width="width:20px" 
						
						 name="secmail"  style="width:200px"  <?php if($checkrec){ ?>   value="<?php echo $checkrec->sec_email; ?>"<?php }  ?>  /> </td>
						 
						 </tr>
							
							<tr height="40" style="background-color:rgba(51, 122, 183, 0.26)"><td><b style="color:#FF0000">*</b> Address</td><td background-color:rgba(51, 122, 183, 0.26)><input  type="text"  id="orgadd" class="form-control" width="width:20px" 
						
						 name="orgadd"    <?php if($checkrec){ ?>   value="<?php echo $checkrec->org_address; ?>"<?php }  ?>  /> </td>
						 
						 
						 <td></td>
						 
						 <td style="background-color:#EEEEDD"><b style="color:#FF0000">*</b> Secretary Address</td><td style="background-color:#EEEEDD"><input  type="text"  id="secadd" class="form-control" width="width:20px" 
						
						 name="secadd"     <?php if($checkrec){ ?>   value="<?php echo $checkrec->sec_address; ?>"<?php }  ?> /> </td>
						 </tr>
						 
						 
						
						 </table>
							
							


<table style="margin-top:50px; width:100%" >
							
							 <tr height="40"><td  style="width:200px;background-color:rgba(255, 235, 215, 0.56)"><b style="color:#FF0000">*</b> Full Address of the Pandal</td><td style="padding-right:20px;background-color:rgba(255, 235, 215, 0.56)" colspan="3"><input  type="text"  id="pandaladd" class="form-control"  
						
						 name="pandaladd" style="width:540px"   <?php if($checkrec){ ?>   value="<?php echo $checkrec->puja_loc; ?>"<?php }  ?> /> </td>
						 
						 
						 </tr>
						 
						 
						 <tr height="40"><td style="background-color:#EEEEDD; width:200px"><b style="color:#FF0000">*</b> Ward No.</td><td style="background-color:#EEEEDD"><input  type="text"  id="wardno" class="form-control" width="width:20px" 
						
						 name="wardno"   style="width:70px"  <?php if($checkrec){ ?>   value="<?php echo $checkrec->puja_ward_no; ?>"<?php }  ?>/> 
						 
						 
						</td><td  width="70" style="background-color:#EEEEDD"> Holding No.</td><td style="background-color:#EEEEDD"><input  type="text"  id="holdingno" class="form-control" style="width:70px" 
						
						 name="holdingno"  <?php if($checkrec){ ?>   value="<?php echo $checkrec->puja_holding_no; ?>"<?php }  ?>  /> </td>
						 </tr>
						
						 
						<tr height="40" style="width:200px;background-color:rgba(255, 235, 215, 0.56)"><td colspan="4"><b style="color:#FF0000">*</b> Duration of the Festival :</td>
						 
						 </tr>
						
						 <tr height="40" style="width:200px;background-color:rgba(255, 235, 215, 0.56)"><td> &nbsp;&nbsp;From </td><td><input  type="date"  id="from" class="form-control" width="width:20px" 
						
						 name="from"   style="width:170px"   <?php if($checkrec){ ?>   value="<?php echo $checkrec->puja_from; ?>"<?php }  ?> /> </td>
						 
						 <td>To </td><td><input  type="date"  id="to" class="form-control" width="width:20px" 
						
						 name="to"    style="width:170px"   <?php if($checkrec){ ?>   value="<?php echo $checkrec->puja_to; ?>"<?php }  ?> /> </td>
						 
						 </tr>
						
						 <?php if($checkrec){ ?>  <input  type="hidden"  
						
						 name="nid"     value="<?php echo $checkrec->id; ?>" /><?php }  ?>
						<tr height="40"><td colspan="6" align="center">
						
						<!--<button style="height:40px" class="button" style="vertical-align:top"><span style="">Hover </span></button>
						<a href="#" class="myButton">turquoise</a>-->
						<input  type="submit"  
						
						 name="submit"  class="myButton"  <?php if($checkrec->finalize=='Yes'){ ?> disabled="disabled"   <?php } ?>  value="Save & Next"  style="margin-top:20px"  onClick="return validat();"/> </td>
						 
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
    <?php include "lib/footer.php"; ?>
      </div>
	  
    </div><!-- ./wrapper -->
	<script>
	
	function validat()
	{
	
	
	var org=document.getElementById("org").value;
	var secname=document.getElementById("secname").value;
	var orgmob=document.getElementById("orgmob").value;
	
	if((org=='') || (org=='Null'))
	{
	document.getElementById("org").focus();
	alert("Organisation / Club can't blank");
	return false;
	}
	
	if((secname=='') || (secname=='Null'))
	{
	document.getElementById("secname").focus();
	alert("Secretary name can't blank");
	return false;
	}
	
	if((orgmob=='') || (orgmob=='Null'))
	{
	document.getElementById("orgmob").focus();
	alert("Organisation mobile number can't blank");
	return false;
	}
	
	
	
	var secmob=document.getElementById("secmob").value;
	var orgaddr=document.getElementById("orgadd").value;
	var secaddr=document.getElementById("secadd").value;
	var pandaladd=document.getElementById("pandaladd").value;
	var wardno=document.getElementById("wardno").value;
	var from=document.getElementById("from").value;
	var to=document.getElementById("to").value;
	
	
	if((secmob=='') || (secmob=='Null'))
	{
	document.getElementById("secmob").focus();
	alert("Secretary mobile number can't blank");
	return false;
	}
	if((orgaddr=='') || (orgaddr=='Null'))
	{
	document.getElementById("orgadd").focus();
	alert("Organisation address can't blank");
	return false;
	}
	
	if((secaddr=='') || (secaddr=='Null'))
	{
	document.getElementById("secadd").focus();
	alert("Secretary address can't blank");
	return false;
	}
	
	
	if((pandaladd=='') || (pandaladd=='Null'))
	{
	document.getElementById("pandaladd").focus();
	alert("Full address of the pandal can't blank");
	return false;
	}
	
	if((wardno=='') || (wardno=='Null'))
	{
	document.getElementById("wardno").focus();
	alert("Ward No. can't blank");
	return false;
	}
	
	if((from=='') || (from=='Null'))
	{
	document.getElementById("from").focus();
	alert("Duration of the festival From date can't blank");
	return false;
	}
	if((to=='') || (to=='Null'))
	{
	document.getElementById("to").focus();
	alert("Duration of the festival To date can't blank");
	return false;
	}
	
	
	
	}
	</script>
	<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  height:70px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '>>';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<style>
.myButton {
	-moz-box-shadow: 0px 10px 14px -7px #276873;
	-webkit-box-shadow: 0px 10px 14px -7px #276873;
	box-shadow: 0px 10px 14px -7px #276873;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #599bb3), color-stop(1, #408c99));
	background:-moz-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-webkit-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-o-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-ms-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#599bb3', endColorstr='#408c99',GradientType=0);
	background-color:#599bb3;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:7px 10px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #408c99), color-stop(1, #599bb3));
	background:-moz-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-webkit-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-o-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-ms-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:linear-gradient(to bottom, #408c99 5%, #599bb3 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#408c99', endColorstr='#599bb3',GradientType=0);
	background-color:#408c99;
}
.myButton:active {
	position:relative;
	top:1px;
}
</style>