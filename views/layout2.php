<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8" />
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	<link rel="icon" type="image/x-icon" href="/img/favicon.png" />
	<link rel="stylesheet" href="CSS/menu.css" type="text/css">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="CSS/styles.css" rel="stylesheet" type="text/css" />

	
	<title> Gestion de formation </title>
</head>
	<body>
		<div id="header">
		<h1>Gestion de formation de la Maison des Ligues</h1>
		
		<font style="margin-left:-800px;color:Black; font-size:20px"> Date : <?php echo date("d-m-Y")?></font>
	</div>
	<div id="navigation">
		<ul>
<?php
			 if($_SESSION['auth']['rang_salarie']== 1)
              {
                  echo('<li><a href="'.BASE_URL.'/admin"></i>Accueil</a></li>
                  <li><a href="'.BASE_URL.'/AjoutMembre">Ajouter un Utilisateur</a></li>
                  <li><a href="'.BASE_URL.'/GererPresta"></i>Ajouter un Prestataire</span></a></li>
				  <li><a href="'.BASE_URL.'/GererForm"></i>Ajouter une Formation</a></li>
				   <li><a href="'.BASE_URL.'/Monprofil"></i>Mon profil</a></li>
				  <li><a href="'.BASE_URL.'/disconnect"><img src="img/boutondecon.jpg" alt="deconnecter"/></a></li>');
			 }
              elseif ($_SESSION['auth']['rang_salarie'] == 2)
              {
                 echo('<li><a href="'.BASE_URL.'/chefEquipe"></i>Accueil</span></a></li>
				 <li><a href="'.BASE_URL.'/chefEquipe"></i>ChoixFormation</span></a></li>
                 <li><a href="'.BASE_URL.'/AjoutMembre">Creer votre Equipe</a></li>
				 <li><a href="'.BASE_URL.'/monEquipe"></i>Gerer votre Equipe</a></li>
				 <li><a href="'.BASE_URL.'/Monprofil"></i><span>Mon profil</a></li>
				 <li><a href="'.BASE_URL.'/dispoF"></i><span></a></li>
				 
				
				 
				<li><a href="'.BASE_URL.'/disconnect"><img src="img/boutondecon.jpg" alt="deconnecter"/></a></li>');
			  }
              else{   
				  
              
                 echo('<li><a href="'.BASE_URL.'/dispoF">Accueil</a></li>');
              
              echo ('
                    <li><a href="'.BASE_URL.'/dispoF">Formation</a></li>
					<li><a href="'.BASE_URL.'/AttenteF">Formation Attente</a></li>
					<li><a href="'.BASE_URL.'/historiqueF">Historique Formation</a></li>
					<li><a href="'.BASE_URL.'/Monprofil"></i>Mon profil</a></li>
					
 
 
 
					
                   <li><a href="'.BASE_URL.'/disconnect"><img src="img/boutondecon.jpg" alt="deconnecter"/></a></li>');
			  }			  
?>
             </li>
	   </ul> 
	</div>
	<!---<a href="Controllers/Deconnexion.php"><img src="img/boutondecon.jpg" alt="deconnecter"/></a>-->
	<!--<a href="'.BASE_URL.'/disconnect"><img src="img/boutondecon.jpg" alt="deconnecter"/></a>-->
	<br />
	<p style="text-align: center; color:Black; font-size:30px"> Bienvenue sur votre espace 
			
	<form method="POST" action="#">
		
			Mot Cle: <input type="text" name="motCle">
			    <input type="submit" value="Chercher">
		
	</form>
	<table>
	  
<?php
	$mc="null";
	if(isset($_POST['motCle'])){
	$mc=$_POST['motCle'];
}
   global $bdd;
   $reponse = $bdd->query("select * from formation where Libelle like '%$mc%'");
	
	while ($donnees = $reponse->fetch())
	 {
?>
	
	<?php
		
			echo '<tr>';
			echo '<td>'.$donnees['ContenuFormation'].'</td>';
			echo '<td>'.$donnees['Date_debut'].'h'.'</td>';
			echo '<td>'.$donnees['Date_fin'].'h'.'</td>';
			echo '<td>'.$donnees['NbjoursFormation'].'h'.'</td>';
			echo '<td>'.$donnees['Libelle'].'</td>';
			echo '<td>'.$donnees['CreditFormation'].'</td>';
			echo '</tr>';	
	}
	?>
	</table>
</div>
	<br/>
	
                         
	<div id="haut">
	<a href="#"><img src="img/haut.png"></a>
	</div>
</body>
</html>
<?php
function affiche_menu() {
	//  tableaux contenant les liens d'accès et le texte à afficher
	$tab_menu_lien = array (
			"InscritFormation.php",
			"ChoixFormation.php",
			"HistoriqueFormation.php",
			"DemandeFormation.php", 
			"Rechercher.php"
			
	);
	$tab_menu_texte  = array (
			"Formation Inscrit",
			"Choisir Formation",
			"Historique Formation",
			"Demande de Formation", 
			"Recherche",
			
	);
	//  informations sur la page
	$info  = pathinfo ( $_SERVER ['PHP_SELF'] );
	$menu  = "<div id=\"navigation\">";
	foreach ($tab_menu_lien as $cle => $lien)
	{
		 $lien;	
	}
}
?>


          

  
    <div class="content-wrapper">
       
        <section class="content-header">
            <h1>
            </h1>
        </section>
        <?= $content; ?>

    </div>
  
</body>
</html>
