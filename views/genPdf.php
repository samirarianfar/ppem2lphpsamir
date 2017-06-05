<?php
	
	 // Appel de la librairie FPDF
		require("fpdf/fpdf.php");
		require("controllers/genPdf.php")
		
		// Création de la class PDF
		//class genPdf extends fpdf {
			
			// Activation de la classe
			//$pdf = new PDF('P','mm','A4');
			//$pdf->AddPage();
			//$pdf->SetFont('Helvetica','',11);
			//$pdf->SetTextColor(0);
		
		// Position de l'entête à 10mm des infos (48 + 10)
			//$position_entete = 58;

		//function entete_table($position_entete){
		
	
	//entete_table($position_entete);
	
	
              
                    foreach ($Gpdf as $cle=> $reslutat) 
                {
                    echo ('$pdf->SetY($position_detail);
							$pdf->SetX(8);
							$pdf->MultiCell(158,8,utf8_decode($reslutat['Date_debut']),1,'L');
							$pdf->SetY($position_detail);
							$pdf->SetX(166);
							$pdf->MultiCell(10,8,$reslutat['Date_fin'],1,'C');
							$pdf->SetY($position_detail);
							$pdf->SetX(176);
							$pdf->MultiCell(24,8,$reslutat['ContenuFormation'],1,'R')
							$pdf->SetX(176);
							$pdf->MultiCell(24,8,$reslutat['Libelle'],1,'R')';
							$pdf->SetX(176);
							$pdf->MultiCell(24,8,$reslutat['NbjoursFormation'],1,'R')';
							$pdf->SetX(176);
							$pdf->MultiCell(24,8,$reslutat['ContenuFormation'],1,'R')';
							$pdf->SetX(176);
							$pdf->MultiCell(24,8,$reslutat['Rue'],1,'R')';
							$pdf->SetX(176);
							$pdf->MultiCell(24,8,$reslutat['commune'],1,'R')';
							$pdf->SetX(176);
							$pdf->MultiCell(24,8,$reslutat['Code_p'],1,'R')';
							$pdf->SetX(176);
							$pdf->MultiCell(24,8,$reslutat['Numero'],1,'R')';
						
							);
							
?>