<?php 
     
if(isset($_SESSION))
{
require 'Models/genPdf.php';
$IdEmploye= $_SESSION['auth']['IdEmploye'];
//$IdFormation = $_POST['IdFormation'];
$Gpdf = getGenererPdf($IdEmploye);

require 'Views/genPdf.php';
}
else
{
   header("Location:".BASE_URL."/disconnect");
}
?>