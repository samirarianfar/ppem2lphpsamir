<?php
	
	include_once "../models/base.php";
	$IdFormation=$_GET['IdFormation'];
	$IdEmploye=$_GET['IdEmploye'];
	$base = initBase ();

	$ps=$base->prepare('update inscrire set EtatValidation= \'Valider\' where Formation_IdFormation = ? and Employe_IdEmploye=?');
	$params=array($IdFormation,$IdEmploye);
	$ps->execute($params);
	
	header("Location:DemandeFormation.php");
?>