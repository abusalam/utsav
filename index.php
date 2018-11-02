<?php session_start(); ?>
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
    });
</script>
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
  //include"lib/check.php";
  
if(isset($_REQUEST['submitlogin'])) {
    include_once("config/config.php");
    include_once("config/database.php");
    $ob= new database();
    $user=$_REQUEST['user_id'];
    $pass=$_REQUEST['password'];
    $checkUser = $ob->get_rec("user_reg", "*", "`mobile`='".$user."' AND `pwd`='".$pass."'");

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
  <body class="login-page"  style="background-image:url(images/kashphool.jpg);background-repeat-x: no-repeat;
background-repeat-y: no-repeat;  background-size:100% 100%;">
    <div class="login-box" style="margin-left:160px ;">
	
      <!--<div class="login-logo" >
       <b style="font-size:23px">  <img src="images/durg4.png" width="70" /></b>
      </div>-->
	  <div style='float:left'>
      <div  class="login-box-body" style=" border-radius: 25px; width:970px; text-align:center">
       
       <b style="font-size:23px">  <img src="images/2198.thumb.gif" width="70" style="float:left" /></b>
       <p class="login-box-msg"  ><div style="margin-top:-40px; font-family:French Script MT; font-size:40px; padding-bottom:1px">Aassan </div><div style="margin-top:-20px;"><label style="font-size:37px; margin-top:-20px" class="burning">U</label><label style="font-size:23px" class="burning">tility </label><label style="font-size:37px" class="burning"> &nbsp;T</label><label style="font-size:23px" class="burning">ool of </label><label style="font-size:37px" class="burning"> &nbsp;S</label><label style="font-size:23px" class="burning"> ingle <label style="font-size:23px" class="burning">window </label><label style="font-size:37px" class="burning">&nbsp;A</label>pplication<label style="font-size:23px" class="burning">  &nbsp;for </label> <label style="font-size:23px" class="burning">Puja</label> & <label style="font-size:37px" class="burning">V</label>erification  </label> <label style="font-size:37px" class="burning">( UTSAV )</label></div><br style="font-size:14px"></p>
		
		
		<table>
		
		<tr> <td>
		
		 <div style='width:270px; float:left'>
		 
		 <div style="margin-top:-70px" class="video-field-new"><?php if($_REQUEST['report']=='successfull') { echo "<b style='color:green;padding:10px'>Your registration process is successfully completed!</b>"; } ?></div>
		 <div style="margin-top:0px" ><b style='color:#CC0066;padding:10px'></b></div> 
		 
		 
		 <div style="margin-top:-70px" class="video-field-new"><?php if($_REQUEST['error']=='loginerror') { echo "<b style='color:red;padding:10px'>Your User Id / Password is wrong. Please try again!</b>"; } ?></div>
		 
		 <div style="margin-top:70px" class="video-field-new"><?php if($_REQUEST['error']=='loginerror') { echo "<b style='color:red;padding:10px'></b>"; } ?></div>
	<div style="margin-top:-70px" class="video-field-new"><?php if($_REQUEST['error']=='true') { echo "<b style='color:red;padding:10px'>Your mobile number is exist. Please register with another mobile number !</b>"; } ?></div>	
        <form action="#" method="post" >
		<div class="form-group has-feedback" style="text-align:center; font-weight:bold;color:#0066CC">
            UTSAV Login
           
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control"  name="user_id" placeholder="User Id / Mobile No." id="user_id"/>
           
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" id="password"/>
         
          </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>                        
            </div>
            <div class="col-xs-4">
              <button type="submit" name="submitlogin" class="btn btn-primary btn-block btn-flat" style="border-radius: 5px" onClick="return login_check();">Log In</button>
            </div>
          </div>
        </form>
		</div>
		</td>
		<td width="100px"  colspan="2"></td>
		<td width="400px">
		 <div style='width:270px; margin-left:-20px'>
		<form action="fun/reg_init.php" method="post">
		  <table style="width:700px">
		  <tr>
		  <td></td>
		  <td>
		<div class="form-group has-feedback" style="text-align:left; font-weight:bold; color:#0066CC">
            UTSAV Registration    <a href="images/utsav.pdf" target="_blank" style="color:#000099; padding-left:100px"><img src="images/icon-pdf.png" width="27"> User Manual</a>
           
          </div>
		  <div class="form-group has-feedback" style=" text-align: left">
           <b style="color:#FF0000" >*</b> mandatory fields 
           
          </div>
		  </td>
		</tr>
		  <tr> <td width="100px"><b style="color:#FF0000">*</b>Police Station</td><td><div class="form-group has-feedback" style="width:355px">
           <select class="form-control" name="ps" id="ps">
		   <option></option>
		   <option value="English Bazar PS">English Bazar PS</option>
		   <option value="Old Malda PS">Old Malda PS</option>
		   
		   </select>
            <!--<span class="glyphicon glyphicon-envelope form-control-feedback"></span>-->
          </div></td>
		  
		 </tr>
		  
		  <tr> <td width="100px"><b style="color:#FF0000">*</b>Organisation / Club</td><td><div class="form-group has-feedback" style="width:355px">
            <input type="text" class="form-control"  id="org" name="org" placeholder="Organisation / Club"/>
            <!--<span class="glyphicon glyphicon-envelope form-control-feedback"></span>-->
          </div></td>
		  
		</tr><tr> <td width="100px">Email Id</td><td><div class="form-group has-feedback" style="width:355px">
            <input type="text" class="form-control"   name="emailid" placeholder="Email Id"/>
            <!--<span class="glyphicon glyphicon-envelope form-control-feedback"></span>-->
          </div></td>
		  
		</tr>
		<tr> <td width="200px"><b style="color:#FF0000">*</b>Club Registered Mobile No.</td><td><div class="form-group has-feedback" style="width:355px">
            <input type="text" class="form-control"  id="mobile" name="mobile" placeholder="Club Registered Mobile No."/>
            <!--<span class="glyphicon glyphicon-envelope form-control-feedback"></span>-->
          </div></td>
		  
		</tr>
		 
		  <tr>
		  
		  <td></td>
		  <td>
          <div class="form-group has-feedback" style="float:left">
          
            <!--<span class="glyphicon glyphicon-envelope form-control-feedback"></span>-->
          </div>
		 
          <div class="row">
            <div class="col-xs-8">    
                                      
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat" style="border-radius: 5px" onClick="return validat();">Get OTP</button>
            </div><!-- /.col -->
          </div>
        </form>
		</div>
		</td>
		</tr>
		 </table>
		</td></tr>
		</table>
		
		
		
		

        <!--<div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->

      
       <!-- <a href="register.html" class="text-center">Register a new membership</a>-->
	   
	   <div style="float:left; width:330px; color:#0000FF;">For any technical problem/feedback please send mail at wbmld@nic.in</div>
	   
<div style=" margin-left:-270px"> <img src="logo.png"  style="margin-top:0px; margin-right:286px"></div>
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