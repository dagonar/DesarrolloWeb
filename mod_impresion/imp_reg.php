<?php 
?>
<?php
require_once("classpdf/fpdf.php");

/*********** Se crea PDF ***********************/
    $pdf = new fpdf('P','mm','A4');
	$pdf->AddPage();
    $pdf->SetFont('Arial','B',14);
/***************  Header ***************************/
    $header_uno  = $pdf->Text(10, 15, "Direccion del paciente");
	$header_uno .= $pdf->text(10, 20, "Colonia");
	$header_uno .= 	$pdf->text(10, 25, "Ciudad");
	$header_uno .= $pdf->text(10, 30, "Tels");
	$pdf->Cell(190, 20,$header_uno);
	$pdf->Ln();
    $pdf->Cell(190, 10,"");
    $pdf->Ln();
/*************** Cuerpo del documento **************/
    $beg_bod = "Constancia de Expediente";
    $pdf->Cell(190, 10,$beg_bod,0, 0, 'C');
    $pdf->Ln(); 
/**************** Campo Cama ****************/	
    $pdf->SetFont('Arial','B',10);
	$camp_ced = "No. de Cama:";
	$camp_ced_value = $_POST["cedula"];
	$pdf->Cell(50, 8,$camp_ced,1);
	$pdf->SetFont("Times");
	$pdf->Cell(140, 8,$camp_ced_value,1);
	$pdf->Ln();
/**************** Campo nombre ****************/
    $pdf->SetFont('Arial','B',10);		
	$camp_nombre = "Nombre:";
    $camp_nombre_value = $_POST["nombre"];
	$pdf->Cell(50, 8,$camp_nombre,1);
	$pdf->SetFont("Times");
	$pdf->Cell(140, 8,$camp_nombre_value,1);
	$pdf->Ln();
/**************** Campo Apllido ****************/	
	$pdf->SetFont('Arial','B',10);	
	$camp_apellido = "Apellidos:";        
	$camp_apellido_value = $_POST["apellido"];
	$pdf->Cell(50, 8,$camp_apellido,1);
	$pdf->SetFont("Times");
	$pdf->Cell(140, 8,$camp_apellido_value,1);
	$pdf->Ln();
/**************** Campo Edad ****************/	
	$pdf->SetFont('Arial','B',10);	
	$camp_edad = "Edad:";
	$camp_edad_value = $_POST["edad"];
    $pdf->Cell(50, 8,$camp_edad,1);
    $pdf->SetFont("Times");
	$pdf->Cell(140, 8,$camp_edad_value,1);
	$pdf->Ln();
/**************** Campo fecha de nacimiento ****************/	
    $pdf->SetFont('Arial','B',10);		
	$camp_fechan = "Fecha de nacimiento:";
	$camp_fechan_value = $_POST["fech_nac"];
    $pdf->Cell(50, 8,$camp_fechan,1);
    $pdf->SetFont("Times");
	$pdf->Cell(140, 8,$camp_fechan_value,1);
	$pdf->Ln();
/**************** Campo Sexo ****************/	
    $pdf->SetFont('Arial','B',10);	
    $camp_sexo = "Sexo:";
    $camp_sexo_value = $_POST["sexo"];
    $pdf->Cell(50, 8,$camp_sexo,1);
    $pdf->SetFont("Times");
	$pdf->Cell(140, 8,$camp_sexo_value,1);
	$pdf->Ln();
/**************** Campo Sala ****************/		
	$pdf->SetFont('Arial','B',10);
	$camp_sala = "Sala:";
	$camp_sala_value = $_POST["sala"];
	$pdf->Cell(50, 8,$camp_sala,1);
	$pdf->SetFont("Times");
	$pdf->Cell(140, 8,$camp_sala_value,1);
	$pdf->Ln();
/**************** Campo Telefono ****************/	    
	$pdf->SetFont('Arial','B',10);
	$camp_telefono = "Telefono:";
	$camp_telefono_value = $_POST["telefono"];
	$pdf->Cell(50, 8,$camp_telefono,1);
	$pdf->SetFont("Times");
	$pdf->Cell(140, 8,$camp_telefono_value,1);
	$pdf->Ln();
/**************** Campo Nombre del Adscrito ****************/		
    $pdf->SetFont('Arial','B',10);
	$camp_nombrerep = "Nombre del Adscrito:";
    $camp_nombrerep_value = $_POST["nomrep"];
    $pdf->Cell(50, 8,$camp_nombrerep,1);
    $pdf->SetFont("Times");
	$pdf->Cell(140, 8,$camp_nombrerep_value,1);
	$pdf->Ln();
/**************** Campo Direccion ****************/			
    $pdf->SetFont('Arial','B',10);
	$camp_direccion = "Direccion:";
    $camp_direccion_value = $_POST["direccion"];
    $pdf->Cell(50, 8,$camp_direccion,1);
    $pdf->SetFont("Times");
	$pdf->Cell(140, 8,$camp_direccion_value,1);
	$pdf->Ln();
/**************** Campo Emergencia ****************/		
    $pdf->SetFont('Arial','B',10);
	$camp_emergencia = "Emergencia:";
    $camp_emergencia_value = $_POST["emergencia"];
    $pdf->Cell(50, 8,$camp_emergencia,1);
    $pdf->SetFont("Times");
    $pdf->MultiCell(140, 8,$camp_emergencia_value,1);
    $pdf->Ln();
/**************** Campo Grupo sanginio ****************/    
    $pdf->SetFont('Arial','B',10);
	$camp_grusan = "Grupo Sanguineo:";
    $camp_grusan_value = $_POST["grusan"];
    $pdf->Cell(50, 8,$camp_grusan,1);
    $pdf->SetFont("Times");
	$pdf->Cell(140, 8,$camp_grusan_value,1);
	$pdf->Ln();
/**************** Campo VIH ****************/ 	
    $pdf->SetFont('Arial','B',10);
	$camp_vih = "VIH:";
    $camp_vih_value = $_POST["vih"];
    $pdf->Cell(50, 8,$camp_vih,1);
    $pdf->SetFont("Times");
	$pdf->Cell(140, 8,$camp_vih_value,1);
	$pdf->Ln();
/**************** Campo alergias ****************/ 	
    $pdf->SetFont('Arial','B',10);
	$camp_alergico = "Alergias:";
    $camp_alergico_value = $_POST["alergico"];
    $pdf->Cell(50, 8,$camp_alergico,1);
    $pdf->SetFont("Times");
	$pdf->MultiCell(140, 8,$camp_alergico_value,1);
	$pdf->Ln();
/**************** Indicaciones ****************/ 		
    $pdf->SetFont('Arial','B',10);
	$camp_med = "Indicaciones:";
    $camp_med_value = $_POST["medact"];
    $pdf->Cell(50, 8,$camp_med,1);
    $pdf->SetFont("Times");
	$pdf->MultiCell(140, 8,$camp_med_value,1);
	$pdf->Ln();
/**************** Padecimiento Actual ****************/ 		
    $pdf->SetFont('Arial','B',10);
	$camp_enfermedad = "Padecimiento Actual:";
    $camp_enfermedad_value = $_POST["enfermedad"];
    $pdf->Cell(50, 8,$camp_enfermedad,1);
    $pdf->SetFont("Times");
	$pdf->MultiCell(140, 8,$camp_enfermedad_value,1);
	$pdf->Ln();
/**************** Campo Estatus del expediente *********/ 
	$pdf->SetFont('Arial','B',10);
	$camp_est = "Estatus de Expediente:";
	$camp_est_value = $_POST["est"];
	$pdf->Cell(50, 8,$camp_est,1);
	$pdf->SetFont("Times");
	$pdf->Cell(140, 8,$camp_est_value,1);
	$pdf->Ln();
/************* Footer ************************/	
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190, 20,"Constancia que se expide en el Hospital ...., a los  dias del mes de...  de ...",0,0,'C');
    $pdf->Ln();
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190, 30,"Dr. .......",0,0, 'C');
    
    $pdf->Output();
	
	
	
	?>