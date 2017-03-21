<?php 
include_once "Base.php";
if(isset($_POST['submit'])){
		echo"<h1>Les formations disponibles</h1>";
		echo"<table>";
			echo"<tr>";
				echo"<th>Intitulé</th>";
				echo"<th>Date</th>";
				echo"<th>Durée</th>";
				echo"<th>Lieu</th>";
				echo"<th>Prestataire</th>";
			echo"</tr>";
	$base = initBase();   
	foreach($base->query('SELECT * FROM formation ,prestataire WHERE  ContenuFormation=current_date') as $Recherche){
	  if(!empty($_POST['ContenuFormation'])){
			echo "<tr>";
			echo "<td>".$Recherche['ContenuFormation']."</td>";
			echo "<td>".$Recherche['DateFormation']."</td>";
			echo "<td>".$Recherche['DureeFormation']."</td>";
			echo "<td>".$Recherche['LieuFormation']."</td>";
			echo "<td>".$Recherche['NomPrestataire']."</td>";
			echo "</tr>";
	  }
	   else
		   echo"La formation que vous avez demandé n'est pas disponible";
		echo"</table>";
}
 }
?>