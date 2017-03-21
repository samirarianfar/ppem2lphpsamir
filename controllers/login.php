<?php
session_start();
include_once "../models/Formation.php";
$erreur=null;

	
if (!empty($_POST['LoginEmploye']) && (!empty($_POST['MdpEmploye']))) 

{	$mdp =($_POST['MdpEmploye']);
	if (RechercheUser ($_POST ['LoginEmploye'], $mdp ))
	{
		$_SESSION['LoginEmploye']= $_POST['LoginEmploye'];
		header('location: InscritFormation.php');
	}
	else
	{
		$erreur .= '<img src="img/icone_erreur.png"/>'." ".'Le pseudo ou le mot de passe sont incorrects';
	}
}
elseif (!empty($_POST))
{
	$erreur .= '<img src="img/icone_erreur.png"/>'." ".'Veuillez remplir tout les champs' ;
}

