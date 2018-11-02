<?php
require('fpdf.php');
include_once("config/config.php");
include_once("config/database.php");
$ob= new database();

//$checkrec=$ob->get_rec("application","*","final_per='Yes' and `id`='".$_REQUEST[id]."'");

$checkrecord=$ob->get_rec("application","*","final_per='Yes' ");


 $add_ps='Address- '.$checkrecord->org_address.', PS- '.$checkrecord->ps.', Dist.- Malda (West Bengal)';


$pdf = new FPDF();
$pdf->AddPage();




$logo=$pdf->Image('images/Emblem.png',100,3,16,21);
$pdf->SetFont('Arial','B',9);
$pdf->Ln(6);
$pdf->Cell(70,26,'');
$pdf->Cell(10,20,'GOVERNMENT OF WEST BENGAL');
$pdf->SetFont('Arial','',9);
$pdf->Cell(-10,2,'');
$pdf->Cell(15,42,'Office of the Sub Divisional Officer');
$pdf->SetFont('Arial','',7);
$pdf->Cell(6,48,'Malda Sadar, Malda');
$pdf->Cell(-90,10,'');
$pdf->SetFont('Arial','',9);
$pdf->Cell(6,48,'Memo No.2302(32)/SDO(S)/Malda');
$pdf->Cell(150,10,'');
$pdf->Cell(200,48,'Date:14/10/2015');
$pdf->Ln(6);	
$pdf->SetFont('Arial','B',9);
$pdf->Cell(12,50,'From:');
$pdf->Cell(0,50,'The Sub-Divisional Officer (Sadar), Malda');
$pdf->Ln(6);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(12,50,'To:');
$pdf->Cell(0,50,$checkrecord->org_name);
$pdf->Ln(1);
$pdf->Cell(10,60,'');
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,60,
	$add_ps);
	$pdf->Ln(2);
	$pdf->SetFont('Arial','B',9);
	$pdf->Cell(10,70,'
	SUB: 	DURGA PUJA Permission with permission for use of mike/loud speakers/boxes in Public subject to conditions.');
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(4,46,'');
	$pdf->Cell(0,70,'
	  In response to his/her prayer / petition permission is hereby accorded to hold `DURGA PUJA - 2015` along with permission of ');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,70,'using microphone in this connection under English Bazar / Old Malda Municipal area under Malda district from 19.10.2015 to 22.10.2015');
	   $pdf->Ln(4);
	
	  $pdf->Cell(0,80,'on condition of strict compliance of following instructions: ');
		$pdf->Ln(4);
	
	  $pdf->Cell(0,80,'1.	Use of microphones / loudspeakers / Sound Boxes will be permitted from 07-00 A.M to 11-00 A.M & 06-00 P.M to 10-00 P.M each');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,80,'day and sound limiter must be fitted with the amplifier to reduce the sound level as per Order of Hon’ble High Court, Calcutta');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,80,'passed in connection with sound pollution cases. The Sound level should not exceed 65 decibels in non-residential and 55 decibels');
	   $pdf->Ln(4);
	
	  $pdf->Cell(0,80,' in mixed residential areas.');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,80,' 2. Playing microphones and loudspeakers / Sound Boxes during night other than permitted period will be viewed seriously.');
	    $pdf->Ln(4);
	
	  $pdf->Cell(0,80,' 3. For spectators there should be separate spaces earmarked for female and male.');
	   $pdf->Ln(4);
	
	  $pdf->Cell(0,80,' 4. The public road and land should never be encroached and NO OBJECTION from the land owner must be obtained by the Organizers.');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,80,'5. Funnel shaped loudspeakers ( Called as Chong ) should not be used.');
	   $pdf->Ln(4);
	
	  $pdf->Cell(0,80,'6. Provision of fire fighting equipments should be kept ready by hand in advance and supply of drinking water for the general spectators');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,80,'should be kept ready.');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,80,'7. Volunteers wearing badges should be present for crowd control.');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,80,'8. Sound making fire-works or any kind of fire-works should not be lit near the Puja Pandal.');
	   $pdf->Ln(4);
	
	  $pdf->Cell(0,80,'9. Emergency lights may be fitted to meet eventuality of power failure.');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,80,'10. Arrangement of first-aid should be there.');
	    $pdf->Ln(4);
	
	  $pdf->Cell(0,80,'11. 	Power should not be drawn by hooking / tapping etc. from existing L.T. mains.');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,80,'12. 	Liaison with the local police station should be maintained during Puja days till Immersion. ');
	
 $pdf->Ln(4);
	
	  $pdf->Cell(0,80,'13. There should be ample space near the pandal for free movement of ambulance, fire tenders, Police Vehicles and Vehicles of Authority. ');	  
	   
	       $pdf->Ln(4);
	
	  $pdf->Cell(0,80,'14. Procession for Immersion should be made as per direction / guidelines of local Police Station / Police Authority & Civil Administration.  ');
		
		 		
		  $pdf->Ln(4);
	
	  $pdf->Cell(0,80,'The movement of people and vehicles should not be disturbed.');		
				

$pdf->Ln(4);
	
	  $pdf->Cell(0,80,'15. Immersion must be completed by the date as fixed by the State Govt. & as per direction of local Police & Civil administration. ');	



$pdf->Ln(4);
	
	  $pdf->Cell(0,80,'Separate permission for Immersion procession route and timings will be taken from local Thana.');	

 	$pdf->Ln(4);
	
	  $pdf->Cell(0,80,'16. Road cannot be encroached by any means.');	

$pdf->Ln(4);
	
	  $pdf->Cell(0,80,'17. Immersion must be completed as per direction of local Police Administration & Civil Administration.');

$pdf->Ln(4);
	
	  $pdf->Cell(0,80,'18. The Movements of people as well as the vehicles should be restricted so that normalcy of traffic is not affected by any means on the ');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,80,'nearby roads. Mike cannot be used if local people complain, despite this permission. Mike/Loudspeaker cannot be used in SILENCE  ');
	   $pdf->Ln(4);
	
	  $pdf->Cell(0,80,' Zones or Prohibited Zones despite this Permission. The rush of the public should be lawfully controlled for the restoration of peace  ');
	 
	   $pdf->Ln(4);
	
	  $pdf->Cell(0,80,' and law & order by organisers.');

$pdf->Ln(4);
	
	  $pdf->Cell(0,80,'19. Cultural Programme permission must be taken from local Thana and then OC Judicial Munshikahna, Malda Collectorate  separately.');	  
$pdf->Ln(4);
	
	  $pdf->Cell(0,80,'20. Liaison with the Local Police authority to be maintained.');
			   		
	$pdf->Ln(4);
	
	  $pdf->Cell(0,80,'21. Organizer shall be responsible for paying all due costs and license fees , public liabilities and cleaning up program venue after use.');
	  $pdf->Ln(4);
	
	  $pdf->Cell(0,80,'22. Organiser shall be bound to abide by all terms and conditions stated in their prayer under oath and documents submitted.');	
	   $pdf->Ln(4);
	  $pdf->Cell(0,80,'23. Acceptance of this letter and further pursuing of the program will automatically mean agreement to all above terms and ');	
	   $pdf->Ln(4);
	  $pdf->Cell(0,80,'conditions in public interest and violation will be viewed seriously and program closed without any further notice.');		
	 
	  $pdf->Ln(4);
	  $pdf->Cell(0,80,'24. Expenditure incurred for program must be lawfully obtained and no forced subscription can be taken or tickets sold without separate');
	   $pdf->Ln(4);
	  $pdf->Cell(0,80,'permission.');
	  $pdf->Ln(4);
	  $pdf->Cell(0,80,'25. For any violation of terms and conditions, legal action will be taken without further notice.');
	   $pdf->Ln(4);
	  $pdf->Cell(0,80,'26. In the event of the opening ceremony or any others event participated by the Celebrities, the matter must be informed to local police ');
	   $pdf->Ln(4);
	  $pdf->Cell(0,80,'authority well in advance. ');
	  $pdf->Ln(4);
	  $pdf->Cell(0,80,'27. The organizers are requested to display the “1098” child line number for protection of children.');
	  $pdf->Ln(10);
	  $pdf->Cell(140,46,'');
	  $pdf->Cell(0,80,'Sub-Divisional Officer');
	  $pdf->Ln(4);
	  $pdf->Cell(140,46,'');
	  $pdf->Cell(0,80,'Malda Sadar, Malda');
	   $pdf->Ln(4);
	  $pdf->Cell(140,46,'');
	  $pdf->Cell(0,80,'Date:14/10/2015');
	  
	  $pdf->Ln(4);
	  $pdf->Cell(0,80,' Memo No.2302(32)/1(7)/SDO(S)/Malda,');
	   $pdf->Ln(4);
	  $pdf->Cell(0,80,'Copy forwarded to:- For kind information & necessary action please');
	    $pdf->Ln(4);
	  $pdf->Cell(0,80,'1)	The Officer In Charge, Judicial Munshikhana, Malda Collectorate, Malda.');
	    $pdf->Ln(4);
	  $pdf->Cell(0,80,'2)	The Chairman, Englishbazar / Old Malda Municipality, Malda. ');
	   $pdf->Ln(4);
	  $pdf->Cell(0,80,'3)	The Inspector-in-Charge, English Bazar / Malda Police Station for information with the direction to monitor the situation to maintain ');
	   $pdf->Ln(4);
	  $pdf->Cell(0,80,'Law & Order during the Puja days and to confirm that no road is encroached by making of Pandal by the Organiser.');
	    $pdf->Ln(4);
	  $pdf->Cell(0,80,'4)	The Officer-In-Charge, Fire Station, Malda for information & taking necessary action.');
	  $pdf->Ln(4);
	  $pdf->Cell(0,80,'5)	The Station Manager, Fulbari Sector Gr. E / Supply, W.B.S.E.D.C.L Malda for information & necessary action.');
	  $pdf->Ln(4);
	  $pdf->Cell(0,80,'6)	The Asstt. Environmental Engineer, W.B.P.C.B., Malda Regional Office, Malda. He is requested to keep his close vigil on the situation ');
	  $pdf->Ln(4);
	  $pdf->Cell(0,80,'6)	and may take necessary action as per rule. ');
	  $pdf->Ln(4);
	  $pdf->Cell(0,80,'7)	 C.A. to D.M, Malda.');
	  $pdf->Ln(10);
	  $pdf->Cell(140,46,'');
	  $pdf->Cell(0,80,'Sub-Divisional Officer');
	  $pdf->Ln(4);
	  $pdf->Cell(140,46,'');
	  $pdf->Cell(0,80,'Malda Sadar, Malda');
	   $pdf->Ln(4);
	  $pdf->Cell(140,46,'');
	  $pdf->Cell(0,80,'Date:14/10/2015');
	 
	 
	 
	 
	  
	  
$pdf->Output();
?>