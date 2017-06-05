<?php

    if($_SESSION['auth']['rang_salarie']== 1 ||$_SESSION['auth']['rang_salarie']== 2 )
    {
        require "Models/GererPresta.php";
        if(isset($_POST['submit']))
        {
            AjouterPresta();
            echo '<div>Le prestataire est bien ajouté!</div></div>';    
        }
        
        if($_SESSION['auth']['rang_salarie']== 1)
        {
            $_GET['p'] = 'admin';
        }
        else
        {
            $_GET['p'] = 'chefEquipe';
        }
        require "Views/GererPresta.php";
    }
    else
    {
        header("Location:".BASE_URL."/disconnect");
    }
