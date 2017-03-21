<?php
	include_once "../models/EFormation.php";


if (isset ( $_POST ['valider'] )) 
{
	extract($_POST);
		{
			ValidFormation( $_SESSION ['id'], $_POST ['idform1'] );
			ValidFormation(RechercheChefEquipe($equipe), $_POST ['idform1'] );
			echo 'Formation validé';
		}
}
	include_once "../views/DemandeFormation.php";
?>