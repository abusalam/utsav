<?php
if($_SERVER['HTTPS']!='on') {
    $redirect= 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    header("Location:$redirect");
    exit();
}
if (strtotime(START_DATE)<time()) {
    include "welcome.php";
    exit();
}
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>UTSAV</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3<bo.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
	<link href="dist/new/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />-->
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	<style>
	.burning{
	text-shadow: 0px 1px 1px #4d4d4d;
	color: #00a65a;
	font: 80px 'LeagueGothicRegular';
/*	text-shadow: 0 1px 0 #ccc,
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
               0 20px 20px rgba(0,0,0,.15);*/
}

</style>


<script type="text/javascript">



  

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


  </head>
  
  <?php
    if(isset($_REQUEST['submitlogin'])) {
        include_once("config/config.php");
        include_once("config/database.php");
        $ob= new database();
        $user=$_REQUEST['user_id'];
        $pass=$_REQUEST['password'];
        $checkUser=$ob->get_rec("user_reg","*","`mobile`='".$user."' AND `pwd`='".$pass."'");
    
        if($checkUser) {
            $_SESSION['userid']=$checkUser->user_id;
            $_SESSION['user']=$checkUser->code;
            $_SESSION['cat']=$checkUser->category;
            $_SESSION['ps']=$checkUser->ps;
            $_SESSION['id']=$checkUser->id;
            $_SESSION['mobile_no']=$checkUser->mobile;
            $_SESSION['org_club']=$checkUser->org_club;	 
            echo '<script type="text/javascript" language="javascript">window.location="indexes.php?action=dashboard";</script>';
        } else {
        	echo '<script type="text/javascript" language="javascript">window.location="index.php?error=loginerror";</script>';
        }
    }
  ?>
  <body class="login-page" style="background-image:url(images/kashphool.jpg);background-repeat-x: no-repeat; background-repeat-y: no-repeat;  background-size:100% 100%;">
    <div class="login-box" style="width:auto;max-width:800px">
        <div class="login-box-body" style="border-radius: 25px;">
            <img src="images/2198.thumb.gif" width="70" style="float:left"/>
            <div style="text-align:center">
                <span style="font-size:30px" class="burning">U</span><span style="font-size:20px" class="burning">tility </span>
                <span style="font-size:30px" class="burning">T</span><span style="font-size:20px" class="burning">ool of </span>
                <span style="font-size:30px" class="burning">S</span><span style="font-size:20px" class="burning">ingle </span>
                <span style="font-size:20px" class="burning">window </span>
                <span style="font-size:30px" class="burning">A</span><span style="font-size:20px" class="burning">pplication </span>
                <span style="font-size:20px" class="burning">for </span> 
                <span style="font-size:20px" class="burning">Puja &amp; </span>  
                <span style="font-size:30px" class="burning">V</span><span style="font-size:20px" class="burning">erification </span> 
                <span style="font-size:30px" class="burning">(UTSAV)</span>
            </div>
            <div class="row">
                <?php
                    if($_REQUEST['report']=='successfull') {
                        echo '<div class="alert alert-success" role="alert">Your registration process is successfully completed!</div>';
                    } 
                ?>
                <?php
                    if($_REQUEST['error']=='loginerror') { 
                        echo '<div class="alert alert-danger" role="alert">Your User Id / Password is wrong. Please try again!</div>';
                    }
                ?>
                <?php
                    if($_REQUEST['error']=='true') {
                        echo '<div class="alert alert-warning" role="alert">Your mobile number is exist. Please register with another mobile number !</div>';
                    }
                ?>	
                <div class="col-md-6">
                    <form style="padding:20px;margin-bottom:20px;" action="#" method="post" >
                        <div class="form-group row has-feedback">
                            <span style="text-align:left; font-weight:bold;color:#0066CC">UTSAV Login</span>
                        </div>
                        <div class="form-group row has-feedback">
                            <input type="text" class="form-control"  name="user_id" placeholder="User Id / Mobile No." id="user_id"/>
                        </div>
                        <div class="form-group row has-feedback">
                            <input type="password" class="form-control" name="password" placeholder="Password" id="password"/>
                        </div>
                        <button type="submit" name="getApprovedList" class="btn btn-success" >List of Approved Puja Organizers</button>
                        <button type="submit" name="submitlogin" class="btn btn-primary pull-right" onClick="return login_check();">Log In</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <form style="padding:20px;margin-bottom:20px;" action="fun/reg_init.php" method="post">
                        <div class="form-group row has-feedback">
                            <span style="text-align:left; font-weight:bold;color:#0066CC">UTSAV Registration</span>
                            <span class="pull-right"><b style="color:#FF0000" >*</b> mandatory fields</span>
                        </div>
                        <div class="form-group row has-feedback">
                            <label for="ps"><b style="color:#FF0000">*</b>Police Station</label>
                                   <select class="form-control" name="ps" id="ps">
                                        <option disabled="disabled" selected="selected">Select PS</option>
                                        <option value="BSN Baishnabnagar PS">Baishnabnagar PS</option>
                                        <option value="BMG Bamongola PS">Bamongola PS</option>
                                        <option value="BTN Bhutni PS">Bhutni PS</option>
                                        <option value="CHL Chanchal PS">Chanchal PS</option>
                                        <option value="EBP English Bazar PS">English Bazar PS</option>
                                        <option value="GLE Gazole PS">Gazole PS</option>
                                        <option value="HBP Habibpur PS">Habibpur PS</option>
                                        <option value="HCP Harischandrapur PS">Harischandrapur PS</option>
                                        <option value="KCK Kaliachak PS">Kaliachak PS</option>
                                        <option value="MLD Malda PS">Malda PS</option>
                                        <option value="MCK Manikchak PS">Manikchak PS</option>
                                        <option value="MTB Mothabari PS">Mothabari PS</option>
                                        <option value="PKR Pukhuria PS">Pukhuria PS</option>
                                        <option value="RTA Ratua PS">Ratua PS</option>
                                   </select>
                        </div>
                        <div class="form-group row has-feedback">
                            <label for="org"><b style="color:#FF0000">*</b>Organisation / Club</label>
                            <input type="text" class="form-control" id="org" name="org" placeholder="Organisation / Club"/>
                        </div>
                        <div class="form-group row has-feedback">
                            <label for="emailid">Email Id</label>
                            <input type="text" class="form-control" name="emailid" placeholder="Email Id"/>
                        </div>
                        <div class="form-group row has-feedback">
                            <label for="mobile"><b style="color:#FF0000">*</b>Club Registered Mobile No.</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Club Registered Mobile No."/>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary pull-right" onClick="return validat();">Get OTP</button>
                    </form>
                </div>
            </div>
        <?php
            if(isset($_REQUEST['getApprovedList'])) {
                include_once("config/config.php");
                include_once("config/database.php");
                $ob= new database();
                $checkrecord=$ob->get_recs("application","*","final_per='Yes'","org_name");
        ?>
        		<div class="row">
                    <div class="col-xs-12 text-center">    
                        <h1><?php echo 'List of Approved ' . PUJA_NAME . ' ' . PUJA_YEAR;?></h1>                
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="table-success">
                                <th scope="col">Sl#</th>
                                <th scope="col">ID#</th>
                                <th scope="col">Organiser</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $c=1; if($checkrecord) { foreach($checkrecord as $app) {?>
                            <tr>
                                <th scope="row"><?php echo $c; ?></th>	
                                <td><?php echo $app->app_id ?></td>	
                                <td><?php echo $app->org_name ?> 
                                    (<a href="indexes.php?action=preview&sendvalue=<?php  echo base64_encode ('id.'.$app->id.'.val'); ?>" target="_blank">View Details</a>)
                                </td>
                                <td style="color:#006600">
                                    Approved on <?php echo $app->finalize_date ?><br/>
                                    <a href="indexes.php?action=permission&apppanel=yes&id=<?php echo $app->id ?>" target="_blank">Permission Letter</a>
                                </td>
                            </tr>
                            <?php $c++ ; } } ?>
                        </tbody>
                    </table>
                </div>
        <?php
            }
        ?>
            <div style="padding-top:20px">
                <span><a href="images/utsav.pdf" target="_blank" style="color:#000099;"><img src="images/icon-pdf.png" width="32px">User Manual</a></span>
                <span class="text-center hidden-xs" style="color:#0000FF;padding-left:50px;">For any technical issue contact wbmld(at)nic(dot)in</span>
                <img class="pull-right" src="logo.png">
            </div>
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    
    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
	
	<script>
    	
    	function validat()
    	{
    	
    	
    	var ps=document.getElementById("ps").value;
    	var org=document.getElementById("org").value;
    	var mobile=document.getElementById("mobile").value;
    	if((ps=='') || (ps=='Null'))
    	{
    	document.getElementById("ps").focus();
    	alert("Police Station can't blank");
    	return false;
    	}
    	if((org=='') || (org=='Null'))
    	{
    	document.getElementById("org").focus();
    	alert("Organisation / Club can't blank");
    	return false;
    	}
    	if((mobile=='') || (mobile=='Null'))
    	{
    	document.getElementById("mobile").focus();
    	alert("Mobile Number can't blank");
    	return false;
    	}
    	
    	
    	
    	
    	
    	}
	</script>
	
	<script>
    	function login_check()
    	{
    	var user_id=document.getElementById("user_id").value;
    	var password=document.getElementById("password").value;
    	
    	if((user_id=='') || (user_id=='Null'))
    	{
    	document.getElementById("user_id").focus();
    	alert("User Id can't blank");
    	return false;
    	}
    	if((password=='') || (password=='Null'))
    	{
    	document.getElementById("password").focus();
    	alert("Password can't blank");
    	return false;
    	}
    	
    	
    	
    	//return false;
    	
    	}
	</script>
  </body>
</html>