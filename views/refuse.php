<?php
	
	
	include_once "../models/base.php";
	
	$IdEmploye=$_GET['IdEmploye'];
	$IdFormation=$_GET['IdFormation'];
	$base = initBase ();

	$ps=$base->prepare('update inscrire set EtatValidation= "Refuser" where Formation_IdFormation = ? and Employe_IdEmploye=?');
	$params=array($IdEmploye,$IdFormation);
	$ps->execute($params);
	
	header("Location:DemandeFormation.php");
?>