<body>
	<div id="contenu1">
	 <fieldset>
               <h3>Liste des admins</h3>
              
              
                 <table>
                
					<tr>
						<th>Nom</th>
						<th>Prénom</th>
						<th>Email</th>
						<th>Login</th>
						<th>Durée</th>
					</tr>
                 
                 <?php 
                 foreach ($LAdministrateur as $cle => $resulat) {
                        echo '<tbody>
                        			<tr>
                                         <td>'.$resulat['NomEmploye'].'</td>
                                         <td>'.$resulat['PrenomEmploye'].'</td>
                                         <td>'.$resulat['Email'].'</td>
										 <td>'.$resulat['LoginEmploye'].'</td>
                                         <td>'.$resulat['NbJours'].'</td>
                                    </tr>
                               </tbody>';
                                               	}
                 ?>
                  </table>  
           
                <h3>Liste chefs</h3>
              
                <table>
                
                 <tr>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Mail</th>
					<th>Login</th>
					<th>Duree</th>
                 </tr>   
                 <?php 
                 foreach ($LChef as $cle => $resulat) {
                        echo '<tbody>
                                    <tr>
                                        <td>'.$resulat['NomEmploye'].'</td>
                                        <td>'.$resulat['PrenomEmploye'].'</td>
                                        <td>'.$resulat['Email'].'</td>
										<td>'.$resulat['LoginEmploye'].'</td>
                                        <td>'.$resulat['NbJours'].'</td>
                                   </tr>';
					}
                 ?>
                </table>  
           
                <h3>Liste des employes</h3>
               
                 <table>
                
                 <tr>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Mail</th>
					<th>Login</th>
					<th>Duree </th>
                 </tr>
                 
                 <?php 
                 foreach ($listUtilisateur as $cle => $resulat) {
                        echo '
                                    <tr>
                                        <td>'.$resulat['NomEmploye'].'</td>
                                        <td>'.$resulat['PrenomEmploye'].'</td>
                                        <td>'.$resulat['Email'].'</td>
										<td>'.$resulat['LoginEmploye'].'</td>
										<td>'.$resulat['NbJours'].'</td>
                                    </tr>';
                  }
                 ?>
                   </table>  
          
               <!-- <h4>Liste des prestataires</h4>
                 <table>
                 
                 <tr>
					<th>Nom Prestataire</th>
					<th>Adresse</th>
                 </tr>-->
                 
                 <?php 
                /* foreach ($listP as $cle => $resulat) {
                        echo '
                             <tr>
                                <td>'.$resulat['NomPrestataire'].'</td>
                                <td>'.$resulat['Numero']." ".$resulat['Rue']." ".$resulat['commune']." ".$resulat['Code_p'].'</td>
                                  </tr>';
                 }*/
                 ?>
               </table>  
                <h4>Liste des formations</h4>
             
             
                 <table>
                 
                 <tr>
					<th>Intitulé</th>
					<th>Date debut</th>
					<th>Date fin</th>
					<th>Contenu de la formation </th>
                 </tr>
                 
                 <?php 
                 foreach ($LFormation as $cle => $resulat) {
                        echo '
                               <tr>
									<td>'.$resulat['Libelle'].'</td>
                                    <td>'.$resulat['Date_debut'].'</td>
									<td>'.$resulat['Date_fin'].'</td>
                                    <td>'.$resulat['ContenuFormation'].'</td>
                               </tr>
                              ';
                 }
                 ?>
                </table>  
 </table>
</div>
	</fieldset>
</body>