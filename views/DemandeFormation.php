<?php
	include_once "../Option/date.php";
	include ('../controllers/login.php');
	include ('../controllers/DemandeFormation.php');
	include_once "../controllers/verifconnect.php";
	$login=	$_SESSION['LoginEmploye'];
	include ('menu.php');
	include_once "../models/LFormation.php";
	include_once "../models/EFormation.php";
	include_once "../models/Formation.php";
	$equipe=$_SESSION ['idequipe'];
//RechercheChefEquipe($equipe);
?>
<html>
<head>
<link rel="stylesheet" href="../CSS/menu.css" type="text/css">
</head>
<body>

<?php
	echo affiche_menu();
?>
<?php 
if ($_SESSION ['chef']) {
	
?>
	<div id="f3">
		<h1>Accepter ou refuser les formations de vos salariés</h1>
		<table>
		<tr>
			<th>Intitulé</th>
			<th>Date</th>
			<th>Durée</th>
			<th>Lieu</th>
			<th>Etat</th>
		</tr>
		<?php
		
			$formation =RFormationAttenteA($login);
			
			foreach ( $formation as $result) 
			{ 
				
				echo '<tr>';
				echo '<td>'.$result['ContenuFormation'].'</td>';
				echo '<td class="date">'.AfficherDateComplete($result['DateFormation']).'</td>';
				echo '<td>'.$result['DureeFormation'].'h'.'</td>';
				echo '<td>'.$result['LieuFormation'].'</td>';
				//echo '<td>'.$result['EtatValidation'].'</td>';
				echo"<td class ='tabtr'>";
				//echo "<input type='submit' name='Accepter' value='Accepter' class='form-control'>";
				//echo "<input type='submit' name='Refuser' value='Refuser' class='form-control'>";
				//echo"<input name='idform1' type='hidden' value=".$result['IdFormation']." >";
						
			
			?>
					
					<a onclick="return confirm("Etes vous sure de valider cette formation");" href="valide.php?IdFormation=<?php echo($result['IdFormation'])?>&IdEmploye=<?php echo($result['IdEmploye'])?>"><input type='submit' value='Valider'></a>
					<a onclick="return confirm("Etes vous sure de refuser cette formation");" href="valide.php?IdEmploye=<?php echo($result['IdEmploye'])?>&IdFormation=<?php echo($result['IdFormation'])?>"><input type='submit'value='Refuser'></a>
					
					
			<?php	
					echo"</td>";
					echo"</td>";
					echo"</tr>";
				
			}	 
		?>
	</table>
	</div>
</body>
</html>

<?php
} 
else{
	
	?>
<div id="principal">
	<h1>Formations en attente de confirmation</h1>
	<table>
		<tr>
			<th>Intitulé</th>
			<th>Date</th>
			<th>Durée</th>
			<th>Lieu</th>
			<th>Etat</th>
		</tr>
		<?php
		$login=	$_SESSION['LoginEmploye'];
		$formation =RFormationAttente($login);
		foreach($formation as $result) 
		{
			echo '<tr>';
			echo '<td>'.$result['ContenuFormation'].'</td>';
			echo '<td class="date">'.AfficherDateComplete($result['DateFormation']).'</td>';
			echo '<td>'.$result['DureeFormation'].'h'.'</td>';
			echo '<td>'.$result['LieuFormation'].'</td>';
			echo '<td>'.$result['EtatValidation'].'</td>';
			echo '</tr>';
		}
		?>
	</table>
</div>
</body>
</html>
<!-- HTML -->
<?php
}
?>
</body>
</html>
