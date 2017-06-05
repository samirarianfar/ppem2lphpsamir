<?php
if($_SESSION['auth']['rang_salarie']== 2)
{
    
    require "Models/monEquipe.php";
    

    $IdEmploye= $_SESSION['auth']['IdEmploye'];
	$nombreEmploye = MembreEmploye($IdEmploye);
	$employe = Employe($IdEmploye);
   
        //if(isset($_POST['Choisir']))
        //{//
           // $IdFormation = $_POST['idForm'];
            //inscrireFormation($IdEmploye,$IdFormation);
            //header("Location:".BASE_URL."/chefEquipe");   
        //}//

    require "Views/monEquipe.php";
}
else
{
     header("Location:".BASE_URL."/disconnect");
}