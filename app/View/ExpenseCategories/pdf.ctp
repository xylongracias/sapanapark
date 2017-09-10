<?php

    $dt = new DateTime();
	 	$sysdate = $dt->format('d/m/Y'); 
	    $fpdf->AddPage();
		$header = array('Name', 'Cash/Cheque', 'Date', 'Amount');
		$grand_total = 0;

	    $fpdf->SetFont('Arial','B',24);
	    $fpdf->Cell(185,10,'Sapana Park Co-op. Housing Society Ltd.', 0, 1, 'C');

		foreach ($expenseData as $key => $value) {
			$cat_total = 0;
			$fpdf->Ln();
			 $fpdf->SetFont('Arial','B',20);
			$fpdf->Cell(185,10,$value['ExpenseCategory']['name'], 0, 1, 'C');
			
			// Column widths
			$w = array(40, 35, 40, 45);
			$fpdf->SetFont('Arial','B',15);
			// Header
			for($i=0;$i<count($header);$i++)
				$fpdf->Cell($w[$i],7,$header[$i],1,0,'C');
			
			$fpdf->Ln();
			$fpdf->SetFont('Arial','',15);
			foreach ($value['ExpenseBill'] as $keyb => $valueb) {
				$fpdf->Cell($w[0],6,$valueb['name'],1,0,'C');
				$fpdf->Cell($w[1],6,$valueb['payment_method'],1,0,'C');
				$fpdf->Cell($w[2],6,$valueb['date'],1,0,'C');
				$fpdf->Cell($w[3],6,$valueb['amount'],1,0,'C');
				$fpdf->Ln();

				$cat_total += $valueb['amount'];
			}

			$fpdf->Cell(40,6,'Total','TLB',0,'C');
			$fpdf->Cell(35,6,'','TB',0,'C');
			$fpdf->Cell(40,6,'','TB',0,'C');
			$fpdf->Cell(45,6,$cat_total,'TBR',0,'C');

			$grand_total += $cat_total;
		}

		$fpdf->Ln();
		$fpdf->Ln();
		$fpdf->Cell(40,6,'Grand Total','TLB',0,'C');
		$fpdf->Cell(35,6,'','TB',0,'C');
		$fpdf->Cell(40,6,'','TB',0,'C');
		$fpdf->Cell(45,6,$grand_total,'TBR',0,'C');

        $fpdf->Output();
?>