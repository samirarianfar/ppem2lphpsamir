<?php
    function AjouterMembre()
    {
        global $bdd;
        
        $sql = "INSERT INTO adresse (Numero, Rue, commune, Code_p) VALUES (:Numero,:Rue,:commune,:Code_p)";
        $req = $bdd->prepare($sql);
        $req->bindParam(':Numero', $_POST['Numero']);
        $req->bindParam('Rue', $_POST['Rue']);
        $req->bindParam(':commune', $_POST['commune']);
        $req->bindParam(':Code_p', $_POST['Code_p']);
        $req->execute();
        $cripte = sha1($_POST['MdpEmploye']);
        $Id_A = $bdd->lastInsertId();
        $sql = "INSERT INTO employe (NomEmploye, PrenomEmploye,CreditFormation,LoginEmploye ,MdpEmploye,Email, NbJours, rang_salarie, Id_A,Id_a_nb) VALUES (:NomEmploye,:PrenomEmploye,:CreditFormation,:LoginEmploye,:MdpEmploye,:Email,:NbJours,:rang_salarie, :Id_A,:Id_a_nb)";
        $req = $bdd->prepare($sql);
        $req->bindParam(':NomEmploye', $_POST['NomEmploye']);
        $req->bindParam(':PrenomEmploye', $_POST['PrenomEmploye']);
		$req->bindParam(':CreditFormation', $_POST['CreditFormation']);
	    $req->bindParam(':LoginEmploye', $_POST['LoginEmploye']);
	    $req->bindParam(':Email', $_POST['Email']);
        $req->bindParam(':MdpEmploye', $cripte);
        $req->bindParam(':NbJours', $_POST['NbJours']);
        $req->bindParam(':rang_salarie', $_POST['rang_salarie']);
        $req->bindParam(':Id_A', $Id_a_nb);
        $req->bindParam(':Id_a_nb', $_SESSION['auth']['IdEmploye']);
        $req->execute();
        $IdEmploye = $bdd->lastInsertId();
        
        
    }

    function AtoutermembreChef()
    {
        global $bdd;
        
        $sql = "INSERT INTO adresse (Numero, Rue, commune, Code_P) VALUES (:Numero,:Rue,:commune,:Code_p)";
        $req = $bdd->prepare($sql);
        $req->bindParam(':Numero', $_POST['Numero']);
        $req->bindParam(':Rue', $_POST['Rue']);
        $req->bindParam(':commune', $_POST['commune']);
        $req->bindParam(':Code_p', $_POST['Code_p']);
        $req->execute();
        //$rang_salarie = 3;
        $MdpEmploye=sha1($_POST['MdpEmploye']);
        $Id_A = $bdd->lastInsertId();
        $sql = "INSERT INTO employe (NomEmploye, PrenomEmploye,LoginEmploye,CreditFormation, Email,MdpEmploye, NbJours, rang_salarie,Id_A,Id_a_nb) VALUES (:NomEmploye,:PrenomEmploye,:LoginEmploye,:CreditFormation,:Email,:MdpEmploye,:NbJours,:rang_salarie, :Id_A,:Id_a_nb)";
        $req = $bdd->prepare($sql);
        $req->bindParam(':NomEmploye', $_POST['NomEmploye']);
        $req->bindParam(':PrenomEmploye', $_POST['PrenomEmploye']);
		$req->bindParam(':LoginEmploye', $_POST['LoginEmploye']);
        $req->bindParam(':CreditFormation', $_POST['CreditFormation']);
		$req->bindParam(':Email', $_POST['Email']);
        $req->bindParam(':MdpEmploye',$MdpEmploye);
        $req->bindParam(':NbJours', $_POST['NbJours']);
        $req->bindParam(':rang_salarie', $_POST['rang_salarie']);
        $req->bindParam(':Id_A', $Id_A);
        $req->bindParam(':Id_a_nb',$_SESSION['auth']['IdEmploye']);
        $req->execute();
        
        $IdEmploye = $bdd->lastInsertId();
        
    }