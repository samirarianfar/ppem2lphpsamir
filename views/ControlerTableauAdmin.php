<?php 

 include_once "../models/Formation.php";
 include_once "../models/EFormation.php";
session_start(); 
   if(!empty($_POST['Accepter']))
	{	
		$IdEmploye=$_GET['IdEmploye'];
    	$IdFormation=$_GET['IdFormation'];
		ValidFormation();
		echo 'Formation validé';
		header("Location:DemandeFormation.php");
	}
	if (isset($_POST['Refuse']))
	{	include_once "../models/EFormation.php";
		Refuser($IdEmploye,$IdFormation);
		header("Location:DemandeFormation.php");
	}
?>

