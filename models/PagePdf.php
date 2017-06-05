<?php
function PagePdf($IdFormation)
{
    global $bdd;
    $req = $bdd->prepare('SELECT f.Date_debut,f.ContenuFormation, f.Date_fin, f.Libelle, f.NbjoursFormation, f.CreditFormation, a.Rue, a.commune, a.Code_p, a.Numero
	FROM formation f, adresse a
	WHERE f.Id_A = a.Id_A
	AND IdFormation =:IdFormation');
    $req->bindParam(':IdFormation', $IdFormation);
    $req->execute();
    while ($donnee = $req->fetchAll())
    {
        return $donnee;
    }
}
?>