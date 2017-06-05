<?php
function AjouterFormation()
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
	$Idprestataire= $bdd->lastInsertId();

    $sql = "INSERT INTO formation (Libelle, ContenuFormation,Date_debut,Date_fin, NbjoursFormation,Idprestataire,Id_A) VALUES (:Libelle,:ContenuFormation, :Date_debut, :Date_fin,:NbjoursFormation,:Idprestataire,:Id_A)";
    $req = $bdd->prepare($sql);
    $req->bindParam(':Libelle', $_POST['Libelle']);
    $req->bindParam(':ContenuFormation',$_POST['ContenuFormation']);
    $req->bindParam(':Date_debut', $_POST['Date_debut']);
    $req->bindParam(':Date_fin', $_POST['Date_fin']);
    $req->bindParam(':NbjoursFormation', $_POST['NbjoursFormation']);
    $req->bindParam(':Idprestataire',$Idprestataire);
    $req->bindParam(':Id_A', $Id_A);
    $req->execute();
}
function Presta()
{
    global $bdd;
    $reponse = $bdd->query('SELECT idprestataire,NomPrestataire FROM prestataire');
    while ($data = $reponse->fetchAll())
    {
        return $data;
    }
}
?>