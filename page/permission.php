<?php
require('fpdf.php');
include_once("config/config.php");
include_once("config/database.php");

$MemoNo     = MEMO_NO;
$Dated      = MEMO_DATE;
$Puja       = PUJA_NAME;
$PujaYear   = PUJA_YEAR;
$During     = PUJA_DURATION;

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

    $pdf = new FPDF();
    $pdf->AddPage();
    
    $logo=$pdf->Image('images/WB-Logo.png',100,5,12);
    $logo=$pdf->Image('images/SDO-Sadar-Sign.png',155,205,33,17);
    $logo=$pdf->Image('images/SDO-Sadar-Sign.png',155,252,33,17);
    
    $pdf->SetFont('Arial','',8);
    $pdf->SetXY(140,218);
    $pdf->Cell(50,3,'Sub-Divisional Officer',0,1,'C');
    $pdf->SetX(140);
    $pdf->Cell(50,3,'Malda Sadar, Malda',0,1,'C');
    
    $pdf->SetXY(140,265);
    $pdf->Cell(50,3,'Sub-Divisional Officer',0,1,'C');
    $pdf->SetX(140);
    $pdf->Cell(50,3,'Malda Sadar, Malda',0,1,'C');
    
    $pdf->SetXY(10,16);
    
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(190,4,'GOVERNMENT OF WEST BENGAL',0,1,'C');
    
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(190,3,'Office of the Sub Divisional Officer',0,1,'C');
    
    $pdf->SetFont('Arial','',7);
    $pdf->Cell(190,3,'Malda Sadar, Malda',0,1,'C');
    
    $pdf->SetXY(10,20);
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(80,3,'Memo No. ' . $MemoNo);
    $pdf->Cell(110,3,'Date: ' . $Dated,0,1,'R');
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(0,10,'From: The Sub-Divisional Officer (Sadar), Malda',0,1);
    $pdf->Cell(0,3,'To: ' . $checkrecord->org_name,0,1);
    $pdf->Cell(0,3, $add_ps,0,1);

	$pdf->SetFont('Arial','BU',8);
	$pdf->Cell(0,10,'SUB: 	' . $Puja . ' Permission with permission for use of mike/loud speakers/boxes in Public subject to conditions.',0,1,'C');

	$pdf->SetFont('Arial','',8);
	$pdf->Write(4,'	  In response to his/her prayer / petition permission is hereby accorded to hold `' . $Puja . ' - ' . $PujaYear . '` along with permission of using microphone in this connection under ' . $checkrecord->ps . ' area under Malda district from ' . $During . ' on condition of strict compliance of following instructions:');
	$pdf->Ln();
	$pdf->Write(4,'1. Use of microphones / loudspeakers / Sound Boxes will be permitted from 07-00 A.M to 11-00 A.M & 06-00 P.M to 10-00 P.M each day and sound limiter must be fitted with the amplifier to reduce the sound level as per Order of Hon`ble High Court, Calcutta passed in connection with sound pollution cases. The Sound level should not exceed 65 decibels in non-residential and 55 decibels in mixed residential areas.');
	$pdf->Ln();
	$pdf->Write(4,'2. Playing microphones and loudspeakers / Sound Boxes during night other than permitted period will be viewed seriously and subject to penal action. Mike cannot be used if local people complain, despite this permission. Mike/ Loudspeaker cannot be used in SILENCE Zones or Prohibited Zones despite this permission. The rush of the public should be lawfully controlled for the restoration of peace and law & order by organizers.');
	$pdf->Ln();
	$pdf->Write(4,'3. In view of COVID-19 pandemic, all guidelines issued by the Chief Secretary, Govt of West Bengal, vide Memo No. 319-CS/2020 Dated 28.09.2020, should be followed very strictly. Any laxity in the adherence of these guidelines shall be viewed seriously and shall invite penal actions.');
	$pdf->Ln();
	$pdf->Write(4,'4. For spectators there should be separate spaces earmarked for female and male.');
	$pdf->Ln();
	$pdf->Write(4,'5. The public road and land should never be encroached and NO OBJECTION from the land owner must be obtained by the Organizers.');
	$pdf->Ln();
	$pdf->Write(4,'6. Funnel shaped loudspeakers ( Called as Chong ) should not be used.');
	$pdf->Ln();
	$pdf->Write(4,'7. Provision of fire fighting equipments should be kept ready by hand in advance and supply of drinking water for the general spectators should be kept.');
	$pdf->Ln();
	$pdf->Write(4,'8. Volunteers wearing badges should be present for crowd control.');
	$pdf->Ln();
	$pdf->Write(4,'9. Sound making fire-works or any kind of fire-works should not be lit near the Puja Pandal. Emergency lights may be fitted to meet eventuality of power failure, which may lead to chaos which is undesirable in times of COVID-19.');
	$pdf->Ln();
	$pdf->Write(4,'10. Arrangement of first-aid should be there.');
	$pdf->Ln();
	$pdf->Write(4,'11. Power should not be drawn by hooking / tapping etc. from existing L.T. mains.');
	$pdf->Ln();
	$pdf->Write(4,'12. Liaison with the local police station should be maintained during Puja days till Immersion.');
	$pdf->Ln();
	$pdf->Write(4,'13. There should be ample space near the pandal for free movement of ambulance, fire tenders, Police Vehicles and Vehicles of Authority.');	  
	$pdf->Ln();
	$pdf->Write(4,'14. Procession for Immersion should be made as per direction / guidelines of local Police Station / Police Authority & Civil Administration. The movement of people and vehicles should not be disturbed.');		
	$pdf->Ln();
	$pdf->Write(4,'15. Immersion must be completed by the date as fixed by the State Govt. & as per direction of local Police & Civil administration. Separate permission for Immersion procession route and timings will be taken from local Thana.');	
 	$pdf->Ln();
    $pdf->Write(4,'16. Road cannot be encroached by any means.');	
    $pdf->Ln();
	$pdf->Write(4,'17. Immersion must be completed as per direction of local Police Administration & Civil Administration.');
    $pdf->Ln();
	$pdf->Write(4,'18. The Movements of people as well as the vehicles should be restricted so that normalcy of traffic is not affected by any means on the nearby roads.');
	$pdf->Ln();
	$pdf->Write(4,'19. Cultural Programme permission must be taken from local Thana and then OC Judicial Munshikahna, Malda Collectorate  separately.');	  
    $pdf->Ln();
	$pdf->Write(4,'20. Liaison with the Local Police authority to be maintained.');
	$pdf->Ln();
	$pdf->Write(4,'21. Organizer shall be responsible for paying all due costs and license fees , public liabilities and cleaning up program venue after use.');
	$pdf->Ln();
	$pdf->Write(4,'22. Acceptance of this letter and further pursuing of the program will automatically mean agreement to all above terms and conditions in public interest and violation will be viewed seriously and program closed without any further notice.');		
	$pdf->Ln();
	$pdf->Write(4,'23. Expenditure incurred for program must be lawfully obtained and no forced subscription can be taken or tickets sold without separate permission.');
	$pdf->Ln();
	$pdf->Write(4,'24. For any violation of terms and conditions, legal action will be taken without further notice.');
	$pdf->Ln();
	$pdf->Write(4,'25. In the event of the opening ceremony or any others event participated by the Celebrities, the matter must be informed to local police authority well in advance. ');
	$pdf->Ln();
	$pdf->Write(4,'26. The organizers are requested to display the `1098` child line number for protection of children.');
	$pdf->Ln();
	$pdf->Write(4,'27. As per hon\'ble Supreme Court of India Order fire crackers are to be used only between 08:00 PM to 10:00 PM.');
    
    
    
    $pdf->SetY(220);
    $pdf->Write(4,'Memo No.'. $MemoNo);
    $pdf->Cell(100,3,'Date: ' . $Dated,0,1,'R');
    $pdf->Write(4,'Copy forwarded to:- For kind information & necessary action please');
    $pdf->Ln();
    $pdf->Write(4,'1)	The Officer In Charge, Judicial Munshikhana, Malda Collectorate, Malda.');
    $pdf->Ln();
    $pdf->Write(4,'2)	The Chairman, Englishbazar / Old Malda Municipality, Malda. ');
    $pdf->Ln();
    $pdf->Write(4,'3)	The Inspector-in-Charge, English Bazar / Malda Police Station for information with the direction to monitor the situation to maintain Law & Order during the Puja days and to confirm that no road is encroached by making of Pandal by the Organiser.');
    $pdf->Ln();
    $pdf->Write(4,'4)	The Officer-In-Charge, Fire Station, Malda for information & taking necessary action.');
    $pdf->Ln();
    $pdf->Write(4,'5)	The Station Manager of Gr. E / Supply, W.B.S.E.D.C.L Malda for information & necessary action.');
    $pdf->Ln();
    $pdf->Write(4,'6)	The Asstt. Environmental Engineer, W.B.P.C.B., Malda Regional Office, Malda. He is requested to keep his close vigil on the situation and may take necessary action as per rule.');
    $pdf->Ln();
    $pdf->Write(4,'7)	 C.A. to D.M, Malda.');
    
    $pdf->SetY(266);
    $pdf->Cell(0,6,'Department Numbers:-',0,1);
    $pdf->Write(4,'1.Police -03512-221025,  2.Fire Service - 03512-278854,  3.Electric Service - 7449302675,  4. Pollution - 7602306370 5. Englishbazar Municipality - 03512-252029,  6. Old Malda Municipality - 9749220699');

$pdf->Output();
?>