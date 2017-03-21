<div id="principal">
	<h1>Les formations disponibles</h1>
	<table>
		<tr>
			<th>Intitule</th>
			<th>Date</th>
			<th>Duree</th>
			<th>Lieu</th>
			<th>Etat</th>
		</tr>
<?php
include_once("views/menu.php");
include_once "../models/base.php";
$mc="null";
if(isset($_POST['motCle'])){
	$mc=$_POST['motCle'];
} 	
	$base = initBase ();
   $reponse = $base->query("select * from formation where IdFormation like '%$mc%'");
	while ($donnees = $reponse->fetch())
	 {
    ?>
		<tr>
			<td><?php echo $donnees['CreditFormation'];?></td>
			<td><?php echo $donnees['ContenuFormation'];?></td>
			<td><?php echo $donnees['DureeFormation'];?></td>
			<td><?php echo $donnees['LieuFormation'];?></td>
			<td><?php echo $donnees['LieuFormation'];?></td>
		</tr>
	<?php
	 }
	 $reponse->closeCursor();
	 ?>
</table>