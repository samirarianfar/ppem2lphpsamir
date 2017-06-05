
                    <h2><? =$employe['NomEmploye'], $employe['PrenomEmploye'] ?></h2>
                    <p><?= $employe['NomEmploye'] ?></p>
                    
                        <li>
                            <b>Nombre de jours restants:<?= $employe['NbJours'] ?></p>
                        </li>
                        <li>
                            <b>Crédits restants:</b><?= $employe['CreditFormation'] ?></p>
                        </li>
                       
					   <!--<?php if($employe['rang_salarie']== 3)
                        echo "
                            <b>Chef d'équipe</b>$chefequipe</p>
                        </li>"
                        ?>!-->
                    </ul>
                <div>
                    <h3>Modifier votre profil:</h3>
                </div>
                <form role="form" action="<?= BASE_URL; ?>/Monprofil" method="post">
						<div>
                            <label>Nom</label>
                            <input type="text" name="NomEmploye" placeholder="NomEmploye" value="<?= $employe['NomEmploye'] ?>"/>
                        </div>
                        <div>
                            <label>Prenom</label>
                            <input type="text" name="PrenomEmploye" placeholder="PrenomEmploye" value="<?= $employe['PrenomEmploye'] ?>"/>
                        </div>
                        <div>
                            <label>Login</label>
                            <input type="login" name="LoginEmploye" placeholder="login" value="<?= $employe['LoginEmploye'] ?>"/>
                        </div>
                        <div>
                            <label>Mot de passe</label>
                            <input type="mdp"  name="MdpEmploye"  placeholder="mot de passe"/>
                        </div>
						<div>
                        
                            <label>Comfirmation Mot de Passe</label>
                            <input  type="mdp" name="MdpCon" placeholder="confirmation de mot de passe"/>
                        </div>
                        <?php if($employe['rang_salarie']== 1)
                        echo '<div>
                                <label>Jours de formation</label>
                                <input type="number"name="NbJours" value="'.$employe['NbJours'].'"/>
                              </div>
                              
                                <label>Crédits de formation</label>
                                <input type="number"name="CreditFormation" value="'.$employe['CreditFormation'].'"/>
                              </div>';
                        ?>
                   

				   <div>
                        <input type="submit" value="Valider" name="submit" >
                    </div>
                </form>

           