<?php
include ('../controllers/loginAdmin.php');
?>
<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="../CSS/inscrip.css">
		<title> Espace Inscription </title>
	</head>
	<body>
		<a href="InscritFormation.php"><img src="img/icone-retour.png" alt="retour"/></a>
		<fieldset>
			<legend> Connexion au site M2L </legend>
				<p>
			<form method="post" action="admin.php">
				<label for="pseudo"> Pseudo : </label><input name="Identifiant" type="text" <?php if (isset($_POST['pseudo'])){echo'value= "'.$_POST['pseudo'].'"';}?> id="pseudo" /><p>
				<label for="password"> Mot de Passe : </label><input type="password" <?php if (isset($_POST['password'])){echo'value= "'.$_POST['password'].'"';}?> name="password" id="password" /></p>
			    <div><p><input type="submit" name="valider" value="Valider" /></p></div>
			</form>
		</fieldset>

	</body>
</html>
<p style="color:red;text-align:center"><?php echo $erreur;?></p>