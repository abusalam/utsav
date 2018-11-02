<?php
session_start();
error_reporting(0);
include_once("config/config.php");
include_once("config/database.php");
$ob= new database();
include"lib/header.php";
include"lib/menu.php";
$date=date_create(date("Y-m-d"));
date_add($date,date_interval_create_from_date_string("1 days"));
$cur=date_format($date,"Y-m-d");

?> 
<?php echo "RABIUL".$_SESSION['id'];
 echo $_SESSION['ps'];
?>
 <!-- <p id="back-top"  style="background-image: url('gradient_bg.png');">
		<a href="#top"><span></span>Back to Top</a>
	</p>-->
<style>

/* -------------------- Page Styles (not required) */


/* -------------------- Select Box Styles: bavotasan.com Method (with special adaptations by ericrasch.com) */
/* -------------------- Source: http://bavotasan.com/2011/style-select-box-using-only-css/ */
.styled-select {
   background: url(http://i62.tinypic.com/15xvbd5.png) no-repeat 96% 0;
   height: 29px;
   overflow: hidden;
   width: 240px;
}
.styled-select1 {
  
   height: 29px;
   overflow: hidden;
   width: 240px;
}

.styled-select select {
   background: transparent;
   border: none;
   font-size: 14px;
   height: 29px;
  /* padding: 5px;*/ /* If you add too much padding here, the options won't show in IE */
   width: 268px;
}

.styled-select.slate {
   background: url(http://i62.tinypic.com/2e3ybe1.jpg) no-repeat right center;
   height: 34px;
   width: 240px;
}

.styled-select.slate select {
   border: 1px solid #ccc;
   font-size: 16px;
   height: 34px;
   width: 268px;
}

/* -------------------- Rounded Corners */
.rounded {
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
}

.semi-square {
   -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   border-radius: 5px;
}

/* -------------------- Colors: Background */
.slate   { background-color: #ddd; }
.green   { background-color: #779126; }
.blue    { background-color: #3b8ec2; }
.yellow  { background-color: #eec111; }
.black   { background-color: #000; }

/* -------------------- Colors: Text */
.slate select   { color: #000; }
.green select   { color: #fff; }
.blue select    { color: #fff; }
.yellow select  { color: #000; }
.black select   { color: #fff; }


/* -------------------- Select Box Styles: danielneumann.com Method */
/* -------------------- Source: http://danielneumann.com/blog/how-to-style-dropdown-with-css-only/ */
#mainselection select {
   border: 0;
   color: #EEE;
   background: transparent;
   font-size: 20px;
   font-weight: bold;
   padding: 2px 10px;
   width: 378px;
   width: 350px;
   background: #58B14C;
   -webkit-appearance: none;
}

#mainselection {
   overflow:hidden;
   width:350px;
   -moz-border-radius: 9px 9px 9px 9px;
   -webkit-border-radius: 9px 9px 9px 9px;
   border-radius: 9px 9px 9px 9px;
   box-shadow: 1px 1px 11px #330033;
   background: #58B14C url("http://i62.tinypic.com/15xvbd5.png") no-repeat scroll 319px center;
}


/* -------------------- Select Box Styles: stackoverflow.com Method */
/* -------------------- Source: http://stackoverflow.com/a/5809186 */
select#soflow, select#soflow-color {
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #AAA;
   color: #555;
   font-size: inherit;
   /*margin: 20px;*/
   overflow: hidden;
   padding: 5px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 300px;
}

select#soflow-color {
   color: #fff;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#779126, #779126 40%, #779126);
   background-color: #779126;
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
   padding-left: 15px;
}
</style>
<?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;

$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
$scriptVersion = $detect->getScriptVersion();

?>
    <script src="//code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $('.sendDataButton').bind('click.demo', function(e){

                $button = $(this);
                e.preventDefault();

                $.ajax({
                    url: 'http://demo.mobiledetect.net/?page=addItem',
                    type: 'POST',
                    dataType: 'jsonp',
                    data: {
                            remoteDetails:  $('#remoteDetails').val(),
                            remoteAnswer:   $(this).attr('data-answer'),
                            uaStringFromJS: escape(navigator.userAgent),
                            deviceWidth:    $(window).width(),
                            deviceHeight:   $(window).height(),
                            source:         'demoFeedback'
                    },
                    beforeSend: function(){
                        $button.html('Loading...');
                    },
                    success: function(r){
                        $('#feedbackForm').html('<p class="response">'+r.msg+'</p>');
                    }
                });

            });

            $.ajax({
                url: 'http://demo.mobiledetect.net/?page=addItem',
                type: 'POST',
                dataType: 'jsonp',
                data: {
                        //uaStringFromJS: escape(navigator.userAgent),
                        deviceWidth:    $(window).width(),
                        deviceHeight:   $(window).height(),
                        devicePixelRatio: (typeof window.devicePixelRatio !== 'undefined' ? window.devicePixelRatio : 0),
                        'source':         'demoVisitor'
                },
                success: function(r){
                    try { console.log(r); } catch (e) { }
                }
            });


        });
    </script>



    
<!--	-----------pie chart--------->
<link href="bootstrap_pie/css/bootstrap.min.css" rel="stylesheet" media="screen">
        
        <link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
	<!--	-----------pie chart--------->

<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
			
			
            <small>Control Panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="indexes.php?action=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
           <li><a href="indexes.php?action=changespass"><i class="active"></i> Change Password</a></li>
			<?php if($_SESSION['userid']!='admin') { ?>
			<li class="active"><a href="indexes.php?action=actionreport">Report Entry</a></li><li><a href="indexes.php?action=actionexcelupload"><i class="fa fa-circle-o"></i> Day Wise Excel Upload</a></li>
			<?php } ?>
			<li class="active"> <a href="logout.php">Logout</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <!-- /.nav-tabs-custom -->

              <!-- Chat box -->
              <!-- /.box (chat box) -->

              <!-- TO DO List -->
              <!-- /.box -->

              <!-- quick email widget -->
              
<br /><br /><span style="margin-left:20px; font-weight:bold; color:#0000CC; font-size:20px" >ODF Activity Photogallery From Whatsapp </span>
<?php echo $_51d['ScreenPixelsHeight']; //Output screen height.
echo $_51d['ScreenPixelsWidth']; ?>
s

<br />


<!--<p id="demo"></p>-->

<!--onLoad="myFunction()"-->

<script>
function myFunction() {
    var x = "Total Width: " + screen.width + "px";
    document.getElementById("demo").innerHTML = x;
	/*var selectedCarNoideId = "1026";                                
            <%Session["BannerNoideID"] = "'+ selectedCarNoideId +'";%>              
            alert('<%=Session["BannerNoideID"]%>'); */
	//sessionStorage.setItem("SessionName","SessionData");
	Session["SessionName"]=sessionval;
	 //window.location="http://localhost/sanitation-report/indexes.php?action=dashboard=getvalue"+x;
}
</script>


 

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">
<!--<div style="float:left; margin-left:-570px"><img src="dist/img/fazli.jpg"  width="140" /></div>-->
           <div> <img src="dist/img/nirmal-logo5.png" /></div>

            
            </section><!-- right col -->
			<section class="content">
          <div class="row">
		 <?php if($_SESSION['userid']=='admin') { ?>
		  
            <!-- /.col -->
            <div class="col-md-6">
              <!-- /.box -->
			  
			  
<?php if($deviceType=='computer') { ?>
                  <!--<table class="table table-striped" style="width:10%">-->
				  
				  <div class="box" style="width:200%">
                <div class="box-header" >
                  <h3 class="box-title" style="color:#666600">Progress Report
				  
				<div style="margin-left:200px">  <form action="" method="post" id="myForm" name="myForm">
				<label style=" font-size:23px;color:#009900; margin-left:-100px" class="rbt">&nbsp;&nbsp;&nbsp;Select Block - GP : &nbsp;&nbsp;&nbsp;
				
				<select name="b" class="styled-select1 blue semi-square" style="color:#FFFF00; width:50%">
				<?php if($_SESSION['userid']=='admin') 
				{
				$datasetblock=$ob->get_recs("sansad_gp_block_t_a","*","","","block,gp");
				
				}
				else if(($_SESSION['userid']=='Ratua-I') || ($_SESSION['userid']=='Manikchak') || ($_SESSION['userid']=='Kaliachak-III'))
{
				
				$datasetblock=$ob->get_recs("sansad_gp_block_t_a","*","`block`='".$_SESSION['block']."' and `gp`='".$_SESSION['gp']."' ","","gp,village_name");
				
				}
				
				else
				{
				
				
				}
				
				?>
				<option>--------------------Select-------------------------</option>
				
				<?php if($datasetblock){ 




foreach($datasetblock as $datablock)
{
?>

<option><?php echo $datablock->block;  ?> - <?php echo $datablock->gp;  ?></option>
<?php
}

}


				
				
				
				
?>
</select>	</label>			
				<style>
	.rbtext {			
	color: #fff;
text-shadow: #fff 0 -1px 4px, #ff0 0 -2px 10px, #ff8000 0 -10px 20px, red 0 -18px 40px;
}	
{
    font-family: Helvetica, Arial, sans-serif;
    font-weight: bold;
    font-size: 6em;
    line-height: 1em;
}
.rbtext2 {
    /* Shadows are visible under slightly transparent text color */
    color: rgba(10,60,150, 0.8);
    text-shadow: 1px 4px 6px #def, 0 0 0 #000, 1px 4px 6px #def;
}



	
				
.rbt {
  text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
}

				
				.button {
    border: none;
    background-image: url('/dist/img/search.png') no-repeat top left;
    padding: 2px 8px;
	
	
}



.css_btn_class {

	font-size:14px;
	font-family:Arial;
	font-weight:normal;
	-moz-border-radius:18px;
	-webkit-border-radius:18px;
	border-radius:18px;
	border:2px solid #337fed;
	padding:6px 18px;
	text-decoration:none;
	background:-moz-linear-gradient( center top, #3d94f6 19%, #1e62d0 86% );
	background:-ms-linear-gradient( top, #3d94f6 19%, #1e62d0 86% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#3d94f6', endColorstr='#1e62d0');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(19%, #3d94f6), color-stop(86%, #1e62d0) );
	background-color:#3d94f6;
	color:#ffffff;
	display:inline-block;
	text-shadow:3px -2px 0px #1570cd;
 	-webkit-box-shadow:inset 1px 1px 18px -6px #97c4fe;
 	-moz-box-shadow:inset 1px 1px 18px -6px #97c4fe;
 	box-shadow:inset 1px 1px 18px -6px #97c4fe;
	 
}.css_btn_class:hover {
	background:-moz-linear-gradient( center top, #1e62d0 19%, #3d94f6 86% );
	background:-ms-linear-gradient( top, #1e62d0 19%, #3d94f6 86% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e62d0', endColorstr='#3d94f6');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(19%, #1e62d0), color-stop(86%, #3d94f6) );
	background-color:#1e62d0;
}.css_btn_class:active {
	position:relative;
	top:1px;
}
</style>
		 
				
			<label>	<input id="button" type="submit"  name="searchvalue" class="btn btn-primary css_btn_class"   value="Search"  size="200"   style="margin-top:-77px; margin-left:500px" />
				</label><img src="dist/img/search2.png"  width="87" style="margin-top:-117px; margin-left:600px" /></form>
				  s
				 </div>
				 </h3></div>
                <!-- /.box-header -->
                <div class="box-body no-padding" style=" margin-top:-70px">
                  <table class="table table" >
                    <tr style="background-color:rgba(219, 243, 18, 0.17)">
                      <th style="width:2px">#</th>
                      <th style="width:7px">Block</th>
					   <th style="width:7px">GP</th>
					   <th style="width:4px">Sansad</th>
					    <th align="width:10px">Target</th>
						 <th style="width:10px">CUM.<br />Achvmnt till
						 
						<?php 
						
						$cdate=date("Y-m-d");
		$date=date_create(date("Y-m-d"));

$curs=date_format($date,"d-m-Y");	
						$phpdate = strtotime( $curs );
echo $mysqldate = date( 'jS F Y', $phpdate );
?>
						 </th>
						 <th style="width:10px">Today's<br />Achvmnt</th>
						  <th style="width:10px">Pending</th>
						   <th style="width:10px" >No. of Masson & <br />Suppervisor<br /> Engaged Today</th>
						    
							 
							  <th style="width:70px">No. of CF Monitored Today</th>
							   <th style="width:200px" colspan="4">Reason for<br />Poor Achievement<br /><label style="color:#FF0000">(To be filled in BDO)</label></th>
					  
					   <!-- <th>Total Achievement as on <?php //echo $curs; ?></th>-->
                      <!--<th>Progress</th>
                      <th style="width: 40px">Total No.</th>-->
                    </tr>
					
					
					<?php 
					if($_REQUEST['searchvalue'])
	
	{
	
	//echo "RB".$_REQUEST['b'];
	$ex=explode(" - ",$_REQUEST['b']);
	//echo $ex['0'];
	//echo $ex['1'];
	$dataset=$ob->get_recs("sansad_daily_rec","*","`block`='".$ex['0']."' and `gp`='".$ex['1']."'","block,gp","id ASC");
	
	} else {
					$dataset=$ob->get_recs("sansad_daily_rec","*","","block,gp","id ASC");
}
	
					
					
					
$cc=1;					
$c=1;
$tsum=0;
$achievementsum=0;
$pendingsum=0;					
$gpsumt=0;
$sumta=0;


$summ=0;
$sums=0;
$sumcf=0;
$itarget=0;
$targeton=0;
$targeta=0;
$sumeff=0;
$ta=0;
$gsum=0;
if($dataset){
foreach($dataset as $data)
{
?>



  <tr <?php if($c%2=='0') { ?> style="background-color: rgba(0, 136, 204, 0)" <?php } else{ ?> style="background-color:rgba(221, 221, 221, 0.83)" <?php } ?> > 
                      <td style="width:2px"><?php echo $cc; ?></td>
                      <td style="width:10px"><?php echo $data->block ?></td>
					  <td ><?php echo $data->gp ?>
					  
					  </td>
					   <td><?php 
					  
					   
					   if($oldgp!=$data->gp)
					   
					  
					   { $c=1; }
					    echo $c; 
					  
					     ?></td>
					  
					   <td style="width:7%; text-align:center" ><?php 
					 
					  echo $data->target;
					   /*if($data->gp=='Birnagar-I')
					   {
					   $gpsumt+=$data->target;
					   }*/
					   
					  $tsum+=$data->target;
					  ?></td>
					   <td style="width:7%; text-align:center" ><?php echo $cata=$data->achievement+$data->today_achivment;
					   $achievementsum+=$cata;
					   
					   
					   $pair="gross_achivment='".$cata."'";





$update=$ob->db_update("sansad_daily_rec","$pair","block='".$data->block."' and `gp`='".$data->gp."'  and `id`='".$data->id."'");
					   
					   
					   
					?></td>
					    <td style="width:7%; text-align:center" ><?php 
						echo $data->today_achivment;
						$sumta+=$data->today_achivment;
					 ?></td>
					  <td style="text-align:center"> <?php 
					  echo $pending=$data->target-$cata;
					 $pendingsum+=$pending;  
						
						?> 
						</td>
						
						<td style="text-align:center">
						<?php echo $data->masson_no;
						$summ+=$data->masson_no;?>,
						   <?php   
						echo $data->sup_no;
						$sums+=$data->sup_no;
						?> 
						</td>
						<td style="text-align:center">
						<?php   
						echo $data->cf_no;
						$sumcf+=$data->cf_no;
						?>  
						</td>
						<td style="text-align:center; width:200px" colspan="4"> <?php   
						echo $data->poor_achivment_reason;
						?> 
						</td>
						
						
						
					  
				
				
					  
					  
					   <!--<td><?php 
					 /* $cur=date("Y-m-d");
					  $datarecord=$ob->get_rec("report","sum(achievement) as achievment","`block`='".$data->block."' and `gp`='".$data->gp."' and `c_date`<='".$cur."'","id ASC");
					  
					  echo $datarecord->achievment*/ ?></td>-->
					
                      <!--<td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-red"><?php echo $c ;?></span></td>-->
                    </tr>
<?php 
$c++;
$cc++;
 $oldgp=$data->gp;
}


}
?>
                   
      <tr style="font-weight:bold; background-color:#00A4A4; color:#FFFFFF; font-size:14.6px; text-align:left"><td ></td><td ></td><td style="text-align:right" colspan="2">Grand Total</td><td style="text-align:center"  ><?php echo 
						$tsum;
						?></td><td style="text-align:center"><?php echo  
						$achievementsum;
						?></td>
						
						
						<td style="text-align:center"> <?php   
						echo $sumta;
						?>  </td>
						
						<td style="text-align:center"> <?php   
						echo $pendingsum;
						?>  </td>
						
						
						<td style="text-align:center"><?php   
						echo $summ;
						?>, <?php   
						echo $sums;
						?> 
						</td>
						
						<td style="text-align:center"><?php   
						echo $sumcf;
						?> </td>
						
						<td style="text-align:center" colspan="4"></td>
						
						
						</tr>                
                    <!--<tr>
                      <td>3.</td>
                      <td>On Verification Process</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-light-blue">30</span></td>
                    </tr>-->
                   
					<?php
				/*	
					$dataset3=$ob->get_recs("masterdata","*","status='D'");
$c=0;
if($dataset3){
foreach($dataset3 as $data)
		{
		$c;
		$c++;
		}
		}*/
		?>
		<tr style="font-weight:bold; background-color:#FFFFFF; color:#00000; font-size:14.6px; text-align:left"><td  colspan="10" style="text-align:center"></td>
						
						
						
						</tr>
		<tr style="font-weight:bold; background-color:#FFCAB0; color:#00000; font-size:14.6px; text-align:left"><td  colspan="14" style="text-align:center">GP WISE REPORT</td>
						
						
						
						</tr>
		
		
						
		<tr style="font-weight:bold; background-color:rgba(219, 243, 18, 0.17); color:#00000; font-size:14.6px; text-align:left"><td  colspan="2">Block</td><td >GP Name</td><td></td><td style="text-align:right"></td><td style="text-align:center"> Target<?php //echo $tsum;
						?></td>
						<td style="text-align:center" > Achievement Till 11-08-2016 Feed by GP (A)<?php 
						  
						//echo $achievementsum;
						?></td>
						<td style="text-align:center" >Cummulative Achievement Till Today(B) <?php 
						  
						//echo $achievementsum;
						?></td>
						<td style="text-align:center" >B-A <?php 
						  
						//echo $achievementsum;
						?></td>
						<td style="text-align:center" >Today's Achievement <?php 
						  
						//echo $achievementsum;
						?></td>
						
						<td style="text-align:center">Pending<?php   
						//echo $pendingsum;
						?> 
						</td>
						<td style="text-align:center" colspan="4">
						</td>
						
						</tr>
						
						
						<?php $dataset2=$ob->get_recs("sansad_daily_rec","block,gp,sum(target) as gpt,sum(achievement) as gpa,sum(achievement_12_08) as gpaa,sum(today_achivment) as ta","","block,gp","block,gp","");
						if($dataset2)
						{
						$cw=1;
						foreach($dataset2 as $datw)
						{
						
						
						
						 ?>
						
						
                   <tr <?php if($cw%2=='0') { ?> style="background-color: rgba(0, 136, 204, 0)" <?php } else{ ?> style="background-color:rgba(221, 221, 221, 0.83)" <?php } ?> > <td style="width:20%" colspan="2"><?php echo 
						$datw->block;
						?></td><td style="width:20%" >	<?php echo 
						$datw->gp;
						?></td><td></td><td style="text-align:right"></td><td style="text-align:center"><?php echo 
						$datw->gpt;
						?></td>
						<td style="text-align:center"><?php 
						echo $datw->gpaa;
						?></td>
						<td style="text-align:center"><?php echo  
						$ga=$datw->gpa+$datw->ta;
						?></td>
						<td style="text-align:center"><?php echo  
						$gaa=$ga-$datw->gpaa;
						?></td>
						<td style="text-align:center"><?php echo  
						$datw->ta;
						?></td>
						
						
						<td style="text-align:center"><?php   
						echo $datw->gpt-$ga;
						?> 
						</td>
						
						<td style="text-align:center">
						</td>
						<td style="text-align:center">
						</td>
						<td style="text-align:center">
						</td>
						
						</tr> 
						
						<?php $cw++; } } ?>
                  </table>
                </div><!-- /.box-body -->
              </div>
				  
				  
				  
				  
				   <?php } else { ?>
              <div class="box" style="width:105%">
                <div class="box-header">
                  <h3 class="box-title" >Progress Report</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding" style="width:10%">
				
						

					<table class="table-striped" style="width:10%">
					    
                    <tr style="width:70%">
                      <th style="width:2%">#</th>
                      <th style="width:7%">Block</th>
					  

					   <th  style="width:7%">GP</th>
					   
						
					    <th style="width:7%; color:#FF491C">Total Target</th>
						 <th style="width:7%; color:#FF9933">Target as on <?php echo $curs; ?></th>
					    <th style="width:7%; color:#00CC00">Achiev<br />ement</th>
					  
					   <!-- <th>Total Achievement as on <?php //echo $curs; ?></th>-->
                      <!--<th>Progress</th>
                      <th style="width: 40px">Total No.</th>-->
                    </tr>
					
					
					<?php $dataset=$ob->get_recs("report","*","","id ASC","gp");
$c=1;
if($dataset){
foreach($dataset as $data)
{
?>



     
                    <tr style="width:70%">
                      <td style="width:2%; padding-right:2px"><?php echo $c; ?></td>
                      <td  style="width:2%; padding-right:2px"><?php echo $data->block ?></td>
					 <td  style="width:2%; padding-right:2px"><?php echo $data->gp ?></td>
					  
					  
					   <td  style="width:2%; padding-right:15px;text-align:center"><?php 
					 
					  $datarec1=$ob->get_rec("report","sum(initial_target) as t","`block`='".$data->block."' and `gp`='".$data->gp."'","id ASC");
					  
					  echo $datarec1->t ?></td>
					  <td  style="width:2%; padding-right:25px;text-align:center"><?php 
					  $cur=date("Y-m-d");
					  $datarec=$ob->get_rec("report","sum(target) as t","`block`='".$data->block."' and `gp`='".$data->gp."' and `c_date`<='".$cur."'","id ASC");
					  
					  echo $datarec->t ?></td>
					   <td  style=" text-align:left"><?php 
					 
					  $datarecord1=$ob->get_rec("report","sum(achievement) as achievment","`block`='".$data->block."' and `gp`='".$data->gp."'","id ASC");
					  
					  echo $datarecord1->achievment ?></td>
					  
					 
                    </tr>
<?php 
$c++;
}

}
?>
                   
                    
                    <!--<tr>
                      <td>3.</td>
                      <td>On Verification Process</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-light-blue">30</span></td>
                    </tr>-->
                   
					<?php
				/*	
					$dataset3=$ob->get_recs("masterdata","*","status='D'");
$c=0;
if($dataset3){
foreach($dataset3 as $data)
		{
		$c;
		$c++;
		}
		}*/
		?>
                   
                  </table>
				 
                </div><!-- /.box-body -->
              </div>
			 <?php } ?>
			  
			  
			  <!-- /.box -->
            </div><!-- /.col -->
			 <?php } else { ?>
			
			 <?php ?>
		  
            <!-- /.col -->
            <div class="col-md-6">
              <!-- /.box -->
			  
			  <?php 	
			
		
		
		$date=date_create(date("Y-m-d"));

$curs=date_format($date,"d-m-Y");	
			 ?>

<?php if($deviceType=='computer') { 
//echo $_SESSION['block'];
//echo $_SESSION['gp'];
?>

              <div class="box" style="width:200%">
                <div class="box-header">
                  <h3 class="box-title" style="color:#99CC00">Progress Report
				 
				  
				   <form action="" method="post" id="myForm" name="myForm">
				<label style=" font-size:23px;color:#009900" class="rbt">&nbsp;&nbsp;&nbsp;Select Block - GP - Village : &nbsp;&nbsp;&nbsp;</label><label><select name="b" class="styled-select1 blue semi-square" style="color:#FFFF00; width:100%">
				<?php if($_SESSION['userid']=='admin') 
				{
				$datasetblock=$ob->get_recs("sansad_gp_block_t_a","*","","","block,gp,village_name");
				
				}
				else
				{
				
				print_r($datasetblock=$ob->get_recs("sansad_gp_block_t_a","*","`block`='".$_SESSION['block']."' ","","gp"));
				
				}
				
				?>
				<option>--------------------Select-------------------------</option>
				<?php if($datasetblock){ 




foreach($datasetblock as $datablock)
{
?>

<option><?php echo $datablock->block;  ?> - <?php echo $datablock->gp;  ?></option>
<?php
}

}


				
				
				
				
?>
</select>	</label>			
				<style>
	.rbtext {			
	color: #fff;
text-shadow: #fff 0 -1px 4px, #ff0 0 -2px 10px, #ff8000 0 -10px 20px, red 0 -18px 40px;
}	
{
    font-family: Helvetica, Arial, sans-serif;
    font-weight: bold;
    font-size: 6em;
    line-height: 1em;
}
.rbtext2 {
    /* Shadows are visible under slightly transparent text color */
    color: rgba(10,60,150, 0.8);
    text-shadow: 1px 4px 6px #def, 0 0 0 #000, 1px 4px 6px #def;
}



	
				
.rbt {
  text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
}

				
				.button {
    border: none;
    background-image: url('/dist/img/search.png') no-repeat top left;
    padding: 2px 8px;
	
	
}



.css_btn_class {

	font-size:14px;
	font-family:Arial;
	font-weight:normal;
	-moz-border-radius:18px;
	-webkit-border-radius:18px;
	border-radius:18px;
	border:2px solid #337fed;
	padding:6px 18px;
	text-decoration:none;
	background:-moz-linear-gradient( center top, #3d94f6 19%, #1e62d0 86% );
	background:-ms-linear-gradient( top, #3d94f6 19%, #1e62d0 86% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#3d94f6', endColorstr='#1e62d0');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(19%, #3d94f6), color-stop(86%, #1e62d0) );
	background-color:#3d94f6;
	color:#ffffff;
	display:inline-block;
	text-shadow:3px -2px 0px #1570cd;
 	-webkit-box-shadow:inset 1px 1px 18px -6px #97c4fe;
 	-moz-box-shadow:inset 1px 1px 18px -6px #97c4fe;
 	box-shadow:inset 1px 1px 18px -6px #97c4fe;
	 
}.css_btn_class:hover {
	background:-moz-linear-gradient( center top, #1e62d0 19%, #3d94f6 86% );
	background:-ms-linear-gradient( top, #1e62d0 19%, #3d94f6 86% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e62d0', endColorstr='#3d94f6');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(19%, #1e62d0), color-stop(86%, #3d94f6) );
	background-color:#1e62d0;
}.css_btn_class:active {
	position:relative;
	top:1px;
}
</style>
		 
				
				<input id="button" type="submit"  name="searchvalue" class="btn btn-primary css_btn_class"   value="Search"  size="200"   style="margin-top:-3px" />
				</label><img src="dist/img/search2.png"  width="87" style="margin-top:0px" /></form></h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table">
                    <tr style="background-color:rgba(219, 243, 18, 0.17)">
                      <th style="width: 10px">#</th>
                      <th>Block</th>
					   <th>GP</th>
					   <th>Sansad</th>
					   <th>Target</th>
					   
					    <th>Achievement </th>
					   
					    
						
					   <!-- <th>Total Achievement as on <?php //echo $curs; ?></th>-->
                      <!--<th>Progress</th>
                      <th style="width: 40px">Total No.</th>-->
                    </tr>
					
					<?php
					
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
	
	
	if($_REQUEST['searchvalue'])
	
	{
	
	//echo "RB".$_REQUEST['b'];
	$ex=explode(" - ",$_REQUEST['b']);
	?>
	<div style="background-color:rgb(252, 188, 143); text-align:center" class="rbt"><?php echo "<b style='font-size:15px;color:black'>Block : </b>".' <b style="font-size:21px; color:blue">'.$ex['0']."</b>,<b style='font-size:15px;color:black'> GP : </b><b style='font-size:21px; color:blue'>".$ex['1'].'</b>, <b style="font-size:15px;color:black">  </b> <b style="font-size:21px; color:blue">' ?></div>
	<?php 
	
	
	
	
$dataset=$ob->get_recs("sansad_gp_block_t_a","*","`block`='".$ex['0']."' and `gp`='".$ex['1']."' ","id ASC");
$c=1;
$mssum=0;
$supsum=0;
$suplsum=0;
if($dataset){
foreach($dataset as $data)
{

	

					
					
				
					
					
					
					
					


?>



  <tr <?php if($data->cons_status=='1') { ?> style="background-color:rgba(0, 166, 90, 0.17)" <?php } else { ?> <?php if($c%2=='0') { ?> style="background-color: rgba(0, 136, 204, 0)" <?php } else{ ?> style="background-color:rgba(221, 221, 221, 0.83)" <?php } ?> <?php } ?>>
                      <td><?php echo $c; ?></td>
                      <td><?php echo $ex['0'] ?></td>
					  <td><?php echo $ex['1'] ?></td>
					  
					  <td>Sansad<?php echo $c;  ?></td>
					
<td> <?php echo $data->target ; ?> 
</td><td> <?php echo $data->achievement ; ?> </td>
						 
                        
					  
					   
                     
					</tr>
					
					<?php $c++; } } } ?>
					
                  </table>
				  
                </div><!-- /.box-body -->
              </div>
			  
			 <?php  } else { ?>
			 
			  <div class="box" style="width:200%">
                <div class="box-header">
                  <h3 class="box-title">Progress Report</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table-striped" style="width:10%">
					    
                    <tr style="width:70%">
                      <th style="width:2%">#</th>
                      <th style="width:7%">Block</th>
					  

					   <th  style="width:7%">GP</th>
					   
						
					    <th style="width:7%; color:#FF491C">Total Target</th>
						 <th style="width:7%; color:#FF9933">Target as on <?php echo $curs; ?></th>
					    <th style="width:7%; color:#00CC00">Achiev<br />ement</th>
					   <!-- <th>Total Achievement as on <?php //echo $curs; ?></th>-->
                      <!--<th>Progress</th>
                      <th style="width: 40px">Total No.</th>-->
                    </tr>
					
					
					<?php $dataset=$ob->get_rec("report","*","`block`='".$_SESSION['block']."' and `gp`='".$_SESSION['gp']."'","id ASC");
$c=1;
/*if($dataset){
foreach($dataset as $data)
{*/
?>



  <tr>
                      <td style="width:2%; padding-right:2px"><?php echo $c; ?></td>
                     <td style="width:2%; padding-right:2px"><?php echo $dataset->block ?></td>
					  <td style="width:2%; padding-right:2px"><?php echo $dataset->gp ?></td>
					  <td style="width:2%; padding-right:2px"><?php 
					 $datarec1=$ob->get_rec("report","sum(initial_target) as t","`block`='".$_SESSION['block']."' and `gp`='".$_SESSION['gp']."' ","id ASC");
					 
					
					  
					  echo $datarec1->t ?></td>
					  <td style="width:2%; padding-right:2px"><?php 
					  $cur=date("Y-m-d");
					  
					  $datarec=$ob->get_rec("report","sum(target) as t","`block`='".$_SESSION['block']."' and `gp`='".$_SESSION['gp']."' and `c_date`<='".$cur."'","id ASC");
					  
					  echo $datarec->t ?></td>
					  <td style="width:2%; padding-right:2px"><?php 
					  $datarecord1=$ob->get_rec("report","sum(achievement) as achievment","`block`='".$_SESSION['block']."' and `gp`='".$_SESSION['gp']."' ","id ASC");
				
				
					
					  
					  echo $datarecord1->achievment ?></td>
					  
					   
                   
                  </table>
				  
                </div><!-- /.box-body -->
              </div>
			 
			 <?php } ?> 
			  
			  <!-- /.box -->
            </div><!-- /.col -->
			 <?php  } ?>
			
			
			
			 <?php if($_SESSION['userid']=='admin') { ?>
			 <?php if($deviceType=='computer') { ?>
			 
 <?php } else { ?>
			 
<?php } ?>			 
			 
			 
			 
			 
			 
			 
			 
		
		
		<?php } else { ?>
		
		
		  <div class="container-fluid" style="width:100%">
            <div class="row-fluid">
                
                
                <!--/span-->
                <div class="span9" id="content">
                    
                    <div class="row-fluid" style="width:131%">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" style="color:#000000; font-size:18px; padding:10px">Statistics</div>
                                <div class="pull-right"><span class="badge badge-warning"></span>



                                </div>
                            </div>
                           
						  
	
	
	
	
	
						   
						   
						   
						   
			   
	
	
	
	
			   
						   
						   
			  
	
	
	
	
		   
						   
						   
						   
			  
	
	
	
	
			   
						   
				  
	
	
	
	
	
						   
				
	
	
	
	
	
						   
						   
						   
			   
	
	
	
	
				   
						   
				
				  
	
	
	
	
	
						   
						   
						   
						   
			   
	
	
	
	
				   
						   
				
				  
	
	
	
	
	
						   
						   
						   
						   
			   
	
	
	
	
			   
						   
				
				  
	
	
	
	
						   
						   
						   
						   
			   
	
	
	
	
				   
						   
				  
	
	
	
	
	
						   
						   
						   
						   
			   
	
	
	
	
				   
						   
				  		   
						   
						   
						   
			   
	
	
	
	
				   
				
				
				
				<table style="width:100%">
							   
			 <tr>
 
  <?php  
  
 //mysql_connect("localhost","ssms","ssms");
 // mysql_select_db("sanitation_report");
  include "libchart/classes/libchart.php";
  
$datapie=$ob->get_rec("report","*","`block`='".$_SESSION['block']."' and `gp`='".$_SESSION['gp']."'","","","");
if($datapie)
{
$count=1;
/*foreach($datapie as $pie)
{
*/


  ?>
  
				
				
				<td style="width:33%">
  <div class="box effect5" style="width:348x; float:left; margin-right:7px; margin-top:0px">
<div style="height:26px; background-color:#E3F0F9; padding:4px" align="center"><?php echo $datapie->gp; ?> 

  </div>

<?php  




	$chart = new PieChart();
$chart->getPlot()->getPalette()->setPieColor(array(
		
		new Color(0,128, 0),
		new Color(255, 128, 0),
		new Color(255, 0, 0)
		
		
		
	));
	
	$dataSet = new XYDataSet();
	
	
	echo "<table width='25%' cellpadding='0' cellspacing='0' border='0' style='margin:20px;height:200px' id='tableresult' >\n";
	
	  echo "<tr stylle='background-color:black'>";	
	  	
	
	
	for($i=1;$i<3;$i++)
	{
	
	$rsBns1="SELECT sum(`initial_target`) as t FROM `report` WHERE `gp`='".$datapie->gp."' and `c_date`<='2016-08-03'";
	
	$rsBns1_="SELECT sum(`achievement`) as t2 FROM `report` WHERE `gp`='".$datapie->gp."'";
	
	
	
	 //$rsBns1="SELECT sum(`achievement`) as t2,sum(`initial_target`) as t FROM `report` WHERE `gp`='".$datapie->gp."'";
	
	$res1=mysql_query($rsBns1);
		$res1_=mysql_query($rsBns1_);
	$num_rowsq=mysql_num_rows($res1);
	
	$c=1;
//	$rowOffice[]=array();
while($row1=mysql_fetch_array($res1))
{
while($row1_=mysql_fetch_array($res1_))
{
if($i==1){

if($datapie->gp=='Kumbhira')
{
$sv='1548';
$rowOffice=$sv-$row1_[t2];
$lbl='Target';
}
else
{
$rowOffice=$row1[t]-$row1_[t2];
$lbl='Target';
}

}
if($i==2){
$rowOffice=$row1_[t2];
$lbl='Achievement';
}
//echo "C".$rowOffice[$count];
/*
if($rowOffice1>=$rowOffice2)
{

if($i==1){
echo $rowOffice=$row1[t]-$row1[t2];
$lbl='Target';
}
if($i==2){
echo $rowOffice=$row1[t2];
$lbl='Achievement';
}

}
if($rowOffice1<$rowOffice2)
{
if($i==1){
echo $rowOffice=$row1[t2];
$lbl='Target';
}
if($i==2){
echo  $rowOffice=$row1[t]-$row1[t2];
$lbl='Achievement';
}




}*/


//echo "RB".$rowOffice;
$c++;

echo " <tr>";
	// if ($num_rowsq>0) {
	$dataSet->addPoint(new Point($lbl,$rowOffice)); //}
$caption=$datapie->gp."Total Target / Achievement ( ".$row1[t]. " / ".$row1_[t2]." )";
	
	}
	 }
	//}
	
	
//	  }
	    echo " <tr></tr>
	  ";
	  
	echo "</table>\n";

	
	
	
	
	if($dataSet!='')
	{
	$chart->setDataSet($dataSet);

	$chart->setTitle($caption);
	
	$a="generated/demo".$pie->gp.".png";
	$chart->render($a);
	
	//$chart->render("generated/demo10.png");
?>

	
	<img alt="Pie chart"  src="<?php echo $a;?>" style="border: 1px solid gray; margin-left:37%; margin-top:-222px; height:200px;margin-bottom:31px; width:370px"/>
	<!--<img alt="Pie chart"  src="generated/demo10.png" style="border: 1px solid gray; margin-left:2px; margin-top:-222px; height:200px;margin-bottom:31px; width:243px"/>-->
	
	</div>
	
	</td>
	
	
	<?php }
	
	
	$count++;
	}
}
	 ?>	
				
				
				
				
				
				
				
				</tr>
				 <!--<a href="#" class="scrollToTop" >Scroll To Top</a>-->
				</table>
						   
				 	
			   
						   
						   
			 			   
						   
				 	   
						   
						   
			   				 
                        </div>
                        <!-- /block -->
                    </div>
                    
                    
                    
                </div>
            </div>
            <hr>
            
        </div>
		<?php }  ?>
		
        <!--/.fluid-container-->
        
          </div><!-- /.row -->
          
        </section>
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	  
	  
	
	
	
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>

<
	<a href="#" class="scrollToTop">Scroll To Top</a>
	  <?php
     include"lib/footer.php";
	
	
	
	
	 ?>
	 