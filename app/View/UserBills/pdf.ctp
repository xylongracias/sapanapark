	<?php
		$dt = new DateTime();
	 	$sysdate = $dt->format('d/m/Y'); 
	    $fpdf->AddPage();


	    $fpdf->SetFont('Arial','B',24);
	    $fpdf->Cell(185,10,'Sapana Park Co-op. Housing Society Ltd.', 0, 1, 'C');
	    $fpdf->SetFont('Arial','B',16);
	    $fpdf->Cell(185,10,'Ref. No. ARCS/CZ/HSG/374-(b)-GOA', 0, 1, 'C');
	    $fpdf->Cell(25,10,'BILL NO.', 0,0);
	    $fpdf->Cell(88,10,$id, 0,0);

	    $fpdf->SetFont('Arial','',12);
	    $fpdf->Cell(25,10,'Date:', 0,0);
	    $fpdf->Cell(40,10,$sysdate, 'B',1);

	    $fpdf->Cell(200,10,'Your account is debited as under :-', 0, 1);

	    $fpdf->Cell(25,10,'Building', 0);
	    $fpdf->Cell(15,10,$building, 'B');

	    $fpdf->Cell(25,10,'Flat/Shop', 0);
	    $fpdf->Cell(15,10,$flat, 'B',0);

	    $fpdf->Cell(40,10,'For the month of');
	    $fpdf->Cell(55,10,$months,'B');
	    $fpdf->Ln();

	    $fpdf->Cell(25,10,'Shri./Smt', 0);
	    $fpdf->Cell(40,10,$userName, 'B',0);
	    $fpdf->Ln();

	    $fpdf->Cell(28,10,'Amount Paid', 0);
	    $fpdf->Cell(40,10,$amount, 'B',0);
	    $fpdf->Ln();
	    $fpdf->Ln();
	    $fpdf->Cell(28,10,'Description:', 0);
	    $fpdf->MultiCell(100, 5, $description);

		$fpdf->Ln(90);
		$fpdf->Line(10,190,200,190);
		$fpdf->SetFont('Arial','I',12);
	    $fpdf->Cell(190,10,'Defaulter for more than two months water supply discontinue / Notice issued',0,1,'C');

	    $fpdf->SetFont('Arial','',12);
	    $fpdf->Ln();
	    $fpdf->MultiCell(190,7,'1) Requested to pay Bill on or before 10th of every month otherwise penalty after due date @ Rs. 1/- per day (for occupied) will be charged');
	    $fpdf->Cell(190,10,"2) Pay by Payee's A/c. Cheques till 5th of every month.");
	    $fpdf->Ln();
	    $fpdf->Cell(190,10,"3) Non Occupation charge will be charged as decided by A.G.M.");

	    $fpdf->Ln();
	    $fpdf->Cell(100,10,"Thanks for Co-operation");
	    $fpdf->Cell(190,10,"For Sapana Park Co-op. Housing Society Ltd.");
	    $fpdf->Ln(10);
	    $fpdf->SetLeftMargin(115);
	    $fpdf->Cell(190,10,"Chairman/Hon. Secretary/Treasurer");   

	    $fpdf->Output();
	?>