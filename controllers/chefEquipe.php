<?php
if($_SESSION['auth']['rang_salarie']== 2)
{
   
	
    include 'Core/tabsFormations.class.php';
    require "Models/chefEquipe.php";
    require "Models/dispoF.php";

    $IdEmploye= $_SESSION['auth']['IdEmploye'];
	$nbUtilisateur = NombreUtilisateur($IdEmploye);
	$Utilisateur = Utilisateur($IdEmploye);
    $Form = getForm($IdEmploye);
    $FormAtt = getFormAtt($IdEmploye);
    $FormHisto = getHisto($IdEmploye);
    $nombreDemande = NombrebDemande($IdEmploye);
    $Demande = Demande($IdEmploye);

        if(isset($_POST['Suivre']))
        {
            $IdFormation = $_POST['idForm'];
            suivreForm($IdEmploye,$IdFormation);
            header("Location:".BASE_URL."/chefEquipe");   
        }
    
        if(isset($_POST['Supprimer']))
        {
            $IdEmploye = $_POST['idUser'];
            deleteSalarie($IdEmploye);
            header("Location:".BASE_URL."/chefEquipe");
        }


    require "Views/chefEquipe.php";
}
else
{
     header("Location:".BASE_URL."/disconnect");
}
?>