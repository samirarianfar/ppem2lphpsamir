<?php
include_once "../Option/date.php";
include_once "../controllers/login.php";
include_once "../controllers/verifconnect.php";
$login=	$_SESSION['LoginEmploye'];
include_once "menu.php";
include_once "../models/LFormation.php";
include_once "../models/base.php";

?>

<html>
<head>
<link rel="stylesheet" href="../CSS/menu.css" type="text/css">
</head>
<body>

<?php

echo affiche_menu();


?>
<div id="principal">
	<h1>Recherche de formation</h1>
	<form method="POST" action="Rechercher.php">
		
			Mot Cle: <input type="text" name="motCle">
			    <input type="submit" value="Chercher">
		
	</form>
	<table>
	  <tr><th>Intitulé</th><th>Date</th><th>Durée</th><th>Lieu</th><th>Credit</th</tr>
<?php
	$mc="null";
	if(isset($_POST['motCle'])){
	$mc=$_POST['motCle'];
}
   $base = initBase ();
   $reponse = $base->query("select * from formation where ContenuFormation like '%$mc%'");
	
	while ($donnees = $reponse->fetch())
	 {
?>
	
	<?php
		
			echo '<tr>';
			echo '<td>'.$donnees['ContenuFormation'].'</td>';
			echo '<td class="date">'.AfficherDateComplete($donnees['DateFormation']).'</td>';
			echo '<td>'.$donnees['DureeFormation'].'h'.'</td>';
			echo '<td>'.$donnees['LieuFormation'].'</td>';
			echo '<td>'.$donnees['CreditFormation'].'</td>';
			echo '</tr>';

 			
	}
	?>
	</table>
</div>
</body>
</html>
