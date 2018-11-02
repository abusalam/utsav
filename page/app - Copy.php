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
           Appliaction Submission
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
				
                  
					
				


	

	<link rel="stylesheet" type="text/css" href="css_tab/component.css" />
 
 	<div id="tabs" class="tabs">
				<nav>
					<ul>
						<li><a href="#section-1" ><span>Organisers</span></a></li>
						<li><a href="#section-2" ><span>Site/Land</span></a></li>
						<li><a href="#section-3" ><span>Power Supply</span></a></li>
						<li><a href="#section-4" ><span>Fire</span></a></li>
						<li><a href="#section-5" ><span>Pollution</span></a></li>
						<li><a href="#section-6" ><span>Municipality</span></a></li>
						<li><a href="#section-7" ><span>Police</span></a></li>
	<li><a href="#section-8" ><span>Upload</span></a></li>					
			
			
			<li><a href="#section-9" ><span>Preview</span></a></li>
					</ul>
				</nav>
				<div class="content">
				 
					<section id="section-1">
					
						<div class="mediabox" style="width:700px">
							
							
							<table style="padding-bottom:60px">
							
							 <tr height="40"><td width="200">Organisation / Club Name</td><td style="padding-right:20px"><input  type="text"  id="org" class="form-control" width="width:20px" 
						
						 name="org"   size="200"  /> </td><td></td>
						 <td>Secretary of The Orgnisation/Club</td><td><input  type="text"  id="secname" class="form-control" width="width:20px" 
						
						 name="secname"    /> </td>
						 
						 </tr>
						 
						 
						 <tr height="40"><td>Mobile No.</td><td><input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td><td></td>
						 
						 
						 <td>Secretary Mobile No. </td><td><input  type="text"  id="secmob" class="form-control" width="width:20px" 
						
						 name="secmob"    /> </td>
						 </tr>
						
						
						 <tr height="40"><td>Email Id</td><td><input  type="text"  id="orgmail" class="form-control" width="width:20px" 
						
						 name="orgmail"    /> </td><td></td>
						 
						 <td>Secretary Email</td><td><input  type="text"  id="secmail" class="form-control" width="width:20px" 
						
						 name="secmail"    /> </td>
						 
						 </tr>
							
							<tr height="40"><td>Address</td><td><input  type="text"  id="orgadd" class="form-control" width="width:20px" 
						
						 name="orgadd"    /> </td>
						 
						 
						 <td></td>
						 
						 <td>Secretary Address</td><td><input  type="text"  id="secadd" class="form-control" width="width:20px" 
						
						 name="secadd"    /> </td>
						 </tr>
						 
						 
						
						 </table>
							
							




<table>
							
							 <tr height="40"><td>Full Address of the Pandal</td><td style="padding-right:20px"><input  type="text"  id="aps" class="form-control" width="width:20px" 
						
						 name="achievement"    /> </td><td></td>
						 <td>Holding No.</td><td><input  type="text"  id="aps" class="form-control" width="width:20px" 
						
						 name="achievement"    /> </td>
						 
						 </tr>
						 
						 
						 <tr height="40"><td>Ward No.</td><td><input  type="text"  id="aps" class="form-control" width="width:20px" 
						
						 name="achievement"    /> </td><td></td>
						 
						 
						 <td> </td><td> </td>
						 </tr>
						
						
						 <tr height="40"><td>Duration of the Festival From </td><td><input  type="text"  id="aps" class="form-control" width="width:20px" 
						
						 name="achievement"    /> </td><td></td>
						 
						 <td>To</td><td><input  type="text"  id="aps" class="form-control" width="width:20px" 
						
						 name="achievement"    /> </td>
						 
						 </tr>
							
							
						 </table>
							
							


						 
                      
						
							
						</div>
						
						
					</section>
					
					<section id="section-2">
						<div class="mediabox" style="width:700px">
							
							<div class="mediabox" style="width:700px">
							
							
							<table style="padding-bottom:60px">
							
							 <tr height="40"><td width="200">Select Land of </td><td style="padding-right:20px"><select >
							 <option></option>
							 <option>Private</option>
							 <option>Municipality</option>
							 <option>PWD</option>
							  <option>Land Dept.</option>
							   <option>Others</option>
							 </select> </td><td></td>
						 <td>Area of the Pandal in sq. feet </td><td><input  type="text"  id="secname" class="form-control" width="width:20px" 
						
						 name="secname"  size="200"    /> </td>
						 
						 </tr>
						 
						 
						 <tr height="40"><td>Name of the Land Owner</td><td><input  type="text"  id="secmob" class="form-control" width="width:20px" 
						
						 name="secmob"    /> </td><td></td>
						 
						 
						 <td>NOC for using land   obtained or not  </td><td>
						 
						 <select >
							 <option></option>
							 <option>Yes</option>
							 <option>No</option>
							 
							 </select>
						 
						 
						  </td>
						 </tr>
						
						
						
						 
						
						 </table>
							
							




<table>
							
							 <tr height="40"><td>Full Address of the Pandal</td><td style="padding-right:20px"><input  type="text"  id="aps" class="form-control" width="width:20px" 
						
						 name="achievement"    /> </td><td></td>
						 <td>Holding No.</td><td><input  type="text"  id="aps" class="form-control" width="width:20px" 
						
						 name="achievement"    /> </td>
						 
						 </tr>
						 
						 
						 <tr height="40"><td>Ward No.</td><td><input  type="text"  id="aps" class="form-control" width="width:20px" 
						
						 name="achievement"    /> </td><td></td>
						 
						 
						 <td> </td><td> </td>
						 </tr>
						
						
						 <tr height="40"><td>Duration of the Festival From </td><td><input  type="text"  id="aps" class="form-control" width="width:20px" 
						
						 name="achievement"    /> </td><td></td>
						 
						 <td>To</td><td><input  type="text"  id="aps" class="form-control" width="width:20px" 
						
						 name="achievement"    /> </td>
						 
						 </tr>
							
							
						 </table>
							
							


						 
                      
						
							
						</div>
						
					</section>
					<section id="section-3">
						<div class="mediabox" style="width:700px">
							
							<table style="padding-bottom:60px">
							
							 <tr height="40"><td width="400">Name of The Customer Care Centre<input  type="text"  id="org" class="form-control" width="width:20px" 
						
						 name="org"   size="200"  /> </td>
						 
						 </tr>
						 
						 
						 <tr height="40"><td>Name of the authorised representative of the organisation who will be connected  by licenseee  in connection with electricity supply:<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						
						
						 <tr height="40"><td>Address of the person as mentioned above :<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						
						 <tr height="40"><td>Location where the temporary supply is required (specify important landmark and nearest electric pole number):<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						 
						 
						 <tr height="40"><td>Name and address of the land owner where the temporary connection is required, if any:<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						<tr height="40"><td>Whether NOC has been obtained from the land owner yes/no:<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr> 
						 
						<tr height="40"><td>Consumer number of the land owner:<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr> 
						 
						 <tr height="40"><td>Supply required for____days from<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr> 
						 
						 <tr height="40"><td>Connected load:<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr> 
						 
						 <tr height="40"><td>Name of licensed electrical contractor who is responsible for supervising full electrical installation where temporary supply required:<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr> 
						 <tr height="40"><td>Address of the person mentioned above:<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr> 
						 </table>
							
						
						</div>
					</section>
					
					
					<section id="section-4">
						<div class="mediabox" style="width:700px">
							
							<table style="padding-bottom:60px">
							
							 <tr height="40"><td width="400">Area of the pandal:<input  type="text"  id="org" class="form-control" width="width:20px" 
						
						 name="org"   size="200"  /> </td>
						 
						 </tr>
						 
						 
						 <tr height="40"><td>Height of the pandal: <input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						
						
						 <tr height="40"><td>Number of persons expected to be present at a time in the pandal:<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						
						 <tr height="40"><td>Material used for construction in the pandal (in brief):<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						 
						 
						 <tr height="40"><td>Undertaking
We hereby declared that we shall abide by the following rules and regulations for social security and safety in all respect and on behalf of the puja committee.
1.  Government license holder electric contractor and decorator with valid license number will be appointed for the electrification and erection of puja pandal
Separate entrance and exit for cover puja pandal shall be provided.
Enough place for movement of fire and Emergency service medical  shall be maintained.
Width and the height of the gate 12ft. And 14ft. Respectively. And  height of the superstructure shall niot be more than 40ft.
No open frame can be used within 200 yrds from the puja pandal and no cooking arrangement could be allowed within such radius.
Use of height inflammable materials for inaction of pandal is discarded.
Cloths used for the pandal to be dipped in fire retardant solution.
Provision of sufficient water of the fighting which shall not be less than 0.75ltrs. Per sq. mtrs. Of floor area which pandal /structure and ISI marked appropriate fire extinguisher  @minimum  02 (two) per thousand sq. feet floor area, two number of ceiling hook, lodder and stand bucked to be keep ready in the pandal for the fighting small fire.
There must be a 04 (four) feet clear open space from the poperty line of the building, boundary wall or any other permanent structure as per judgment of the Hon’ble High Court, Calcutta Vid W.T.No.856 of 2009 dated 15.09.2009.<input  type="checkbox"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						
						 </table>
							
						
						</div>
					</section>
					<section id="section-5">
						<div class="mediabox" style="width:700px">
							
							<table style="padding-bottom:60px">
							
							
						 
						 <tr height="40"><td>Undertaking
That, I behalf of my organisation, undertake that my organisation will comply with the following norms strictly as fixed upon by the West Bengal Pollution Control Board, for organising  a community Durga puja/kali puja in accordance with the Environment (Protection), Act, 1989 read with the noise pollution (Regulation & control) Rules, 2000 Norms as are follows:
That my organisation will use and operate microphones obtaining permission from the concerned police authorities of district authorities and will abide by all the terms and conditions fixed upon by the police authorities and district authorities at the time of granting such permission.
Microphones will be used or operated fixing ‘sound limiter’ with the amplifire system in accordance with the order passed by the Hon’ble High Court, Calcutta, in/c/with matter no. 4303(W) of 1995 (Om Birangana religious society, petitioners-vs-state of West Bengal and others, respondents), for maintaining ambient noise slandered as  specified for different areas as per the aforementioned Act and rules mentioned above.
No microphone shall be used or operated within ‘silent zone’ areas i.e. within 100 meters. of any educational institutions, hospitals, nursing home or court areas in accordence with the Act and rule as mentioned above. (During holidays and after office hours, the area of the educational institutions and courts are the treated as ‘Silent Zone’).
That, no banned category of the noise making fireworks which generates noise more than 90 dB(A), impulse from a distance of 5 meters from the brusting point shall be used by the members of the community puja organiser either within the puja festive period or during the immersion ceremonial procession of idols.
That, no Disk  Jockey  Set(D.J) will be used during the procession of the immersion of the idols.
That, the following norms will be compiled strictly during the immersion procession:
                       1.   The offerings like flowers and leafs etc. will be deposited in Bins ,places  or pits  as arranged by the concerned local authorities on the banks of rivers, ponds, water bodies.
                       2.   Immersions of idols will take place in accordance with the schedule dates fixed up by the Police Authorities or by the District Authorities as the case may be.
2.     That in case of violation of all the above mentioned norms,  The West Bengal Pollution Control Board and the other authorities concerned under statut e shall be  at liberty to take necesser pandal action in accordance with law, against the community puja committee by imposing responsibility upon the president/secretary of the puja  committee. <input  type="checkbox"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						
						 </table>
							
						
						</div>
					</section>
					
					
					
					<section id="section-6">
						<div class="mediabox" style="width:700px">
							
							<table style="padding-bottom:60px">
							
							 <tr height="40"><td width="400">Form Sl. No. of Municipality<input  type="text"  id="org" class="form-control" width="width:20px" 
						
						 name="org"   size="200"  /> </td>
						 
						 </tr>
						 
						 
						 <tr height="40"><td>Since how many years Puja continue: <input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						
						
						 <tr height="40"><td>Last year expenditure:<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						
						 <tr height="40"><td>Budget for this year:<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						 
						 
						 <tr height="40"><td>Place of Immersion of Idol<input  type="checkbox"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						
						 <tr height="40"><td>Date of Immersion<input  type="checkbox"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						 
						 
						  <tr height="40"><td>Mention Security Arrangments for puja Pandal <input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						  <tr height="40"><td>Mention arrangments  for Spectators <input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						  <tr height="40"><td>Provide details, if Pandal encroaching  the Municipality road <input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						 </table>
							
						
						</div>
					</section>
					
					
					
					
					
					<section id="section-7">
						<div class="mediabox" style="width:700px">
							
							<table style="padding-bottom:60px">
							
							 <tr height="40"><td width="400">No. of celebrities during the inauguration with date and time
<input  type="text"  id="org" class="form-control" width="width:20px" 
						
						 name="org"   size="200"  /> </td>
						 
						 </tr>
						 
						 
						 
						 <tr height="40"><td>Details of the cultural function in the puja pandal, if any date and duration:<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						 
						 
						 <tr height="40"><td>Name of the celebrity artist attending the cultural function (date wise)<input  type="checkbox"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						
						
						
						<tr height="40"><td>Permision from phonographic performace limited(PPL) obtained Yes/No. 

<input  type="checkbox"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						 <tr height="40"><td>Dimension of the pandal (height length breath)
<input  type="checkbox"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						 
						 
						  <tr height="40"><td>No. of volunteers to be deployed  <input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						  <tr height="40"><td>No of entry points and width of each <input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						  <tr height="40"><td>No of exit point and width of each<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						 
						  <tr height="40"><td> Whether adequate barricading will be made for crowd control (Y/N)<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						
 <tr height="40"><td> Whether High Court guideline will be adhere to incase the encroachment of roads/through  fares in any way (Y/N)
<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						<tr height="40"><td> Date of immersion

<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						 <tr height="40"><td> Place of immersion


<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						 <tr height="40"><td> Rout of the procession, if any (in case of holding immersion procession)



<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						 <tr height="40"><td> Time of immersion procession from       to




<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						  <tr height="40"><td>Expected crowd strength in the immersion procession





<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						  <tr height="40"><td>No of musicians/bands, if any in the immersion procession




<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						  <tr height="40"><td>No and type of vehicles used in procession 



<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						 <tr height="40"><td>Height of the idol on vehicle from ground (in feet)
<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						 
						  <tr height="40"><td>Do you want to register your club for financial aid for low budget puja (Y/N)

<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						 
						 
						 <tr height="40"><td>Undertaking
I, hereby declared that all statements made on the application are true, complete and correct to the best of my knowledge and belief. I understand that in the event of any information being found untrue or incorrect at any stage, this application is liable to rejected. 

<input  type="checkbox"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						 </table>
							
							
						
						</div>
					</section>
					
					<section id="section-8">
						<div class="mediabox" style="width:700px">
							
							<table style="padding-bottom:60px">
							
							 <tr height="40"><td width="400">Resolution of meeting for conducting puja 
<input  type="file"  id="org" class="form-control" width="width:20px" 
						
						 name="org"   size="200"  /> </td>
						 
						 </tr>
						 
						 
						 
						 <tr height="40"><td>Member Details with phone No.<input  type="file"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						 
						 
						 <tr height="40"><td>NOC for Land of Pandal<input  type="file"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						
						
						
						<tr height="40"><td>Last Years puja permision copy

<input  type="checkbox"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						 <tr height="40"><td>Payment/Fees copy of WBSEDCL
<input  type="checkbox"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						 
						 
						  <tr height="40"><td>Payment/Fees copy of fire service <input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						  <tr height="40"><td>Filled up Municipality Form <input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						  <tr height="40"><td>Payment/Fees copy of Municipality<input  type="text"  id="orgmob" class="form-control" width="width:20px" 
						
						 name="orgmob"    /> </td>
						 </tr>
						 
						 
						 </table>
							
							
						
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