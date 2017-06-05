<?php
/*function getFormationA($id)
{
    global $bdd;
	$sql = $bdd->prepare("select * from formation f, inscrire i where f.IdFormation = i.IdFormation and i.IdEmploye = :id and i.EtatValidation='En attente'");
	$sql->bindValue(':id',$id,PDO::PARAM_INT);
	$sql->execute();
	while($donne = $sql->fetchAll())
	{
		return $donne;	
	}
}
?>