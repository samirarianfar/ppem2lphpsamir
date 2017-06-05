<?php
    if($_SESSION['auth']['rang_salarie']== 1)
    {
        require "Models/AjoutMembre.php";
        if(isset($_POST['submit']))
        {
           //AjouterMembre();
		   AtoutermembreChef();
                
            
        }
        $_GET['p'] = 'admin';
        require "Views/AjoutMembre.php";
    }
    elseif($_SESSION['auth']['rang_salarie']== 2)
    {
        require "Models/AjoutMembre.php";
        if(isset($_POST['submit']))
        {
            AtoutermembreChef();
        }
        $_GET['p'] = 'chefEquipe';
        require "Views/AjoutMembre.php";
    }
    else
    {
         header("Location:".BASE_URL."/disconnect");
    }