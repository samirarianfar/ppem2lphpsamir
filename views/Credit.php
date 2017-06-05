<?php	
  if($_SESSION['auth']['rang_salarie'] == 3)
    {	
		require "Models/Credit.php";
		$_GET['p'] = 'Credit';
		$IdFormation= $_SESSION['auth']['IdFormation'];
		$IdEmploye= $_SESSION['auth']['IdEmploye'];
        $nbjourformation = getnbjourformation($IdFormation);
        $creditsformation = getcreditsformation($IdFormation);
        $nbjoursalarie = getnbjoursalarie($IdEmploye);
        $creditssalarie = getcreditssalarie($IdEmploye);
		
        if (($nbjoursalarie >= $nbjourformation) && ($creditssalarie >= $creditsformation))
        {
           
           
            require("views/Credit.php");
        }
        else
        {
            echo "<div class='box-body'>
                <div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-ban'></i> Erreur !</h4>
                L'utilisateur ne dispose pas d'assez de crédits ou de jours de formation pour s'inscrire a cette formation.
                </div>
                </div>";
        }
	} 
	
?>