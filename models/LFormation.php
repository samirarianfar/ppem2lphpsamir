<?php
include_once "Base.php";
function RFormationUsers($id)
{
	//Connexion à la base
	$base = initBase ();
	
	$sql=$base->prepare ('SELECT IdEmploye, IdFormation, ContenuFormation, DateFormation, DureeFormation, LieuFormation, EtatValidation from employe join inscrire on employe.IdEmploye=inscrire.Employe_IdEmploye
			join formation on inscrire.Formation_IdFormation=formation.IdFormation 
			where LoginEmploye= ?  and EtatValidation = "Valider" and DateFormation >= ? order by DateFormation desc ');
	$sql->execute(array ( 
			$_SESSION['LoginEmploye'],
			date ( "Y-m-d" )
			
	));

	if ($sql->execute()=== false)
	{
		return $erreur="erreur";
	}
	else {
	
		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
	
}
function RechercheFormations($idE)
{
	//Connexion à la base
	$base = initBase ();
	$sql=$base->prepare ('SELECT IdFormation, formation.ContenuFormation, formation.DateFormation, formation.DureeFormation, formation.LieuFormation, formation.CreditFormation, formation.NbjoursFormation, prestataire.NomPrestataire from formation join prestataire on formation.IdPrestataire=prestataire.Idprestataire where 
				IdFormation NOT IN (select Formation_IdFormation from inscrire, employe where inscrire.Employe_IdEmploye=employe.IdEmploye and LoginEmploye = ? )  and DateFormation >=  ? ');
	$sql->execute(array ( 
			$_SESSION['LoginEmploye'],
			date ( "Y-m-d" )
	));
	if ($sql->execute()=== false)
	{
		return $erreur="erreur";
	}
	else 
	{
		return $sql->fetchAll(PDO::FETCH_OBJ);		
	}

}
function HistoriqueF($id )
{
	$base = initBase ();	
	$sql = $base->prepare ('SELECT IdEmploye, IdFormation, ContenuFormation, DateFormation, DureeFormation, LieuFormation from employe join inscrire on employe.IdEmploye=inscrire.EMPLOYE_IdEmploye
			join formation on inscrire.FORMATION_IdFormation=formation.IdFormation
			where LoginEmploye= ? and DateFormation < ? order by DateFormation desc ');
	$sql->execute ( array (
			$id,
			date ( "Y-m-d" ) 
	));
	if ($sql->execute()=== false)
	{
		return $erreur="erreur";
	}
	else {
	
		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
	
}
function RFormationAttente($id)
{
	//Connexion à la base
	$base = initBase ();
	
	$sql=$base->prepare ('SELECT IdEmploye, IdFormation, ContenuFormation, DateFormation, DureeFormation, LieuFormation, EtatValidation from employe join inscrire on employe.IdEmploye=inscrire.Employe_IdEmploye
			join formation on inscrire.Formation_IdFormation=formation.IdFormation 
			where LoginEmploye= ?  and EtatValidation = \'En cours de validation\' order by DateFormation desc');
	$sql->execute(array ( 
			$_SESSION['LoginEmploye'],
			
			
	));

	if ($sql->execute()=== false)
	{
		return $erreur="erreur";
	}
	else {
	
		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
	
}
// ce req permet de reserver une formation 

function RFormationAttenteA()
{
	//Connexion à la base
	$base = initBase ();
   
	$sql = $base->prepare ('SELECT IdEmploye, IdFormation, ContenuFormation, DateFormation, DureeFormation, LieuFormation, EtatValidation from employe join inscrire on employe.IdEmploye=inscrire.Employe_IdEmploye
			join formation on inscrire.Formation_IdFormation=formation.IdFormation
			where  employe.IdEmploye=inscrire.Employe_IdEmploye  and EtatValidation = \'En cours de validation\' order by DateFormation desc ');
	
	
	if ($sql->execute()=== false)
	{
		return $erreur="erreur";
	}

	else {

		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}

}