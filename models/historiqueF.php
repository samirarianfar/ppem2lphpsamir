<?php
/*function getHistorique($id)
{
	global $bdd;
	$sql = $bdd->prepare("select * from formation f, inscrire i where f.IdFormation = i.IdFormation and i.IdEmploye = :id  and (i.EtatValidation='Validé' or i.EtatValidation ='Refusé')");
	$sql->bindValue(':id',$id,PDO::PARAM_INT);
	$sql->execute();
	while($donnee = $sql->fetchAll())
	{
		return $donnee;	
	}
}
?>