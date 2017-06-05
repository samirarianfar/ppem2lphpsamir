<?php
if($_SESSION['auth']['rang_salarie']== 1)
{
    require "Models/admin.php";
    require 'Core/statsAdmin.class.php';
	$nbAdmin = NombreAdmin(1);
    $nbChef = NombreAdmin(2);
    $nbUser = NombreAdmin(3);
    $nbForm = NombreForm();
    $nbPresta =NombrePrestataire();
    $LAdministrateur = LAdmin();
    $LChef = LChef();
    $listUtilisateur = LUtilisateur();
    $LFormation = LFormation();
    $listP = LPrestataire();
    require "Views/admin.php";
}
else
{
     header("Location:".BASE_URL."/disconnect");
}
