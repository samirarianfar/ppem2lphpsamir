<?php

function getPresta()
{
    global $bdd;       
    $req = $bdd->query("SELECT IdPrestataire,NomPrestataire, Id_A FROM prestataire");
    while ($donnee = $req->fetchAll())
    {
        return $donnee;
    }
}

function  AjouterPresta()
{
    global $bdd;
        
    $sql = "INSERT INTO adresse (Numero, Rue, commune, Code_p) VALUES (:Numero,:Rue,:commune,:Code_p)";
        $req = $bdd->prepare($sql);
        $req->bindParam(':Numero', $_POST['Numero']);
        $req->bindParam(':Rue', $_POST['Rue']);
        $req->bindParam(':commune', $_POST['commune']);
        $req->bindParam(':Code_p', $_POST['Code_p']);
        $req->execute();
        $Id_A = $bdd->lastInsertId();
    
		$sql = "INSERT INTO prestataire (NomPrestataire,Id_A) VALUES (:NomPrestataire, :Id_A)";
		$req = $bdd->prepare($sql);
		$req->bindParam(':NomPrestataire', $_POST['NomPrestataire']);
		$req->bindParam(':Id_A', $Id_A);
		$req->execute();

}


