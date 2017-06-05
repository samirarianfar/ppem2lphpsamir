<?php
if(isset($_SESSION))
{
require 'Models/fiche.php';

$IdFormation = $_POST['idForm'];
$fiche = getFiche($IdFormation);


require 'Views/fiche.php';
}
else
{
   header("Location:".BASE_URL."/disconnect");
}