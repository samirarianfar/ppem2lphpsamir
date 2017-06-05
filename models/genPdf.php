<?php
function getGenererPdf($IdEmploye)
{
    global $bdd;
    $req = $bdd->prepare('SELECT f.Libelle,f.ContenuFormation,f.Date_debut,
    	f.Date_fin,f.NbjoursFormation,f.CreditFormation,a.Numero ,a.Rue,a.Code_p,a.commune
    
	FROM formation f, adresse a, employe i
	WHERE i.IdEmploye = :IdEmploye and  f.Id_A = a.Id_A ');
    $req->bindParam(':IdEmploye',$IdEmploye);
	
    $req->execute();
    while ($donnee = $req->fetchAll())
    {
        return $donnee;
    }
}
?>