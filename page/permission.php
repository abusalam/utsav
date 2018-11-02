<?php
$MemoNo     = '3456(40)/SDO(S)/Malda';
$Dated      = '02/11/2018';
$Puja       = 'Kali Puja';
$PujaYear   = '2018';
$During     = '06/11/2018 to 07/11/2018';

require('fpdf.php');
include_once("config/config.php");
include_once("config/database.php");
$ob= new database();

if(isset($_REQUEST['apppanel'])=='yes')

{
$checkrecord=$ob->get_rec("application","*","`final_per`='Yes' and `id`='".$_REQUEST[id]."'");

}
else
{
$sendid=base64_decode($_REQUEST[sendvalue]);
$ex=explode('.',$sendid);


$checkrecord=$ob->get_rec("application","*","`final_per`='Yes' and `id`='".$ex[1]."'");

}

//$checkrec=$ob->get_rec("application","*","final_per='Yes' and `id`='".$_REQUEST[id]."'");
/*else {
$checkrecord=$ob->get_rec("application","*","final_per='Yes' ");
}*/

 $add_ps='Address- '.$checkrecord->org_address.', PS- '.$checkrecord->ps.', Dist.- Malda (West Bengal)';
if($checkrecord->ps=='English Bazar PS')
{
$mun=' English Bazar';

}
else
{
$mun=' Old Malda';

}

$pdf = new FPDF();
$pdf->AddPage();




$logo=$pdf->Image('images/Emblem.png',100,5,7,11);
$pdf->SetFont('Arial','B',8);
$pdf->Ln(6);
$pdf->Cell(70,20,'');
$pdf->Cell(10,10,'GOVERNMENT OF WEST BENGAL');
$pdf->SetFont('Arial','',8);
$pdf->Cell(-10,2,'');
$pdf->Cell(15,16,'Office of the Sub Divisional Officer');
$pdf->SetFont('Arial','',7);
$pdf->Cell(6,22,'Malda Sadar, Malda');
$pdf->Cell(-91,10,'');
$pdf->SetFont('Arial','',8);
$pdf->Cell(6,22,'Memo No. ' . $MemoNo);
$pdf->Cell(150,7,'');
$pdf->Cell(200,20,'Date: ' . $Dated);
$pdf->Ln(4);	
$pdf->SetFont('Arial','B',8);
$pdf->Cell(12,23,'From:');
$pdf->Cell(0,23,'The Sub-Divisional Officer (Sadar), Malda');
$pdf->Ln(4);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(12,23,'To:');
$pdf->Cell(0,23,$checkrecord->org_name);
$pdf->Ln(1);
$pdf->Cell(12,60,'');

$pdf->Cell(0,30,
	$add_ps);
	$pdf->Ln(4);
	$pdf->SetFont('Arial','BU',8);
	$pdf->Cell(10,30,'');
	$pdf->Cell(20,30,'
	SUB: 	' . $Puja . ' Permission with permission for use of mike/loud speakers/boxes in Public subject to conditions.');
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(4,46,'');
	$pdf->Cell(0,30,'
	  In response to his/her prayer / petition permission is hereby accorded to hold `' . $Puja . ' - ' . $PujaYear . '` along with permission of using microphone in this');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,30,'connection under');
	  $pdf->SetFont('Arial','B',8);
	  $pdf->Cell(-173,100,'');
	   $pdf->Cell(10,30,$mun);
	    $pdf->SetFont('Arial','',8);
	  $pdf->Cell(10,100,'');
	   $pdf->Cell(-10,30,'Municipal area under Malda district from ' . $During . ' on condition of strict compliance of following instructions:');

	   $pdf->Ln(4);
	  $pdf->Cell(0,30,'1.	Use of microphones / loudspeakers / Sound Boxes will be permitted from 07-00 A.M to 11-00 A.M & 06-00 P.M to 10-00 P.M each');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,30,'day and sound limiter must be fitted with the amplifier to reduce the sound level as per Order of Hon`ble High Court, Calcutta');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,30,'passed in connection with sound pollution cases. The Sound level should not exceed 65 decibels in non-residential and 55 decibels in mixed residential areas.');
	  
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,30,' 2. Playing microphones and loudspeakers / Sound Boxes during night other than permitted period will be viewed seriously.');
	    $pdf->Ln(4);
	
	  $pdf->Cell(0,30,' 3. For spectators there should be separate spaces earmarked for female and male.');
	   $pdf->Ln(4);
	
	  $pdf->Cell(0,30,' 4. The public road and land should never be encroached and NO OBJECTION from the land owner must be obtained by the Organizers.');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,30,'5. Funnel shaped loudspeakers ( Called as Chong ) should not be used.');
	   $pdf->Ln(4);
	
	  $pdf->Cell(0,30,'6. Provision of fire fighting equipments should be kept ready by hand in advance and supply of drinking water for the general spectators should be kept ready.');
	 
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,30,'7. Volunteers wearing badges should be present for crowd control.');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,30,'8. Sound making fire-works or any kind of fire-works should not be lit near the Puja Pandal.');
	   $pdf->Ln(4);
	
	  $pdf->Cell(0,30,'9. Emergency lights may be fitted to meet eventuality of power failure.');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,30,'10. Arrangement of first-aid should be there.');
	    $pdf->Ln(4);
	
	  $pdf->Cell(0,30,'11. 	Power should not be drawn by hooking / tapping etc. from existing L.T. mains.');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,30,'12. 	Liaison with the local police station should be maintained during Puja days till Immersion. ');
	
 $pdf->Ln(4);
	
	  $pdf->Cell(0,30,'13. There should be ample space near the pandal for free movement of ambulance, fire tenders, Police Vehicles and Vehicles of Authority. ');	  
	   
	       $pdf->Ln(4);
	
	  $pdf->Cell(0,30,'14. Procession for Immersion should be made as per direction / guidelines of local Police Station / Police Authority & Civil Administration.  ');
		
		 		
		  $pdf->Ln(4);
	
	  $pdf->Cell(0,30,'The movement of people and vehicles should not be disturbed.');		
				

$pdf->Ln(4);
	
	  $pdf->Cell(0,30,'15. Immersion must be completed by the date as fixed by the State Govt. & as per direction of local Police & Civil administration. ');	



$pdf->Ln(4);
	
	  $pdf->Cell(0,30,'Separate permission for Immersion procession route and timings will be taken from local Thana.');	

 	$pdf->Ln(4);
	
	  $pdf->Cell(0,30,'16. Road cannot be encroached by any means.');	

$pdf->Ln(4);
	
	  $pdf->Cell(0,30,'17. Immersion must be completed as per direction of local Police Administration & Civil Administration.');

$pdf->Ln(4);
	
	  $pdf->Cell(0,30,'18. The Movements of people as well as the vehicles should be restricted so that normalcy of traffic is not affected by any means on the nearby roads. Mike');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,30,' cannot be used if local people complain, despite this permission. Mike/Loudspeaker cannot be used in SILENCE Zones or Prohibited Zones despite this');
	   $pdf->Ln(4);
	
	  $pdf->Cell(0,30,' Permission. The rush of the public should be lawfully controlled for the restoration of peace and law & order by organisers.');
	 
	 

$pdf->Ln(4);
	
	  $pdf->Cell(0,30,'19. Cultural Programme permission must be taken from local Thana and then OC Judicial Munshikahna, Malda Collectorate  separately.');	  
$pdf->Ln(4);
	
	  $pdf->Cell(0,30,'20. Liaison with the Local Police authority to be maintained.');
			   		
	$pdf->Ln(4);
	
	  $pdf->Cell(0,30,'21. Organizer shall be responsible for paying all due costs and license fees , public liabilities and cleaning up program venue after use.');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,30,'22. Organiser shall be bound to abide by all terms and conditions stated in their prayer under oath and documents submitted.');	
	   $pdf->Ln(4);
	  $pdf->Cell(0,30,'23. Acceptance of this letter and further pursuing of the program will automatically mean agreement to all above terms and ');	
	   $pdf->Ln(4);
	  $pdf->Cell(0,30,'conditions in public interest and violation will be viewed seriously and program closed without any further notice.');		
	 
	  $pdf->Ln(4);
	  $pdf->Cell(0,30,'24. Expenditure incurred for program must be lawfully obtained and no forced subscription can be taken or tickets sold without separate permission.');
	  
	  $pdf->Ln(4);
	  $pdf->Cell(0,30,'25. For any violation of terms and conditions, legal action will be taken without further notice.');
	   $pdf->Ln(4);
	  $pdf->Cell(0,30,'26.In the event of the opening ceremony or any others event participated by the Celebrities, the matter must be informed to local police authority well in ');
	   $pdf->Ln(4);
	  $pdf->Cell(0,30,'advance. ');
	  
	  $pdf->Ln(4);
	  $pdf->Cell(0,30,'27. The organizers are requested to display the `1098` child line number for protection of children.');
	  $pdf->Ln(10);
	  
	  $pdf->Cell(140,46,'');
	 
	  $pdf->Cell(0,30,'Sub-Divisional Officer');
	  $pdf->Ln(4);
	   $logo=$pdf->Image('images/051.jpg',160,186,15,12);
	  $pdf->Cell(140,46,'');
	  $pdf->Cell(0,30,'Malda Sadar, Malda');
	   $pdf->Ln(4);
	  $pdf->Cell(140,46,'');
	  $pdf->Cell(0,30,'Date: ' . $Dated);
	  
	  $pdf->Ln(4);
	  $pdf->Cell(0,20,' Memo No.'. $MemoNo .',');
	   $pdf->Ln(4);
	  $pdf->Cell(0,20,'Copy forwarded to:- For kind information & necessary action please');
	    $pdf->Ln(4);
	  $pdf->Cell(0,20,'1)	The Officer In Charge, Judicial Munshikhana, Malda Collectorate, Malda.');
	    $pdf->Ln(4);
	  $pdf->Cell(0,20,'2)	The Chairman, Englishbazar / Old Malda Municipality, Malda. ');
	   $pdf->Ln(4);
	  $pdf->Cell(0,20,'3)	The Inspector-in-Charge, English Bazar / Malda Police Station for information with the direction to monitor the situation to maintain ');
	   $pdf->Ln(4);
	  $pdf->Cell(0,20,'Law & Order during the Puja days and to confirm that no road is encroached by making of Pandal by the Organiser.');
	    $pdf->Ln(4);
	  $pdf->Cell(0,20,'4)	The Officer-In-Charge, Fire Station, Malda for information & taking necessary action.');
	  $pdf->Ln(4);
	  $pdf->Cell(0,20,'5)	The Station Manager of Gr. E / Supply, W.B.S.E.D.C.L Malda for information & necessary action.');
	  $pdf->Ln(4);
	  $pdf->Cell(0,20,'6)	The Asstt. Environmental Engineer, W.B.P.C.B., Malda Regional Office, Malda. He is requested to keep his close vigil on the situation ');
	  $pdf->Ln(4);
	  $pdf->Cell(0,20,'6)	and may take necessary action as per rule. ');
	  $pdf->Ln(4);
	  $pdf->Cell(0,20,'7)	 C.A. to D.M, Malda.');
	  $pdf->Ln(20);
	  $pdf->Cell(140,3,'');
	  $pdf->Cell(0,0,'Sub-Divisional Officer');
	 $logo=$pdf->Image('images/051.jpg',160,243,15,12);
	 $pdf->Cell(-54,24,'');
	
	  $pdf->Cell(0,6,'Malda Sadar, Malda');
	    $pdf->Cell(-54,20,'');
	  
	  $pdf->Cell(0,13,'Date: ' . $Dated);
	 
	    $pdf->Ln(13);
	   $pdf->Cell(0,0,' Department Numbers:  1.Police -03512-221025,  2.Fire Service - 03512-278854,  3.Electric Service - 7449302675,  4. Pollution - 7602306370');
	  $pdf->Ln(2);   
   $pdf->Cell(0,2,'                                        5. Englishbazar Municipality - 03512-252029,  6. Old Malda Municipality - 8670332949');
	 
	  
	  
$pdf->Output();
?>