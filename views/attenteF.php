<?php 

    if($_SESSION['auth']['rang_salarie'] == 3)
    {
        require "Models/dispoF.php";
		include 'Core/tabsFormations.class.php';
        $_GET['p'] = 'attenteF';
        $IdEmploye = $_SESSION['auth']['IdEmploye'];
         $FormAtt = getFormAtt($IdEmploye);

        if(isset($_POST['Choisir']))
        {
            $IdFormation = $_POST['idForm'];
            header("Location:".BASE_URL."/attenteF");   
        }

        require "Views/attenteF.php";

    }
?>