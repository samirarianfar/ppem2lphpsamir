<body>
	<div id="contenu1">
	<fieldset>
                
<?php?>
     
                    <h3> Demande de formation par: </h3>
               
               
               
                    <table>
                        <tr>
                            <th>Intitulé</th>
                            <th>Date</th>
                            <th>Durée</th>
                            <th>Coût</th>
					        <th>Adresse</th>
						    <th>Etat</th>
							<th>Validation</th>
							<th>Annulation</th>
                          
                        </tr>
                        <?php


                        if (sizeof($LFormation) > 0) {
                            echo('' . " " . $LFormation[0]['NomEmploye'] . " " . $LFormation[0]['PrenomEmploye'] . '</h4>');
                            foreach ($LFormation as $cle => $resultat) {
                                $form = "";
                                
                                if($resultat['EtatValidation'] == "Validé")
                                 {
                                     $EtatValidation = ''.$resultat['EtatValidation'].'';
                                 }
                                 elseif($resultat['EtatValidation'] == "Refusé")
                                 {
                                    $EtatValidation = ''.$resultat['EtatValidation'].'';
                                 }
                                 else
                                 {
                                    $EtatValidation = ''.$resultat['EtatValidation'].'';
                                    
                                    $form = '<form method="post">
                                        
											<td>
											 <input type="submit" value="Accepter" name="Valide" > 
											</td>
											<td>
											 <input type="submit" value="Refuser" name="Refuse" > 
											<input name="idForm" type="hidden" value="'.$resultat['IdFormation'].'" >
                                            </td>
											
											
											
											
											 </form>';
									
                                               
                                 }
                                echo '
                                       
                                            <tr>
                                                <td>'.$resultat["Libelle"].'</td>
                                                <td>'.$resultat['Date_debut'].' - '.$resultat['Date_fin'].'</td>
                                                
                                                <td>'.$resultat['NbjoursFormation'].' Jours</td>
                                                <td>'.$resultat['CreditFormation'].' Credits</td>
                                                <td>'.$resultat['Numero'].' '.$resultat['Rue'].' '.$resultat['commune'].' '.$resultat['Code_p'].'</td>
                                                <td>'.$EtatValidation.'</td>
												'.$form.'
                                            </tr>';
                                                   
                            }
                      }
                      else{
                        echo '
                                       
                                            <tr>
                                                <td>Aucune formation</td></tr>';
                        }
                        ?>
                    </table>
              
</div>
</fieldset>
</body>