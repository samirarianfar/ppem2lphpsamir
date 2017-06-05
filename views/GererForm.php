<?php
    if($_SESSION['auth']['rang_salarie']== 1 )
    {
        require "Models/GererForm.php";
        
        $prest = Presta();
        
        if(isset($_POST['envoyer']))
        {
            AjouterFormation();
            echo '<div>La formation est bien enregistré!</div>';    
        }
        
        require "Views/GererForm.php";
    }
    else
    {
        header("Location:".BASE_URL."/disconnect");
    }
