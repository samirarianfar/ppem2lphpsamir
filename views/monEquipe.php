<body>
	<div id="contenu1">
<fieldset>


                <h4>Liste des utilisateurs en attente </h4>
           
                    <table>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Etat</th>
                            <th>Supprimer</th>
                        </tr>
                        <?php
                        if ($nombreEmploye > 0) {
                            foreach ($employe as $cle => $resluat) {
                             echo
                                  
                            '<tr>
                            <td>' .$resluat['NomEmploye'] . '</td>
                            <td>' . $resluat['PrenomEmploye'] . '</td>
                            <td>' . $resluat['Email'] . '</td>
                            <td>
                            <form method="post" action="' . BASE_URL . '/formationUser">
                                    <input type="submit" value="En attente" name="formUser" > 
                                    <input name="idUser" type="hidden" value="'.$resluat['IdEmploye'].'" >
                            </form>
                            </td>
                            <td>
                            <form method="post" action="' . BASE_URL . '/chefEquipe">
                                    <input type="submit" value="Supprimer" name="Supprimer" >  
                                    <input name="idUser" type="hidden" value="' . $resluat['IdEmploye'].'" >
                            </form>
                            </td>
                            </tr>';
                            
                            }
                        }
                        ?>

                    </table>
             
            
</div>
	</fieldset>
</body>