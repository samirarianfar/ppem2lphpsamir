<?php
function MembreEmploye($id)
{
	//La listes des employés qui ont demandé une formation//
	global $bdd;
	$sql = $bdd->prepare("SELECT count(*) as nombreEmp FROM employe WHERE employe.Id_a_nb=:id");
	$sql->bindValue(':id',$id,PDO::PARAM_INT);
	$sql->execute();
	while($donnee = $sql->fetch())
	{
		return $donnee['nombreEmp'];
	}

}
 //Affiche les cordonnees des employes 
function Employe($id)
{
	global $bdd;
	$req = $bdd->prepare("SELECT IdEmploye,NomEmploye,PrenomEmploye,Email FROM employe WHERE employe.Id_a_nb=:id");
	$req->bindValue(':id',$id,PDO::PARAM_INT);
	$req->execute();
	while($donnee = $req->fetchAll())
	{
		return $donnee;	
	}
}
?>