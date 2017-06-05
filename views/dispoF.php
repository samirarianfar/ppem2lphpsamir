<?php 
if($_SESSION['auth']['rang_salarie'] == 3)
{
    require "Models/dispoF.php";
	include 'Core/tabsFormations.class.php';
   
     

    $_GET['p'] = 'dispoF';
    $IdEmploye = $_SESSION['auth']['IdEmploye'];

    $Form = getForm($IdEmploye);
    $FormAtt = getFormAtt($IdEmploye);
    $FormHisto = getHisto($IdEmploye);

    if(isset($_POST['Suivre']))
    {
        $IdFormation = $_POST['idForm'];

        suivreForm($IdEmploye,$IdFormation);

        header("Location:".BASE_URL."/dispoF");
    }
    /*if(isset($_POST['Export']))
    {
        
        var_dump($id_f);
    }
    */
    require "Views/dispoF.php";
}
else
{
   header("Location:".BASE_URL."/disconnect");
}

?>