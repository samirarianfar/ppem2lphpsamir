<?php
session_start();
include_once "../models/AdminC.php";
$erreur=null;

	
if (!empty($_POST['Idenfitiant']) && (!empty($_POST['Idenfitiant']))) 

{	$mdp =($_POST['$password']);
	if (RechercheUserAmin($_POST ['Idenfitiant'], $mdp ))
	{
		$_SESSION['Idenfitiant']= $_POST['Idenfitiant'];
		header('location: menu.php');
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

