<?php
include_once "../models/base.php";
function RechercheUserAmin($Identifiant, $password ) {
	$base = initBase ();
	$sql = $base->prepare ( 'SELECT * FROM salarie WHERE Identifiant = ? And password = ? ' );
	$sql->execute ( array (
			$Identifiant,
			$password  ));
	
	if ($sql->rowCount() > 0) 
	{
		$donne = $sql->fetch();
		$_SESSION['idsalarie']= $donne ['idsalarie'];
		$_SESSION ['prenom'] = $donne ['prenom'];
		$_SESSION ['nom'] = $donne ['nom'];
		$_SESSION ['Identifiant'] = $donne ['Identifiant'];
		$_SESSION ['capital_formation'] = $donne ['capital_formation'];
		$_SESSION ['nb_jour'] = $donne ['nb_jour'];
	}
}
?>