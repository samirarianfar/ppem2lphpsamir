<?php 
/*include_once "../Design/header.php";*/
include_once "../models/Formation.php";
$equipe=$_SESSION['idequipe'];
RechercheChefEquipe($equipe);
?>
<html>
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
<link rel="icon" type="image/x-icon" href="/img/favicon.png" />
<link rel="stylesheet" href="../CSS/menu.css" type="text/css">
<title> Gestion de formation </title>
</head>
<body>
	<div id="header">
	<h1>Gestion de formation de la Maison des Ligues</h1>
	<font style="margin-left:-800px;color:Black; font-size:20px"> Date : <?php echo date("d-m-Y")?></font>
	</div>
	<div id="navigation">
		<ul>
			<li id="active"><a href="InscritFormation.php">Formation Inscrit</a></li>
			<li><a href="ChoixFormation.php">Choisir Formation</a></li>
			<li><a href="HistoriqueFormation.php">Historique Formation</a></li>
			<li><a href="DemandeFormation.php">Demande de Formation</a></li>
			<li><a href="Rechercher.php">Rechercher</a></li>
			
	   </ul> 
	</div>
	<a href="../controllers/Deconnexion.php"><img src="img/boutondecon.jpg" alt="deconnecter"/></a>
	<br />
	<p style="text-align: center; color:Black; font-size:30px"> Bienvenue sur votre espace <?php echo $_SESSION['prenom'] ?> <?php echo $_SESSION['nom']?></p>
	<br />

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
 /*var_dump($_SESSION);*/
?>
<!--<strong style="font-size:20px">Nombre de crédit restant :</strong> /*echo $_SESSION ['credit'];?><br/>-->
<!-- <strong style="font-size:20px">Nombre de jours restant :</strong> /*echo $_SESSION ['nbjour'];?><br/>-->
<?php
if ($_SESSION ['chef']) {
	
?>
		<font style="text-align: left;font-size:20px"> <strong>Vous êtes chef d'équipe</strong> </font>
<!-- Html -->
<?php

} 
else{	
?>
	<font style="text-align: left;font-size:20px"><strong> Votre chef d'équipe est : </strong><?php echo $_SESSION['nom'] ?></font>

<?php
}
?>
