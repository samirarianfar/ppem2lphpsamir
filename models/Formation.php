<?php

include_once "Base.php";
// function RechercheId($id) {
	// $base = initBase();
	// $sql = $base->prepare('Select * from employe where idEmploye= :id');
	// $sql->bindValue(":id", $id, PDO::PARAM_INT);
	// if ($sql->execute())
	// {
		// return $sql->fetch();
	// }
	// else
	// {
		// return $erreur="erreur";
	// }
// }

function RechercheUser($LoginEmploye, $MdpEmploye ) {
	$base = initBase ();
	$sql = $base->prepare ( 'SELECT * FROM EMPLOYE WHERE LoginEmploye = ? And MdpEmploye = ? ' );
	$sql->execute ( array (
			$LoginEmploye,
			$MdpEmploye  ));
	
	if ($sql->rowCount() > 0) 
	{
		$donne = $sql->fetch();
		$_SESSION['auth'] = true;
		$_SESSION['id']= $donne ['IdEmploye'];
		$_SESSION ['prenom'] = $donne ['PrenomEmploye'];
		$_SESSION ['nom'] = $donne ['NomEmploye'];
		$_SESSION ['login'] = $donne ['LoginEmploye'];
		$_SESSION ['credit'] = $donne ['CreditFormation'];
		$_SESSION ['nbjour'] = $donne ['NbJours'];
		$_SESSION ['idequipe'] = $donne ['EQUIPE_IdEquipe'];
		if ($donne ['rang_salarie'] == 1) 
		{
			$_SESSION ['chef'] = true;
		} 
		Else
			If($donne ['rang_salarie'] == 2) 
		{
			$_SESSION ['admin'] = true;
		}
		else{
			$_SESSION ['chef'] = false;
		}
	return true;
	}
	else 
	{
		return true;
	}

}

function RechercheChefEquipe($idEquipe)
{
	$base = initBase ();
	$sql = $base->prepare ( 'select distinct (NomChefEquipe) from employe, equipeweb where employe.EQUIPE_IdEquipe=equipeweb.IdEquipe and IdEquipe = ? ' );
	$sql->execute ( array (
			$_SESSION ['idequipe']));
	if ($sql->rowCount() > 0)
	{
	$donne = $sql->fetch();
	$_SESSION['nomchef'] = $donne ['NomChefEquipe'];
	return true;
	}
	else
	{
		return false;
	}
}
function RechercheEmpChef($idEquipe)
{
	$base = initBase ();
	$sql = $base->prepare ( 'select IdEmploye, NomEmploye, PrenomEmploye, IdFormation, ContenuFormation, EtatValidation from employe, equipeweb, formation, inscrire where employe.EQUIPE_IdEquipe=equipeweb.IdEquipe and formation.IdFormation=inscrire.Formation_IdFormation and inscrire.EMPLOYE_IdEmploye=employe.IdEmploye and IdEquipe = ? and employe.IdEmploye in (select EMPLOYE_IdEmploye from inscrire)and EtatValidation=\'En cours de validation\'' );
	$sql->execute ( array (
			$_SESSION ['idequipe']
	) );
	
	if ($sql->execute()=== false)
	{
		return $erreur="erreur";
	}

	else
	{
		return $sql->fetchAll(PDO::FETCH_OBJ);
	}
}
?>