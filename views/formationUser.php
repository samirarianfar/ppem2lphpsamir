<?php
if($_SESSION['auth']['rang_salarie']== 2)
{
    require "Models/admin.php";
    require "Models/formationUser.php";
	require "Models/chefEquipe.php";

    if (isset($_POST['formUser']))
    {
		 $_SESSION['test'] = $_POST['idUser'];
    }
    $LFormation = getFormationsUser($_SESSION['test']);

    $_GET['p'] = 'chefEquipe';

    if (isset($_POST['Valide']))
	{
		$IdFormation = $_POST['idForm'];
        $nbjourformation = getnbjourformation($IdFormation);
        $creditsformation = getcreditsformation($IdFormation);
        $nbjoursalarie = getnbjoursalarie($_SESSION['test']);
        $creditssalarie = getcreditssalarie($_SESSION['test']);

        if (($nbjoursalarie >= $nbjourformation) && ($creditssalarie >= $creditsformation))
        {
            valide($IdFormation,$_SESSION['test']);
            usenbjourcredits($nbjourformation,$creditsformation,$_SESSION['test']);
            header("Location:".BASE_URL."/formationUser");
        }
        else
        {
            echo "
                
                
                <h4>Erreur !</h4>
                L'utilisateur ne dispose pas d'assez de crédits ou de jours de formation pour s'inscrire a cette formation.
                </div>
                </div>";
        }
	}
	if (isset($_POST['Refuse']))
	{
		$IdFormation = $_POST['idForm'];

		refuse($IdFormation,$_SESSION['test']);

		header("Location:".BASE_URL."/formationUser");
	}

    require "Views/formationUser.php";
}
else
{
     header("Location:".BASE_URL."/disconnect");
}