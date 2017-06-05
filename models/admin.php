<?php
function LChef()
{
    global $bdd;
    $req = $bdd->query('select * from employe where rang_salarie =2');
            while ($donnee = $req->fetchAll()){
                
                return $donnee;
        }
}
function LUtilisateur()
{
    global $bdd;
    $req = $bdd->query('select * from employe where rang_salarie =3');
            while ($donnee = $req->fetchAll()){
                
                return $donnee;
        }
}
function NombreAdmin($type)
    {
        global $bdd;
        $sql = ('SELECT count(*) as nb FROM employe WHERE rang_salarie= :type');
        $rep = $bdd->prepare('SELECT count(*) as nb FROM employe WHERE rang_salarie3= :type');
        $rep->bindParam(':type', $type, PDO::PARAM_INT);
        $rep->execute();
        while ($donnee = $rep->fetch()){
            return $donnee['nb'];
        }
    }

function getList($type)
{
        
        global $bdd;
        $sql = ('SELECT * FROM employe WHERE rang_salarie= :type');
        $rep = $bdd->prepare('SELECT count(*) as nb FROM employe WHERE rang_salarie= :type');
        $rep->bindParam(':type', $type, PDO::PARAM_INT);
        $rep->execute();
        while ($donnee = $rep->fetchAll()){
            return $donnee;
        }
}
function LAdmin()
{
    global $bdd;
    $req = $bdd->query('select * from employe where rang_salarie =1');
            while ($donnee = $req->fetchAll()){
                
                return $donnee;
        }
}


function LPrestataire()
{
    global $bdd;
    $req = $bdd->query('select * 
		from prestataire adresse '
		);
            while ($donnee = $req->fetchAll()){
                
                return $donnee;
        }
}

 function LFormation()
{
     global $bdd;
      $req = $bdd->query('select * from formation where CURRENT_DATE() > Date_fin;');
         while ($donnee = $req->fetchAll()){
                
            return $donnee;
      }
 }
 function NombreForm()
    {
        global $bdd;
       	$req = $bdd->query('SELECT count(*) as nbForm FROM formation');
		while ($donnee = $req->fetch()){
			return $donnee['nbForm'];
		}
    }

function NombrePrestataire()
{
    global $bdd;
    $req = $bdd->query('SELECT count(*) as nbPresta FROM prestataire');
    while ($donnee = $req->fetch()){
        return $donnee['nbPresta'];
    }
}

?>