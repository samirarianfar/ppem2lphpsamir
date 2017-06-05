<?php
function getChefEquipe($IdEmploye)
{
    global $bdd;
    $req = $bdd->prepare("SELECT NomEmploye,PrenomEmploye,LoginEmploye from employe WHERE IdEmploye = :IdEmploye");
	$req->bindValue(':IdEmploye',$IdEmploye,PDO::PARAM_INT);
    $req->execute();
    while($donnee = $req->fetch())
    {
        $getchefequipe = $donnee['NomEmploye'].' '.$donnee['PrenomEmploye'];
        return $getchefequipe;
    }
}

function getInfoUser($IdEmploye)
{
    global $bdd;
    $req= $bdd->prepare("SELECT * from employe WHERE IdEmploye = :IdEmploye");
    $req->bindValue(':IdEmploye',$IdEmploye);
    $req->execute();
    while ($donnee = $req->fetch())
    {
        return $donnee;
    }
}
function updateProfilNom($IdEmploye,$NomEmploye)
{
    global $bdd;
    $req = $bdd->prepare('UPDATE employe SET NomEmploye = :NomEmploye WHERE IdEmploye = :IdEmploye');
    $req->bindParam(':IdEmploye', $IdEmploye);
    $req->bindParam(':NomEmploye', $NomEmploye);
    $req->execute();
}
function updateProfilPrenom($IdEmploye,$PrenomEmploye)
{
    global $bdd;
    $req = $bdd->prepare('UPDATE employe SET PrenomEmploye = :PrenomEmploye WHERE IdEmploye = :IdEmploye');
    $req->bindParam(':IdEmploye', $IdEmploye);
    $req->bindParam(':PrenomEmploye', $PrenomEmploye);
    $req->execute();
}
function updateProfilMail($IdEmploye,$LoginEmploye)
{
    global $bdd;
    $req = $bdd->prepare('UPDATE employe SET LoginEmploye = :LoginEmploye where IdEmploye = :IdEmploye');
    $req->bindParam(':IdEmploye', $IdEmploye);
    $req->bindParam(':LoginEmploye', $LoginEmploye);
    $req->execute();
}
function updateProfilPassword($IdEmploye,$MdpEmploye)
{
    global $bdd;
    $req = $bdd->prepare('UPDATE employe SET MdpEmploye = :MdpEmploye where IdEmploye = :IdEmploye');
    $req->bindParam(':IdEmploye', $IdEmploye);
    $req->bindParam(':MdpEmploye', $MdpEmploye);
    $req->execute();
}
function updateProfilNbjour($IdEmploye,$NbJours)
{
    global $bdd;
    $req = $bdd->prepare('UPDATE employe SET NbJours = :NbJours where IdEmploye = :IdEmploye');
    $req->bindParam(':IdEmploye', $IdEmploye);
    $req->bindParam(':NbJours', $NbJours);
    $req->execute();
}
