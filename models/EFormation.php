<?php

function InsererNouvelleForm($IdEmploye, $IdFormation)
{
	$base = initBase ();
	$sql=$base->prepare('insert into inscrire (Employe_IdEmploye,Formation_IdFormation, EtatValidation) values ( ?, ?, \'En cours de validation\')');
	return $sql->execute ( array (
			$IdEmploye,
			$IdFormation));
}


function Refuser($IdEmploye)
{   
	 $base = initBase();
     $sql = 'update inscrire,employe set EtatValidation= \'refuser\' where IdEmploye=?';
     $sql = $base->prepare($sql);
     $sql->execute(array($IdEmploye));  
}
?>