<?php
function NombreUtilisateur($id)
{
	global $bdd;
	$req = $bdd->prepare("SELECT count(*) as nb FROM employe WHERE employe.Id_a_nb=:id");
	$req->bindValue(':id',$id,PDO::PARAM_INT);
	$req->execute();
	while($data = $req ->fetch())
	{
		return $data['nb'];
	}

}
function Utilisateur($id)
{
	
	global $bdd;
	$req = $bdd->prepare("SELECT IdEmploye,NomEmploye,PrenomEmploye,Email FROM employe WHERE employe.Id_a_nb=:id");
	$req->bindValue(':id',$id,PDO::PARAM_INT);
	$req->execute();
	while($data = $req->fetchAll())
	{
		return $data;	
	}
}
function NombrebDemande($id)
{
	global $bdd;
	$req = $bdd->prepare("select count(*) as nb from inscrire i, formation f,employe e where i.EtatValidation = 'En attente' and i.IdFormation = f.IdFormation and e.IdEmploye = i.IdEmploye and e.Id_a_nb = :id");
	$req->bindValue(':id',$id,PDO::PARAM_INT);
	$req->execute();
	while($data = $req ->fetch())
	{
		return $data['nb'];
	}
}
function Demande($id)
{
	global $bdd;
	$req = $bdd->prepare("select i.EtatValidation,i.IdEmploye,i.IdFormation,f.Libelle,f.ContenuFormation,f.Date_debut,f.NbjoursFormation as durée,f.Idprestataire, e.NomEmploye, e.PrenomEmploye,e.NbJours
from inscrire i, formation f,employe e where i.EtatValidation = 'En attente' and i.IdFormation = f.IdFormation and e.IdEmploye = i.IdEmploye and e.Id_a_nb =:id");
	$req->bindValue(':id',$id,PDO::PARAM_INT);
	$req->execute();
	while($data = $req->fetchAll())
	{
		return $data;	
	}
}

function deleteSalarie($IdEmploye)
{
    global $bdd;
    $req = $bdd->prepare('DELETE FROM inscrire WHERE IdEmploye= :IdEmploye');
    $req->bindParam(':IdEmploye', $IdEmploye);
    $req->execute();
    
    $req = $bdd->prepare('DELETE FROM employe WHERE IdEmploye= :IdEmploye');
    $req->bindParam(':IdEmploye', $IdEmploye);
    $req->execute();
} 

?>