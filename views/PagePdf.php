<?php
if(isset($_SESSION))
{
require 'Models/fiche.php';

$IdFormation = $_POST['idForm'];
$Pdf = PagePdf($IdFormation);


require 'Views/PagePdf.php';
}
else
{
   header("Location:".BASE_URL."/disconnect");
}