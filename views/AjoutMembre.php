<div id="form">
				<div>
					<h3>Ajouter un nouveau membre </h3>
				</div>
                <form role="form" action="<?= BASE_URL; ?>/AjoutMembre" method="post">
                    
                     <label for="nom">Nom:</label>
                     <input type="text" id="nom" name="NomEmploye" placeholder="Veuillez entrer votre nom"/>
                        
					 <label>Prenom:</label>
                     <input type="text" id="prenom" name="PrenomEmploye" placeholder=" Veuillez entrer votre prenom"/>
                       
                     <label> Email:</label>
                     <input type="email" id="mail" name="Email" placeholder="Veuillez entrer votre adresse email"/>
                       
                     <label>Mot de Passe:</label>
                     <input type="password" id="mdp" name="MdpEmploye"  placeholder="Veuillez entrer votre mot de passe"/>
					  <label>Login:</label>
                     <input type="text" id="login" name="LoginEmploye"  placeholder="Veuillez entrer votre login"/>
					  <label>Credit:</label>
                     <input type="text" id="mdp" name="CreditFormation"  placeholder="Veuillez entrer le credit: 5000"/>
                      
					 <label>Adresse:</label>
                     <input type="number" id="numero" name="Numero"  placeholder="Veuillez saisir le numero"/><br/>
                     <input type="text" id="Rue" name="Rue"  placeholder="Veuillez saisir la rue"/><br/>
                     <input type="text" id="commune" name="commune"  placeholder="Veuillez saisir la ville"/><br/>
                     <input type="text" id="code postale" name="Code_p"  placeholder=" Veuillez saisir le code Postale"/><br>
                     <label>Duree de formation:</label>
                     <input type="number" name="NbJours" placeholder="Nombre de jours"/><br/>
					 <label>Role:</label>
					 <input type="number" name="rang_salarie" placeholder="chef:2 et non chef3"/><br/>
					 
	
					
					 <input type="submit" value="S'inscrire" name="submit" >
                   
                </form>
          
   
</div>
