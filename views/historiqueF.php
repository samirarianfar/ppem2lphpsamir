<?php 

    if($_SESSION['auth']['rang_salarie'] == 3)
    {
        require "Models/dispoF.php"; 
		include 'Core/tabsFormations.class.php';
		
        $_GET['p'] = 'historiqueF';
        $IdEmploye = $_SESSION['auth']['IdEmploye'];
		$FormHisto = getHisto($IdEmploye);

        if(isset($_POST['Choisir']))
        {
            $IdFormation = $_POST['idForm'];
			
            header("Location:".BASE_URL."/historiqueF");   
        }

        require "Views/historiqueF.php";

    }
?>