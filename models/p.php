<?php 
/*function getFormation($id)
{
	global $bdd;
	$sql = $bdd->prepare('SELECT * FROM formation f WHERE NOT EXISTS (SELECT * FROM inscrire i WHERE f.IdFormation = i.IdFormation and i.IdEmploye like :id)');
	$sql->bindValue(':id',$id,PDO::PARAM_INT);
	$sql->execute();
	while($donnee = $sql->fetchAll())
	{
		return $donnee;	
	}
}                              
function getinscrireFormation($IdEmploye,$IdFormation)
{
		global $bdd;
		 $EtatValidation = "En attente";
		 $sql = $bdd->prepare('INSERT INTO inscrire(EtatValidation,IdEmploye,IdFormation) VALUES (:EtatValidation,:IdEmploye,:IdFormation)');
		 $sql->bindParam(':EtatValidation', $EtatValidation);
		 $sql->bindParam(':IdEmploye', $IdEmploye);
		 $sql->bindParam(':IdFormation', $IdFormation);
    	 $sql->execute();
}*/

function getFormationA($id)
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

/*function getHistorique($id)
{
	global $bdd;
	$sql = $bdd->prepare("select * from formation f, inscrire i where f.IdFormation = i.IdFormation and i.IdEmploye = :id  and (i.EtatValidation='Validé' or i.EtatValidation ='Refusé')");
	$sql->bindValue(':id',$id,PDO::PARAM_INT);
	$sql->execute();
	while($donnee = $sql->fetchAll())
	{
		return $donne;	
	}
}*/
?>