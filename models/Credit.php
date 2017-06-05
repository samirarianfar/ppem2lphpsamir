<?php
function getnbjourformation($IdFormation)
{
    global $bdd;
    $req= $bdd->prepare('SELECT NbjoursFormation FROM formation where IdFormation = :IdFormation ');
    $req->bindParam(':IdFormation', $IdFormation);
    $req->execute();
    while ($donnee = $req->fetch())
    {
        return $donnee['NbjoursFormation'];
    }
}
function getcreditsformation($IdFormation)
{
    global $bdd;
    $req = $bdd->prepare('SELECT CreditFormation from formation WHERE IdFormation = :IdFormation ');
    $req->bindParam(':IdFormation', $IdFormation);
    $req->execute();
    while ($donnee = $req->fetch())
    {
        return $donnee['CreditFormation'];
    }
}
function getnbjoursalarie($IdEmploye)
{
    global $bdd;
    $req = $bdd->prepare('SELECT NbJours FROM employe WHERE IdEmploye = :IdEmploye ');
    $req->bindParam(':IdEmploye', $IdEmploye);
    $req->execute();
    while ($donnee = $req->fetch())
    {
        return $donnee['NbJours'];
    }
}
function getcreditssalarie($IdEmploye)
{
    global $bdd;
    $req = $bdd->prepare('SELECT CreditFormation FROM salarie WHERE IdEmploye = :IdEmploye');
    $req->bindParam(':IdEmploye', $IdEmploye);
    $req->execute();
    while ($donnee = $req->fetch())
    {
        return $donnee['CreditFormation'];
    }
}
?>