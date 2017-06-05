
        <div>
            <h3>Ajouter une nouvelle formation</h3>
        </div>
        <form action="<?= BASE_URL; ?>/GererForm" method="post">
                    
			<div>Prestataire: </div>
            <select name="prestataire">
                    <?php
						if (sizeof($prest) > 0) {
                         foreach ($prest as $key => $resultat) {
                         echo '<option value="' .$resultat['Idprestataire'] . '">' .$resultat['NomPrestataire'] . '</option>';
                                    }
                        } else {
                            echo '<option>Aucun prestataire disponible </option>';
                        }
                        ?>
             </select>
                        
			 <label>Intitulé la Formation: </label>
             <input type="text" name="Libelle"  placeholder="Ajouter nom de la formation" />
                            
		     <label>Contenu de la formation: </label>
             <input type="text" name="ContenuFormation" placeholder="Ajouter le contenu de la formation">
                           
             <label>Date de début: </label>
             <input type="date" name="Date_debut"/>
             
             <label>Date de fin : </label>
             <input type="date" name="Date_fin"/>
                              
             <label>Durée de Formation: </label>
             <input type="text" name="NbjoursFormation" placeholder=" ajouter durée de la formation "/></br>
                            
             <label>Adresse :</label>
             <input type="text"  name="Numero" placeholder="Numero de la rue"/></br>
             <input type="text"  name="Rue"  placeholder="Nom de la rue"/></br>
             <input type="text"  name="commune"  placeholder="Nom de la ville" /></br>
             <input type="text"  name="Code_p" placeholder=" saisir le code Postale"/></br>
                    
			 <input  type="submit" value="Valider" name="envoyer">
                        
                    
        </form>
       