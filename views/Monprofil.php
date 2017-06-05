<?php
require "Models/Monprofil.php";

$IdEmploye = $_SESSION['auth']['IdEmploye'];
$chefequipe = getChefEquipe($IdEmploye);
$IdEmploye = $_SESSION['auth']['IdEmploye'];

$employe = getInfoUser($IdEmploye);

if(isset($_POST['submit']))
{
    $NomEmploye = $_POST['NomEmploye'];
    $PrenomEmploye = $_POST['PrenomEmploye'];
    $LoginEmploye = $_POST['LoginEmploye'];
    $MdpEmploye = sha1($_POST['MdpEmploye']);
    $MdpCon = sha1($_POST['MdpCon']);

    if(isset($NomEmploye) AND !empty($NomEmploye) AND $NomEmploye != $employe['NomEmploye'])
    {
        updateProfilNom($IdEmploye,$NomEmploye);
        header("Location:".BASE_URL."/Monprofil");
    }
    if(isset($PrenomEmploye) AND !empty($PrenomEmploye) AND $PrenomEmploye != $employe['PrenomEmploye'])
    {
        updateProfilPrenom($IdEmploye,$PrenomEmploye);
        header("Location:".BASE_URL."/Monprofil");
        echo "";
    }
    if(isset($LoginEmploye) AND !empty($LoginEmploye) AND $LoginEmploye != $employe['LoginEmploye'])
    {
        updateProfilMail($IdEmploye,$LoginEmploye);
        header("Location:".BASE_URL."/Monprofil");
    }
    if(isset($MdpEmploye) AND !empty($MdpEmploye))
    {
        if($MdpEmploye == $MdpCon)
        {
            updateProfilPassword($IdEmploye,$MdpEmploye);
            header("Location:".BASE_URL."/Monprofil");
        }
        else
        {
            echo "";
        }
    }
    if($employe['rang_salarie']== 1)
    {
        $CreditFormation = $_POST['CreditFormation'];
        $NbJours = $_POST['NbJours'];
        if(isset($NbjoursFormation) AND !empty($NbjoursFormation))
        {
            updateProfilNbjour($IdEmploye,$NbjoursFormation);
            header("Location:".BASE_URL."/Monprofil");
        }
        if(isset($CreditFormation) AND !empty($CreditFormation))
        {
            updateProfilCredits($IdEmploye,$CreditFormation);
            header("Location:".BASE_URL."/Monprofil");
        }
    }
}
require "Views/Monprofil.php";
?>