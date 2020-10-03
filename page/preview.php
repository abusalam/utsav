<?php

include_once("config/config.php");
include_once("config/database.php");



$ob= new database();


//include"lib/header.php";
//include"lib/menu.php";
?> 



<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

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
					$sendid=base64_decode($_REQUEST[sendvalue]);
$ex=explode('.',$sendid);

					$dataset=$ob->get_rec("application","*","id=$ex[1]","");
//$checkUser=cek($user,$pass);	

/*if($checkrec){ 
$checkrecords=$ob->get_rec("application","*","user_id='".$_SESSION['id']."' AND ps='".$_SESSION['ps']."'");


}*/



?>
						<div class="mediabox" style="width:960px" align="center">
<h1>Preview of the Application for permission to hold <?php echo PUJA_NAME;?></h1>
							
							<table border="1" style="width:100%" align="center">
							<tr>
							<td style="background-color:rgba(255, 235, 215, 0.56);">
							<table  >
							
							
							<tr >
							 <td  >Organisation/Club:</td><td><?php echo $dataset->org_name; ?></td></tr>
							 <tr>
							 <td> Organisation Mobile</td><td><?php echo  $dataset->org_mobile; ?></td></tr>
							 <tr><td>Organisation Email</td><td><?php echo  $dataset->org_email; ?></td></tr>
							 <tr><td>Organisation Address</td><td><?php echo  $dataset->org_address; ?></td></tr>
							 </table>
							 </td>
							 
							 <td style="background-color:rgba(255, 235, 215, 0.56);">
							 <table>
							 <tr>
							 <td >Secretary Name:</td><td><?php echo $dataset->sec_name; ?></td></tr>
							 <tr>
							 <td> Mobile</td><td><?php echo $dataset->sec_mobile; ?></td></tr>
							 <tr><td>Email</td><td><?php echo $dataset->sec_email; ?></td></tr>
							 <tr><td>Address</td><td><?php echo $dataset->sec_address; ?></td></tr>
							 </table>
							 </td>
							 
							 
							 
							 </tr>
							 	
								
								<tr>
								<td style="background-color:#EEEEDD">
								<table >
							 <tr >
							 <td>Pandal Full Address</td><td></td></tr>
							  <tr>
							 <td colspan="2"></td><td colspan="2"><?php echo $dataset->puja_loc; ?></td></tr>
							 
							 </table>
								
								</td>
								<td style="background-color:#EEEEDD">
								<table>
							 <tr>
							<tr >
							 <td > Ward No.</td><td><?php echo $dataset->puja_ward_no; ?></td></tr>
							 <tr><td>Holding No.</td><td><?php echo $dataset->puja_holding_no; ?></td></tr>
							 <tr><td>Puja From -To</td><td><?php echo $dataset->puja_from ; ?> - <?php echo $dataset->puja_to ; ?></td></tr>
							 </table>
								
								</td>
								</tr>
						 </table>
							
							
							
							
							
							<table border="1" style="width:100%; padding-top:20px">
							<tr>
							<td style="background-color:rgba(255, 235, 215, 0.56);">
							<table >
							
							
							<tr>
							 <td>Land of :</td><td><?php echo $dataset->land_of; ?></td></tr>
							 <tr>
							 <td> Land Owner Name :</td><td><?php echo  $dataset->land_owner; ?></td></tr>
							 
							 </table>
							 </td>
							 
							 <td style="background-color:rgba(255, 235, 215, 0.56);">
							 <table>
							 <tr>
							 <td>Area of the Pandal in sq. feet:</td><td><?php echo $dataset->pandal_area; ?></td></tr>
							 <tr>
							 <td> NOC for using land</td><td><?php echo $dataset->land_noc; ?></td></tr>
							
							 </table>
							 </td>
							 
							 
							 
							 </tr>
							 	
								
								
								
								
								</tr>
						 </table>




<table border="1" style="width:100%; padding-top:20px">
							<tr style="background-color:#EEEEDD;">
							
							
							
							
							
							 <td  style="width:200px" > Name of The Customer Care Centre :</td><td><?php echo $dataset->name_ccc; ?></td></tr>
							 <tr style="background-color:rgba(255, 235, 215, 0.56);">
							 <td > Name of the authorised representative of the organisation who will be connected by licenseee in connection with electricity supply:</td><td><?php echo  $dataset->elec_auth_pers; ?></td></tr>
							 
							
							<tr style="background-color:#EEEEDD;">
							 <td  style="width:200px">  Address of the person as mentioned above ::</td><td><?php echo $dataset->add_elec_auth_pers; ?></td></tr>
							 
							<tr style="background-color:rgba(255, 235, 215, 0.56);">
							 <td  style="width:200px" >   Location where the temporary supply is required (specify important landmark and nearest electric pole number): </td><td><?php echo $dataset->loc_temp_suply; ?></td></tr>
		
		<tr style="background-color:#EEEEDD;">
							 <td  style="width:200px">   Name and address of the land owner where the temporary connection is required, if any: </td><td><?php echo $dataset->land_owner_elec; ?></td></tr>	
							 <tr style="background-color:rgba(255, 235, 215, 0.56);">
							 <td  style="width:200px">   Whether NOC has been obtained from the land owner: </td><td><?php echo $dataset->land_elec_noc; ?></td></tr>	
							 <tr>
							 <td  style="width:200px">  Consumer number of the land owner: </td><td><?php echo $dataset->consumer_no; ?></td></tr>	
							  <tr style="background-color:rgba(255, 235, 215, 0.56);">
							 <td  style="width:200px">  Supply required days:</td><td><?php echo $dataset->suplier_req_day; ?></td></tr>	
							 <tr >
							 <td  style="width:200px">   Supply required from:</td><td><?php echo $dataset->suplier_req_from; ?></td></tr>
							  <tr style="background-color:rgba(255, 235, 215, 0.56);">
							 <td  style="width:200px">   Connected load:</td><td><?php echo $dataset->connect_load; ?></td></tr>	
							  <tr>
							 <td  style="width:200px">  Name of licensed electrical contractor who is responsible for supervising full electrical installation where temporary supply required:</td><td><?php echo $dataset->elec_contactor_name; ?></td></tr>	
							  <tr style="background-color:rgba(255, 235, 215, 0.56);">
							 <td  style="width:200px">  Address of the person mentioned above:</td><td><?php echo $dataset->elec_contactor_addr; ?></td></tr>					
							
						 </table>

						 
                      
						
						<table border="1" style="width:100%; padding-top:20px">
							<tr>
							
							
							
							
							
							 <td  style="width:200px">  Area of the pandal:</td><td><?php echo $dataset->fir_pandal_area; ?></td></tr>
							 <tr>
							 <td>Height of the Pandal:</td><td><?php echo  $dataset->fir_pandal_height; ?></td></tr>
							 
							
							<tr>
							 <td  style="width:200px">   Number of persons expected to be present at a time in the pandal:</td><td><?php echo $dataset->fir_persn_present; ?></td></tr>
							 
							<tr>
							 <td  style="width:200px">   Material used for construction in the pandal (in brief): </td><td><?php echo $dataset->fir_material_cons_pandal; ?></td></tr>
		
		<tr>
							 <td  style="width:700px">  Undertaking

We hereby declared that we shall abide by the following rules and regulations for social security and safety in all respect and on behalf of the puja committee.

1. Government license holder electric contractor and decorator with valid license number will be appointed for the electrification and erection of puja pandal

2. Separate entrance and exit for cover puja pandal shall be provided.

3. Enough place for movement of fire and Emergency service medical shall be maintained.

4. Width and the height of the gate 12ft. and 14ft. respectively, and height of the superstructure shall not be more than 40ft.

5. No open flame can be used within 200 yrds from the Puja Pandal and no cooking arrangement could be allowed within such radius.

6. Use of heigh inflammable materials for erection of the Pandal is discarded.

7. Cloths used for the Pandal to be dipped in fire retardant solution.

8. Provision of sufficient water of the fighting which shall not be less than 0.75Ltrs. Per Sq. Mtrs. Of floor area which pandal /structure and ISI marked appropriate fire extinguisher @minimum 02 (two) per thousand sq. feet floor area, two nos. ceiling hook, lodder and sand bucket to be kept ready in the Pandal for fighting the small fire.

9. There must be a 04 (four) feet clear open space from the poperty line of the building, boundary wall or any other permanent structure as per judgment of the Hon'ble High Court, Calcutta Vid W.T.No.856 of 2009 dated 15.09.2009.</td><td><?php if($dataset->fir_agree=='on') { echo "I agree"; } ?></td></tr>	
							 				
							
						 </table>
						
						<table border="1" style="width:100%; padding-top:20px">
							<tr>
							
							
							
							
							
							 <td  style="width:850px">  
Undertaking

1. That, I on behalf of my organisation, undertake that my organisation will comply with the following norms strictly as fixed upon by the West Bengal Pollution Control Board, for organising a community Durga puja/kali puja in accordance with the Environment (Protection), Act, 1985 read with the Noise Pollution (Regulation & control) Rules, 2000 Norms as are follows:

a. That my organisation will use and operate microphones obtaining permission from the concerned police authorities of district authorities and will abide by all the terms and conditions fixed upon by the police authorities and district authorities at the time of granting such permission.

b. Microphones will be used or operated fixing `sound limiter` with the amplifire system in accordance with the order passed by the Hon'ble High Court, Calcutta, in/c/with matter no. 4303(W) of 1995 (Om Birangana religious society, petitioners-vs-state of West Bengal and others, respondents), for maintaining ambient noise slandered as specified for different areas as per the aforementioned Act and rules mentioned above.

c. No microphone shall be used or operated within `silent zone` areas i.e. within 100 meters of any educational institutions, hospitals, nursing home or court areas in accordence with the Act and rule as mentioned above. (During holidays and after office hours, the area of the educational institutions and courts are not treated as `Silent Zone`).

d. That, no banned category of the noise making fireworks which generates noise more than 90 dB(A), impulse from a distance of 5 meters from the brusting point shall be used by the members of the community puja organiser either within the puja festive period or during the immersion ceremonial procession of idols.

e. That, no Disk Jockey Set(D.J) will be used during the procession of the immersion of the idols.

f. That, the following norms will be complieed with strictly during the immersion procession:

I. The offerings, like flowers and leafs etc. will be deposited in the Bins ,places or pits as arranged by the concerned local authorities on the banks of rivers, ponds, water bodies.

II. Immersions of idols will take place in accordance with the schedule dates fixed up by the Police Authorities or by the District Authorities as the case may be.

2. That in case of violation of all the above mentioned norms, The West Bengal Pollution Control Board and the other authorities concerned under statut shall be at liberty to take necesser penal action in accordance with law, against the community puja committee by imposing responsibility upon the president/secretary of the puja committee.

3. That, emphasis will bw given to the led and toxic metal free paints to prtepare the idols and to prevent water polution after immersion.</td><td>

<?php if($dataset->polution_agree=='on') { echo "I agree"; } ?></td></tr>
							 </table>
						</table>
						<table><tr height="70"></tr></table>
						<table border="1" style="width:100%; padding-top:20px">
							<tr>
							 <td  style="width:400px"> 
Form Sl. No. of Municipality:</td><td><?php echo $dataset->muni_form_no; ?></td></tr>
<tr>
							 <td  style="width:400px"> 
Since how many years Puja continue:</td><td><?php echo $dataset->puja_year_since; ?></td></tr>
<tr>
							 <td  style="width:400px"> 
Last year expenditure:</td><td><?php echo $dataset->exp_last_year; ?></td></tr>

<tr>
							 <td  style="width:400px"> 
Budget for this year:</td><td><?php echo $dataset->present_budget; ?></td></tr>

<tr>
							 <td  style="width:400px"> 
Place of Immersion of Idol:</td><td><?php echo $dataset->imm_place; ?></td></tr>

<tr>
							 <td  style="width:400px"> 
Date of Immersion:</td><td><?php echo $dataset->imm_date; ?></td></tr>

<tr>
							 <td  style="width:400px"> 
Mention Security Arrangments for puja Pandal:</td><td><?php echo $dataset->secu_arrg; ?></td></tr>
<tr>
							 <td  style="width:400px"> 
Mention arrangments for Spectators:</td><td><?php echo $dataset->spec_arrg; ?></td></tr>

<tr>
							 <td  style="width:400px"> 
Provide details, if Pandal encroaching the Municipality road:</td><td><?php echo $dataset->det_encro_muni; ?></td></tr>
							 </table>

						
						
						
						
						<table border="1" style="width:100%; padding-top:20px">
							<tr>
							 <td  style="width:400px"> 
No. of celebrities during the inauguration with date and time:</td><td><?php echo $dataset->ing_cele_details; ?></td></tr>
<tr>
							 <td  style="width:400px"> 
Details of the cultural function in the puja pandal, if any date and duration:</td><td><?php echo $dataset->cul_details; ?></td></tr>
<tr>
							 <td  style="width:400px"> 
Name of the celebrity artist attending the cultural function (date wise):</td><td><?php echo $dataset->artist_details; ?></td></tr>

<tr>
							 <td  style="width:400px"> 
Permision from phonographic performace limited(PPL) obtained Yes/No:</td><td><?php echo $dataset->ppl_per; ?></td></tr>

<tr>
							 <td  style="width:400px"> 
Dimension of the pandal (height length breath):</td><td><?php echo $dataset->pandal_dim; ?></td></tr>

<tr>
							 <td  style="width:400px"> 
No. of volunteers to be deployed:</td><td><?php echo $dataset->volun_no; ?></td></tr>

<tr>
							 <td  style="width:400px"> 
No of entry points and width of each:</td><td><?php echo $dataset->entry_point_det; ?></td></tr>
<tr>
							 <td  style="width:400px"> 
No of exit point and width of each:</td><td><?php echo $dataset->exit_point_det; ?></td></tr>

<tr>
							 <td  style="width:400px"> 


Whether adequate barricading will be made for crowd control (Y/N):</td><td><?php echo $dataset->crowd_cont; ?></td></tr>


<tr>
							 <td  style="width:400px"> 


Whether High Court guideline will be adhere to incase the encroachment of roads/through fares in any way:</td><td><?php echo $dataset->high_court; ?></td></tr>
<tr>
							 <td  style="width:400px"> 


Date of immersion:</td><td><?php echo $dataset->imm_date; ?></td></tr>
<tr>
							 <td  style="width:400px"> 


Place of immersion:</td><td><?php echo $dataset->imm_place; ?></td></tr>

<tr>
							 <td  style="width:400px"> Rout of the procession, if any (in case of holding immersion procession):</td><td><?php echo $dataset->proc_route; ?></td></tr>
							 <tr>
							 <td  style="width:400px"> Time of immersion procession from to:</td><td><?php echo $dataset->proc_time; ?></td></tr>
							 <tr>
							 <td  style="width:400px"> Expected crowd strength in the immersion procession:</td><td><?php echo $dataset->proc_crowd; ?></td></tr>
							 <tr>
							 <td  style="width:400px"> No of musicians/bands, if any in the immersion procession:</td><td><?php echo $dataset->proc_musician; ?></td></tr>
							  <tr>
							 <td  style="width:400px"> No and type of vehicles used in procession:</td><td><?php echo $dataset->porc_vehicle; ?></td></tr>
							 <tr>
							 <td  style="width:400px"> Height of the idol on vehicle from ground (in feet):</td><td><?php echo $dataset->idol_height; ?></td></tr>
							 <tr>
							 <td  style="width:400px"> Do you want to register your club for financial aid for low budget puja:</td><td><?php echo $dataset->fin_aid; ?></td></tr>
							 <tr>
							 <td  style="width:400px"> Undertaking

I, hereby declared that all statements made on the application are true, complete and correct to the best of my knowledge and belief. I understand that in the event of any information being found untrue or incorrect at any stage, this application is liable to rejected.</td><td><?php if($dataset->police_agree=='on') { echo "I agree"; } ?></td></tr>

							 </table>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						<table><tr height="460"></tr></table>
						<table border="1" style="width:100%; padding-top:20px">
							<tr>
							 <td  style="width:850px"> 
Site Plan with Pandal layout:</td><td><?php echo $dataset->ck_sit_pln; ?></td></tr>
<tr>
							 <td  style="width:850px"> 
WBSEDCL current permission or genarator owners agreement:</td><td><?php echo $dataset->ck_wbsedcl; ?></td></tr>
<tr>
							 <td  style="width:850px"> 
Fire department current NOC:</td><td><?php echo $dataset->ck_fire_noc; ?></td></tr>

<tr>
							 <td  style="width:850px"> 
Municipal chairman/GP Pradhan NOC:</td><td><?php echo $dataset->ck_muni_noc; ?></td></tr>

<tr>
							 <td  style="width:850px"> 
Land owners permiossion with his full contact details:</td><td><?php echo $dataset->ck_land_own; ?></td></tr>

<tr>
							 <td  style="width:850px"> 
Decorators agreement with full contact details:</td><td><?php echo $dataset->ck_dec; ?></td></tr>

<tr>
							 <td  style="width:850px"> 
Electrician agreement with full contact details:</td><td><?php echo $dataset->ck_electrician; ?></td></tr>
<tr>
							 <td  style="width:850px"> 
Last year actual income-expenditure statement:</td><td><?php echo $dataset->ck_last_inc_exp; ?></td></tr>

<tr>
							 <td  style="width:850px"> 
Budget in details showing source of fund:</td><td><?php echo $dataset->ck_sourc_fund; ?></td></tr>
<tr>
							 <td  style="width:850px"> 
Bill books for subscription(one sample and all book no. & sl no. in signed list in duplicate:</td><td><?php echo $dataset->ck_bill_book; ?></td></tr>
<tr>
							 <td  style="width:850px"> 
Photocopy of last year puja permit:</td><td><?php echo $dataset->ck_photocopy; ?></td></tr>
<tr>
							 <td  style="width:850px"> 
Resolution of orgamnigers for this puja on own letter head during puja dates,schedule,location,orgnisers name, budget description, registration No.:</td><td><?php echo $dataset->ck_org_res; ?></td></tr>
<tr>
							 <td  style="width:850px"> 
Immersion Date, time ,place,route in own letter head , seal & sign:</td><td><?php echo $dataset->ck_imm_date; ?></td></tr>
<tr>
							 <td  style="width:850px"> 
List of names of volunteers with contact no for 24 hours pandal guard:</td><td><?php echo $dataset->ck_voln_list; ?></td></tr>
<tr>
							 <td  style="width:850px"> 
List of Name with contact details who are authorised to collect subscription:</td><td><?php echo $dataset->ck_auth_list; ?></td></tr>
<tr>
							 <td  style="width:850px"> 
Undertaking of organiser of own letterhead with seal & full signature of organisers stating to abide by all directions of govt/ authority and liable for any vilolation:</td><td><?php echo $dataset->ck_vio; ?></td></tr>
<tr>
							 <td  style="width:850px"> 
No objection from the local thana:</td><td><?php echo $dataset->ck_thana_noc; ?></td></tr>
<tr>
							 <td  style="width:850px"> 
Mike supplier aggrement(mike timing as per directive of WBPCB/Other competent authority):</td><td><?php echo $dataset->ck_mike; ?></td></tr>
<tr>
							 <td  style="width:850px"> 
List of name of volunteers with contact no. form keeping emergency light in the puja pandal:</td><td><?php echo $dataset->ck_vol_emg; ?></td></tr>
							 </table>

						<table><tr height="60"></tr></table>
						<table border="1" style="100%;">
						<tr>
							 <td  style="width:850px"> 

Resolution of meeting for conducting puja:</td><td>

 <?php if($dataset->file_res_copy!='')
							 { ?>
							 

<a href="doc/res/<?php echo $dataset->file_res_copy; ?>"  target="_blank">Click to view</a>
<?php } else  { ?>
<a href="indexes.php?action=notdocupload"  target="_blank" style="color:#FF0000">Not uploaded</a>
<?php }  ?>
</td></tr>
<tr>
							 <td  style="width:850px"> 
Member Details with phone No.:</td><td>
 <?php if($dataset->file_mem_det!='')
							 { ?><a href="doc/member/<?php echo $dataset->file_mem_det; ?>"  target="_blank">Click to view</a>
							 <?php } else  { ?>
<a href="indexes.php?action=notdocupload"  target="_blank" style="color:#FF0000">Not uploaded</a>
<?php }  ?></td></tr>
<tr>
							 <td  style="width:850px"> 
NOC for Land of Pandal:</td><td><?php if($dataset->file_noc_land!='')
							 { ?><a href="doc/Land_NOC/<?php echo $dataset->file_noc_land; ?>"  target="_blank">Click to view</a><?php } else  { ?>
<a href="indexes.php?action=notdocupload"  target="_blank" style="color:#FF0000">Not uploaded</a>
<?php }  ?></td></tr>
<tr>
							 <td  style="width:850px"> 
Site Plan wiht Pandal Layout:</td><td><?php if($dataset->file_site_plan!='')
							 { ?><a href="doc/siteplan/<?php echo $dataset->file_site_plan; ?>"  target="_blank">Click to view</a><?php } else  { ?>
<a href="indexes.php?action=notdocupload"  target="_blank" style="color:#FF0000">Not uploaded</a>
<?php }  ?></td></tr>
<tr>
							 <td  style="width:850px"> 
Last Years puja permision copy:</td><td><?php if($dataset->file_last_puja_per!='')
							 { ?><a href="doc/pujaper/<?php echo $dataset->file_last_puja_per; ?>"  target="_blank">Click to view</a><?php } else  { ?>
<a href="indexes.php?action=notdocupload"  target="_blank" style="color:#FF0000">Not uploaded</a>
<?php }  ?></td></tr>
<tr>
							 <td  style="width:850px"> 
Payment/Fees copy of WBSEDCL:</td><td><?php if($dataset->file_pmnt_electric!='')
							 { ?><a href="doc/elec_bill/<?php echo $dataset->file_pmnt_electric; ?>"  target="_blank">Click to view</a><?php } else  { ?>
<a href="indexes.php?action=notdocupload"  target="_blank" style="color:#FF0000">Not uploaded</a>
<?php }  ?></td></tr>
<tr>
							 <td  style="width:850px"> 
Payment/Fees copy of fire service:</td><td><?php if($dataset->file_fire_pay!='')
							 { ?><a href="doc/fire/<?php echo $dataset->file_fire_pay; ?>"  target="_blank">Click to view</a><?php } else  { ?>
<a href="indexes.php?action=notdocupload"  target="_blank" style="color:#FF0000">Not uploaded</a>
<?php }  ?></td></tr>
<tr>
							 <td  style="width:850px"> 
Filled up Municipality Form:</td><td><?php if($dataset->file_muni_form!='')
							 { ?><a href="doc/muni_form/<?php echo $dataset->file_muni_form; ?>"  target="_blank">Click to view</a><?php } else  { ?>
<a href="indexes.php?action=notdocupload"  target="_blank"style="color:#FF0000">Not uploaded</a>
<?php }  ?></td></tr>	
<tr>
							 <td  style="width:850px"> 
Payment/Fees copy of Municipality:</td><td><?php if($dataset->file_muni_pay!='')
							 { ?><a href="doc/muni_pay/<?php echo $dataset->file_muni_pay; ?>"  target="_blank">Click to view</a><?php } else  { ?>
<a href="indexes.php?action=notdocupload"  target="_blank" style="color:#FF0000">Not uploaded</a>
<?php }  ?></td></tr>					


<tr>
							 <td  style="width:850px"> 
Copy of first page of Bank pass book indicating account number & IFSC code:</td><td><?php if($dataset->file_bank_p_book!='')
							 { ?><a href="doc/bank_p_book/<?php echo $dataset->file_bank_p_book; ?>"  target="_blank">Click to view</a><?php } else  { ?>
<a href="indexes.php?action=notdocupload"  target="_blank" style="color:#FF0000">Not uploaded</a>
<?php }  ?></td></tr>			 </table>


<table><tr height="60"></tr></table>
						<table border="1" style="100%;">
						<tr>
							 <td  style="width:850px"> 
							 <?php 
							 
							
							 
							 if($dataset->file_res_copy!='')
							 {
							 
							 $ex=explode('.',$dataset->file_res_copy);
							 if($ex[1]=='pdf'){ ?>
							 
							 <object data="doc/res/<?php echo $dataset->file_res_copy; ?>" type="application/pdf" width="100%" height="700px">
   <p>  Please download the PDF to view it: <a href="/doc/res/<?php echo $dataset->file_res_copy; ?>">Download PDF</a>.</p>
</object>
							
							 
							 <?php }
							 
							 
							
							 
							 if(($ex[1]=='jpg') || ($ex[1]=='jpeg') || ($ex[1]=='png')) { ?>
							 
							 <img src="doc/res/<?php echo $dataset->file_res_copy; ?> " width="900px" />
							
							 <?php }
							 
							 } 
							 
							 ?>
							 

</td></tr>
						 </table>
						 
						 
						 <table><tr height="900"></tr></table>
						 
						 <table border="1" style="100%;">
						<tr>
							 <td  style="width:850px"> 
							 <?php
							 
							 if($dataset->file_mem_det!='')
							 {
							 
							  $ex=explode('.',$dataset->file_mem_det);
							 if($ex[1]=='pdf'){ ?>
							 
							 <object data="doc/member/<?php echo $dataset->file_mem_det; ?>" type="application/pdf" width="100%" height="700px">
   <p>  Please download the PDF to view it: <a href="/doc/res/<?php echo $dataset->file_mem_det; ?>">Download PDF</a>.</p>
</object>
							
							 
							 <?php }
							 
							 
							
							 
							 if(($ex[1]=='jpg') || ($ex[1]=='jpeg') || ($ex[1]=='png')) { ?>
							 
							 <img src="doc/member/<?php echo $dataset->file_mem_det; ?> " width="900px" />
							
							 <?php }
							 }
							 
							 
							 ?>
							 

</td></tr>
						 </table>


<table><tr height="900"></tr></table>
						 
						 <table border="1" style="100%;">
						<tr>
							 <td  style="width:850px"> 
							 <?php 
							 if($dataset->file_noc_land!='')
							 {
							 $ex=explode('.',$dataset->file_noc_land);
							 if($ex[1]=='pdf'){ ?>
							 
							 <object data="doc/Land_NOC/<?php echo $dataset->file_noc_land; ?>" type="application/pdf" width="100%" height="700px">
   <p>  Please download the PDF to view it: <a href="/doc/Land_NOC/<?php echo $dataset->file_noc_land; ?>">Download PDF</a>.</p>
</object>
							
							 
							 <?php }
							 
							 
							
							 
							 if(($ex[1]=='jpg') || ($ex[1]=='jpeg') || ($ex[1]=='png')) { ?>
							 
							 <img src="doc/Land_NOC/<?php echo $dataset->file_noc_land; ?> " width="900px" />
							
							 <?php }
							  }
							 
							 ?>
							 

</td></tr>
						 </table>


<table><tr height="900"></tr></table>
						 
						 <table border="1" style="100%;">
						<tr>
							 <td  style="width:850px"> 
							 <?php 
							  if($dataset->file_site_plan!='')
							 {
							 
							 $ex=explode('.',$dataset->file_site_plan);
							 if($ex[1]=='pdf'){ ?>
							 
							 <object data="doc/siteplan/<?php echo $dataset->file_site_plan; ?>" type="application/pdf" width="100%" height="700px">
   <p>  Please download the PDF to view it: <a href="/doc/siteplan/<?php echo $dataset->file_site_plan; ?>">Download PDF</a>.</p>
</object>
							
							 
							 <?php }
							 
							 
							
							 
							 if(($ex[1]=='jpg') || ($ex[1]=='jpeg') || ($ex[1]=='png')) { ?>
							 
							 <img src="doc/siteplan/<?php echo $dataset->file_site_plan; ?> " width="900px" />
							
							 <?php }
							 
							  }
							 
							 ?>
							 

</td></tr>
						 </table>
<table><tr height="900"></tr></table>
						 
						 <table border="1" style="100%;">
						<tr>
							 <td  style="width:850px"> 
							 <?php $ex=explode('.',$dataset->file_last_puja_per);
							 if($ex[1]=='pdf'){ ?>
							 
							 <object data="doc/pujaper/<?php echo $dataset->file_last_puja_per; ?>" type="application/pdf" width="100%" height="700px">
   <p>  Please download the PDF to view it: <a href="/doc/pujaper/<?php echo $dataset->file_last_puja_per; ?>">Download PDF</a>.</p>
</object>
							
							 
							 <?php }
							 
							 
							
							 
							 if(($ex[1]=='jpg') || ($ex[1]=='jpeg') || ($ex[1]=='png')) { ?>
							 
							 <img src="doc/pujaper/<?php echo $dataset->file_last_puja_per; ?> " width="900px" />
							
							 <?php }
							 
							 
							 ?>
							 

</td></tr>
						 </table>


<table><tr height="900"></tr></table>
						 
						 <table border="1" style="100%;">
						<tr>
							 <td  style="width:850px"> 
							 <?php $ex=explode('.',$dataset->file_pmnt_electric);
							 if($ex[1]=='pdf'){ ?>
							 
							 <object data="doc/elec_bill/<?php echo $dataset->file_pmnt_electric; ?>" type="application/pdf" width="100%" height="700px">
   <p>  Please download the PDF to view it: <a href="/doc/elec_bill/<?php echo $dataset->file_pmnt_electric; ?>">Download PDF</a>.</p>
</object>
							
							 
							 <?php }
							 
							 
							
							 
							 if(($ex[1]=='jpg') || ($ex[1]=='jpeg') || ($ex[1]=='png')) { ?>
							 
							 <img src="doc/elec_bill/<?php echo $dataset->file_pmnt_electric; ?> " width="900px" />
							
							 <?php }
							 
							 
							 ?>
							 

</td></tr>
						 </table>

<table><tr height="900"></tr></table>
						 
						 <table border="1" style="100%;">
						<tr>
							 <td  style="width:850px"> 
							 <?php $ex=explode('.',$dataset->file_fire_pay);
							 if($ex[1]=='pdf'){ ?>
							 
							 <object data="doc/fire/<?php echo $dataset->file_fire_pay; ?>" type="application/pdf" width="100%" height="700px">
   <p>  Please download the PDF to view it: <a href="/doc/fire/<?php echo $dataset->file_fire_pay; ?>">Download PDF</a>.</p>
</object>
							
							 
							 <?php }
							 
							 
							
							 
							 if(($ex[1]=='jpg') || ($ex[1]=='jpeg') || ($ex[1]=='png')) { ?>
							 
							 <img src="doc/fire/<?php echo $dataset->file_fire_pay; ?> " width="900px" />
							
							 <?php }
							 
							 
							 ?>
							 

</td></tr>
						 </table>


<table><tr height="900"></tr></table>
						 
						 <table border="1" style="100%;">
						<tr>
							 <td  style="width:850px"> 
							 <?php $ex=explode('.',$dataset->file_muni_form);
							 if($ex[1]=='pdf'){ ?>
							 
							 <object data="doc/muni_form/<?php echo $dataset->file_muni_form; ?>" type="application/pdf" width="100%" height="700px">
   <p>  Please download the PDF to view it: <a href="/doc/muni_form/<?php echo $dataset->file_muni_form; ?>">Download PDF</a>.</p>
</object>
							
							 
							 <?php }
							 
							 
							
							 
							 if(($ex[1]=='jpg') || ($ex[1]=='jpeg') || ($ex[1]=='png')) { ?>
							 
							 <img src="doc/muni_form/<?php echo $dataset->file_muni_form; ?> " width="900px" />
							
							 <?php }
							 
							 
							 ?>
							 

</td></tr>
						 </table>

<table><tr height="900"></tr></table>
						 
						 <table border="1" style="100%;">
						<tr>
							 <td  style="width:850px"> 
							 <?php $ex=explode('.',$dataset->file_muni_pay);
							 if($ex[1]=='pdf'){ ?>
							 
							 <object data="doc/muni_pay/<?php echo $dataset->file_muni_pay; ?>" type="application/pdf" width="100%" height="700px">
   <p>  Please download the PDF to view it: <a href="/doc/muni_pay/<?php echo $dataset->file_muni_pay; ?>">Download PDF</a>.</p>
</object>
							
							 
							 <?php }
							 
							 
							
							 
							 if(($ex[1]=='jpg') || ($ex[1]=='jpeg') || ($ex[1]=='png')) { ?>
							 
							 <img src="doc/muni_pay/<?php echo $dataset->file_muni_pay; ?> " width="900px" />
							
							 <?php }
							 
							 
							 ?>
							 

</td></tr>
						 </table>


<table><tr height="900"></tr></table>
						 
						 <table border="1" style="100%;">
						<tr>
							 <td  style="width:850px"> 
							 <?php $ex=explode('.',$dataset->file_bank_p_book);
							 if($ex[1]=='pdf'){ ?>
							 
							 <object data="doc/bank_p_book/<?php echo $dataset->file_bank_p_book; ?>" type="application/pdf" width="100%" height="700px">
   <p>  Please download the PDF to view it: <a href="/doc/bank_p_book/<?php echo $dataset->file_bank_p_book; ?>">Download PDF</a>.</p>
</object>
							
							 
							 <?php }
							 
							 
							
							 
							 if(($ex[1]=='jpg') || ($ex[1]=='jpeg') || ($ex[1]=='png')) { ?>
							 
							 <img src="doc/bank_p_book/<?php echo $dataset->file_bank_p_book; ?> " width="900px" />
							
							 <?php }
							 
							 
							 ?>
							 

</td></tr>
						 </table>


							
						</div>
						
						
					</section>
					
					
				</div><!-- /content -->
			</div><!-- /tabs -->
			
		



                      
                      
                    
				  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div>
	  
	  
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
   