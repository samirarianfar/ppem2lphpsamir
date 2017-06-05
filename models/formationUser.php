<?php
function getnbjourformation($IdFormation)
{
    global $bdd;
    $requete = $bdd->prepare('SELECT NbjoursFormation FROM formation WHERE IdFormation = :IdFormation ');
    $requete->bindParam(':IdFormation', $IdFormation);
    $requete->execute();
    while ($donnee = $requete->fetch())
    {
        return $datanbjourformation = $donnee['NbjoursFormation'];
    }
}
function getcreditsformation($IdFormation)
{
    global $bdd;
    $requete = $bdd->prepare('SELECT CreditFormation FROM formation WHERE IdFormation = :IdFormation ');
    $requete->bindParam(':IdFormation', $IdFormation);
    $requete->execute();
    while ($donnee = $requete->fetch())
    {
        return $datacreditsformation = $donnee['CreditFormation'];
    }
}
function getnbjoursalarie($IdEmploye)
{
    global $bdd;
    $requete = $bdd->prepare('SELECT NbJours FROM employe WHERE IdEmploye = :IdEmploye ');
    $requete->bindParam(':IdEmploye', $IdEmploye);
    $requete->execute();
    while ($donnee = $requete->fetch())
    {
        return $datanbjoursalarie = $donnee['NbJours'];
    }
}
function getcreditssalarie($IdEmploye)
{
    global $bdd;
    $requete = $bdd->prepare('SELECT CreditFormation FROM employe WHERE IdEmploye = :IdEmploye');
    $requete->bindParam(':IdEmploye', $IdEmploye);
    $requete->execute();
    while ($donnee = $requete->fetch())
    {
        return $datacreditssalarie = $donnee['CreditFormation'];
    }
}
function getFormationsUser($id)
{
		global $bdd;
       	$reponse = $bdd->prepare('SELECT formation.IdFormation, formation.Date_debut, formation.Date_fin, formation.NbjoursFormation,formation.CreditFormation,employe.IdEmploye, employe.NomEmploye, employe.PrenomEmploye, formation.Libelle,inscrire.EtatValidation, adresse.Id_A, adresse.Rue, adresse.commune, adresse.Code_p, adresse.Numero
			from inscrire,employe, formation, adresse
			where employe.IdEmploye = inscrire.IdEmploye 
			and formation.IdFormation = inscrire.IdFormation 
			and employe.IdEmploye =:id
            and inscrire.EtatValidation = "En attente"
			AND formation.IdFormation = adresse.Id_A');
        $reponse->bindValue(':id', $id,PDO::PARAM_STR);
        $reponse->execute();
        while($donnee = $reponse->fetchAll())
        {
            return $donnee;
        }
}
function valide($IdFormation,$IdEmploye)
{
    global $bdd;

    $req = $bdd->prepare('UPDATE inscrire SET EtatValidation="Validé" where IdFormation= :IdFormation and IdEmploye= :IdEmploye');
    $req->bindParam(':IdEmploye', $IdEmploye);
    $req->bindParam(':IdFormation', $IdFormation);
    $req->execute();
}
function refuse($IdFormation,$IdEmploye)
{
    global $bdd;
    $req = $bdd->prepare('UPDATE inscrire SET EtatValidation="Refusé" where IdFormation= :IdFormation and IdEmploye= :IdEmploye');
    $req->bindParam(':IdEmploye', $IdEmploye);
    $req->bindParam(':IdFormation', $IdFormation);
    $req->execute();
}
function usenbjourcredits($nbjourformation,$creditsformation,$IdFormation)
{
    global $bdd;

    $req1 = $bdd->prepare("UPDATE employe SET NbJours = NbJours - '$nbjourformation', CreditFormation = CreditFormation - '$creditsformation' WHERE IdEmploye = :IdEmploye");
    $req1->bindParam(':IdFormation', $IdFormation);
    $req1->execute();
}
function updateProfilCredits($IdEmploye,$CreditFormation)
{
    global $bdd;
    $req = $bdd->prepare('UPDATE employe SET CreditFormation = :CreditFormation WHERE IdEmploye = :IdEmploye');
    $req->bindParam(':IdEmploye', $IdEmploye);
    $req->bindParam(':CreditFormation', $CreditFormation);
    $req->execute();
}
?>