<?php 
require "Models/Connexion.php";
if(isset($_COOKIE['auth']) && !isset($_SESSION['auth']))
{

    $auth = $_COOKIE['auth'];
    $auth = explode('_____',$auth);
    $employe = get_user_cookie($auth[0]);

    $key = sha1($employe['LoginEmploye'].$employe['MdpEmploye'].$_SERVER['REMOTE_ADDR']);
    if($cle == $auth[1])
    {
        $_SESSION['auth'] = $employe; 
        setcookie('auth',$employe['IdEmploye'].'_____'.sha1($employe['LoginEmploye'].$employe['MdpEmploye'].$_SERVER['REMOTE_ADDR']),time()+(3600*24*3),'/','localhost');
        
        if($employe['rang_salarie'] == 1)
        header("Location:".BASE_URL."/admin");
        elseif($employe['rang_salarie'] == 2)
        header("Location:".BASE_URL."/chefEquipe");
        else
        header("Location:".BASE_URL);
    }
    else
    {
        setcookie('auth','',time()-3600);
    }
}

if(isset($_POST['submit']))
{
    $employe = get_Utilisateur($_POST);
            
    if($employe)
    {
        $_SESSION['auth'] = $employe; 
        if(isset($_POST['remember']))
        {
            setcookie('auth',$employe['IdEmploye'].'_____'.sha1($employe['LoginEmploye'].$employe['MdpEmploye'].$_SERVER['REMOTE_ADDR']),time()+(3600*24*3),'/','localhost');
        }
        if($employe['rang_salarie'] == 1)
			header("Location:".BASE_URL."/admin");
    	elseif($employe['rang_salarie'] == 2)
			header("Location:".BASE_URL."/chefEquipe");
    	else
			header("Location:".BASE_URL);

    	
                   
     }
     else
     {
         echo'<div class="alert alert-warning">Login ou mot de passe est incorrect !</div>';
     }
}

require "Views/Connexion.php"
?>