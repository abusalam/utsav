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
           Sanitation Report
            <small></small>
          </h1>
		  <div style="margin-left:height:70px; background-color:#9ECFCF; text-align:center" class="video-field-new"> <?php if($_REQUEST[edit]=='successfull') { echo "<b style='color:green;padding:10px'>Data Successfully Updated.</b>"; } ?></div>
				  
				  
				  <div style="margin-left:height:70px; background-color:#9ECFCF; text-align:center"> <?php if($_REQUEST[edit]=='fail') { echo "<b style='color:red;padding:10px'>Error in Data Updation.</b>"; } ?></div>
				  
				  <div style="margin-left:height:70px; background-color:#9ECFCF; text-align:center" class="video-field-new"> <?php if($_REQUEST[delete]=='successfull') { echo "<b style='color:green;padding:10px'>Data Successfully Deleted.</b>"; } ?></div>
				  
				  
				  <div style="margin-left:height:70px; background-color:#9ECFCF; text-align:center"> <?php if($_REQUEST[delete]=='fail') { echo "<b style='color:red;padding:10px'>Error in Data Deletion.</b>"; } ?></div> 
				  
		 <ol class="breadcrumb">
            <li><a href="indexes.php?action=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
           <li><a href="indexes.php?action=changespass"><i class="active"></i> Change Password</a></li>
			<?php if($_SESSION['userid']!='admin') { ?>
			<li class="active"><a href="indexes.php?action=actionreport">Report Entry</a></li>
			<li><a href="indexes.php?action=actionexcelupload"><i class="fa fa-circle-o"></i> Day Wise Excel Upload</a></li>
			<?php } ?>
			<li class="active"> <a href="logout.php">Logout</a></li>
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
				
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
					  <th style="width:7%">#</th>
                        <th style="width:20%">Reporting Date</th>
                        <th  style="width:12%">Target</th>
                        <th>Achievement</th>
                        <th style="width:20%">Pending</th>
                        
						 <!-- <th width="7%">Action</th>-->
						
                      </tr>
                    </thead>
                    <tbody>
					
					<?php 
	if(isset($_REQUEST['del']))
	
	{
	$n=base64_decode($_REQUEST['del']);
	
	
$del=$ob->db_delete("ps_profile","id='".$n."'");	
	if($del){
		echo '<script type="text/javascript" language="javascript">window.location="indexes.php?action=actionprofilemaster&delete=successfull";</script>';
	}else{
		echo '<script type="text/javascript" language="javascript">window.location="indexes.php?action=actionprofilemaster&delete=fail";</script>';
	
}
	}
	
	
if($_SESSION['code']=='2')
	{
	$_SESSION['codes']='Bangitola';
	
	}
	if($_SESSION['code']=='3')
	{
	$_SESSION['codes']='Hamidpur';
	
	}
	if($_SESSION['code']=='4')
	{
	$_SESSION['codes']='Uttarpanchananapur-I';
	
	}
	if($_SESSION['code']=='5')
	{
	 $_SESSION['codes']='Uttarpanchananapur-II';
	
	}
	if($_SESSION['code']=='6')
	{
	$_SESSION['codes']='Bakhrabad GP';
	
	}
	if($_SESSION['code']=='7')
	{
	$_SESSION['codes']='Birnagar-I';
	
	}
	if($_SESSION['code']=='8')
	{
	$_SESSION['codes']='Krishnapur';
	
	}
	if($_SESSION['code']=='9')
	{
	$_SESSION['codes']='Kumbhira';
	
	}
	if($_SESSION['code']=='10')
	{
	$_SESSION['codes']='Lakshipur';
	
	}
	if($_SESSION['code']=='11')
	{
	$_SESSION['codes']='Pardeonapur Shovapur';
	
	}
	if($_SESSION['code']=='12')
	{
	$_SESSION['codes']='Dakhsin Chandipur';
	
	}
	if($_SESSION['code']=='13')
	{
	$_SESSION['codes']='Hiranandapur';
	
	}
	if($_SESSION['code']=='14')
	{
	$_SESSION['codes']='Uttarchandipur';
	
	}
	if($_SESSION['code']=='15')
	{
	$_SESSION['codes']='Dharampur';
	
	}
	if($_SESSION['code']=='16')
	{
	$_SESSION['codes']='Manikchak';
	
	}
	if($_SESSION['code']=='17')
	{
	$_SESSION['codes']='Mathurapur';
	
	}
	if($_SESSION['code']=='18')
	{
	$_SESSION['codes']='Gopalpur';
	
	}
	if($_SESSION['code']=='19')
	{
	$_SESSION['codes']='Mahanandatola';
	
	}
	if($_SESSION['code']=='20')
	{
	$_SESSION['codes']='Bilaimari';
	
	}
	
	//echo $_SESSION['block'];
	//echo $_SESSION['gp'];
$dataset=$ob->get_recs("report","*","`block`='".$_SESSION['block']."' and `gp`='".$_SESSION['gp']."'","id ASC");
$c=1;
if($dataset){
foreach($dataset as $data)
{


//echo "RB".date("Y/m/d");
$cur=date("Y-m-d");


?>


<tr <?php if($c%2=='0') { ?> style="background-color:rgba(0, 136, 204, 0.11)" <?php } else{ ?> style="background-color:rgba(0, 136, 204, 0)" <?php } ?> >   <td><?php 
echo $c;   ?></td>
                        <td><?php $date=date_create($data->c_date);
echo date_format($date,"d/m/Y");   ?></td>
                        <td><?php echo $data->target;  ?></td>
                        <form   role="form" action="fun/action.php" method="post" name="form8"  enctype="multipart/form-data" > 
                         <td>  <div style="float:left"><label ><input  type="text"  id="aps" class="form-control" width="width:20px" 
						 <?php if($cur==$data->c_date)
{ ?>
						 name="achievement"     <?php } ?> 
						  <?php if($cur>=$data->c_date)
{ ?>
value="<?php echo $data->achievement; ?>"
<?php } ?> 

<?php if($cur!=$data->c_date)
{ ?> readonly="" <?php } ?> /> </label></div>


<?php if($cur==$data->c_date)
{ ?>
<div><input  type="hidden"  id="newid" class="form-control" width="width:20px" name="newid"  value="<?php echo $data->id;  ?>"  />
<input  type="hidden"  id="target" class="form-control" width="width:20px" name="target"  value="<?php echo $data->target;  ?>"  />
<label > 
 &nbsp;<button type="submit" name="submit" class="btn btn-primary" onclick="return validatee();">&nbsp;&nbsp;Save&nbsp;&nbsp;  </button> <?php } ?></label></div> </td>
						 
                        <td><?php $value=($data->target) - ($data->achievement); echo $value;  ?></td>
						
						
						<!--<td>
						<a href="#" onClick='window.open("reportdetails.php?id=<?php echo $data->id;  ?>","Microsoft","height=600,width=900")' style="margin-top:200px"><img src="dist/img/dt2.jpg" width="22" title="Details" /></a>
						</td>-->
							<!--<td>
							
							
							
							
							<a  href="indexes.php?action=editprofilemaster&nid=<?php echo base64_encode($data->id);  ?>"><img src="dist/img/edit1.png" width="17" title="Edit" /></a><a  href="indexes.php?action=actionprofilemaster&del=<?php echo base64_encode($data->id);  ?>"><img src="dist/img/del1.jpg" width="24" title="Delete" />
						</td>-->
						<!--<td>
						<a href="#" onClick='window.open("pop1.php?id=<?php echo $data->id;  ?>","Microsoft","height=400,width=400")' style="margin-top:200px">Assign</a>
						</td>-->
						
                      </tr>
	<?php 
$c++;
}

}

	
?>
                      
                      
                    </tfoot>
                  </table>
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