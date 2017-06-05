<div id="form">
                <div >
                    <h3Ajouter un nouveau prestataire</h3>
                </div>
               <form action="<?= BASE_URL; ?>/GererPresta" method="post">
					<label>Adresse</label>
					<input type="number" id="Numero" name="numero" placeholder="Numero"/>
                    <label>Rue</label>
                    <input type="text"  name="Rue"  placeholder="Saisir  le nom de rue"/>
                    <label>Connune</label>
                    <input type="text"  name="commune" placeholder="Saisir le mon de la ville "/>
					<label>Code postal</label>
                    <input type="text" name="Code_p" placeholder="Saisir le code Postale"/>
					<label>Nom Prestataire</label>
                    <input type="text" name="NomPrestataire"  placeholder="Saisir le nom de prestataire"/>
                        
                      <label>  </label>
                     <input type="submit" value="S'inscrire" name="submit" >
                   
                       
           </form>
</div>