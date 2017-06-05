<body>
	<div id="contenu1">
	 <fieldset>
        
            
          
            <div>
              
				<?= Formations::FormDispo($Form, "3-2", "propose") ?>
                <?= Formations::FormAttente($FormAtt, "2-2", "attente") ?>
				<?= Formations::FormHistorique($FormHisto, "1-1", "histo") ?>
            </div>
      
                <!--<h4>Liste des utilisateurs en attente</h4>
                    <table>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Formations</th>
                            <th>Supprimer</th>
                        </tr>
                        <?php
                        if ($nbUtilisateur  > 0){
                            foreach ($Utilisateur as $cle => $resultat){
                               echo
                                    '
                            <tr>
								<td>' . $resultat['NomEmploye'] . '</td>
								<td>' . $resultat['PrenomEmploye'] . '</td>
								<td>' . $resultat['Email'].'</td>
                           
						   <td>
                            <form method="post" action="' . BASE_URL . '/formationUser">
								<input type="submit" value="En attente" name="formUser" > 
                                <input name="idUser" type="hidden" value="' . $resultat['IdEmploye'] . '" >
                            </form>
                            </td>
                            <td>
                            <form method="post" action="' . BASE_URL . '/chefEquipe">
                                   
                                <input type="submit" value="Supprimer" name="Supprimer" > 
                                      
                              <input name="idUser" type="hidden" value="' . $resultat['IdEmploye'] . '" >
                            </form>
                            </td>
                            </tr>
                            </tbody>';
                            }
                        }
                        ?>-->

                    </table>
            <!--   <h4>Liste des demandes </h4>
           
            
                    <table>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Formation</th>
                            <th>Date</th>
                            <th>Durée</th>
                            <th>Jour restant</th>
                           
                        </tr>
                        <?php
                        if ($nombreDemande > 0) {
                            foreach ($Demande as $cle => $resultat) {
                                echo
                                    '
                            <tr>
                            <td>' . $resultat['NomEmploye'] . '</td>
                            <td>' . $resultat['PrenomEmploye'] . '</td>
                            <td>' . $resultat['Libelle'] . '</td>
                            <td>' . $resultat['Date_debut'] . '</td>
                            <td>' . $resultat['durée'] . '</td>
                            <td>' . $resultat['NbJours'] . '</td>
                            
                            </tr>
                            ';
                            }
                        }
                        ?>
                    </table> -->       
	</div>
	</fieldset>
</body>