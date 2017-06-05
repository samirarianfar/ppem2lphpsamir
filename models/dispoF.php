<?php
function getForm($id)
{
	global $bdd;
	$req = $bdd->prepare('SELECT * FROM formation f,adresse a WHERE NOT EXISTS (SELECT * FROM inscrire i WHERE f.IdFormation = i.IdFormation and i.IdEmploye like :id)
AND f.Id_A = a.Id_A;)');
	$req->bindValue(':id',$id,PDO::PARAM_INT);
	$req->execute();
	while($data = $req->fetchAll())
	{
		return $data;	
	}
}                              

function suivreForm($IdEmploye,$IdFormation)
{
		global $bdd;
        $EtatValidation = "En attente";
        $req = $bdd->prepare('INSERT INTO inscrire(EtatValidation,IdEmploye,IdFormation) VALUES (:EtatValidation,:IdEmploye,:IdFormation)');
        $req->bindParam(':EtatValidation', $EtatValidation);
        $req->bindParam(':IdEmploye', $IdEmploye);
        $req->bindParam(':IdFormation', $IdFormation);
        $req->execute();
}

function getFormAtt($id)
{
    global $bdd;
	$req = $bdd->prepare("select * from formation f, adresse a, inscrire i where f.IdFormation = i.IdFormation and i.IdEmploye = :id and i.EtatValidation='En attente' AND f.Id_A = a.Id_A");
	$req->bindValue(':id',$id,PDO::PARAM_INT);
	$req->execute();
	while($data = $req->fetchAll())
	{
		return $data;	
	}
}

function getHisto($id)
{
	global $bdd;
	$req = $bdd->prepare("select * from formation f, adresse a, inscrire i where f.IdFormation = i.IdFormation and i.IdEmploye = :id  and (i.EtatValidation='Validé' or i.EtatValidation ='Refusé')  AND f.Id_A = a.Id_A");
	$req->bindValue(':id',$id,PDO::PARAM_INT);
	$req->execute();
	while($data = $req->fetchAll())
	{
		return $data;	
	}
}

?>