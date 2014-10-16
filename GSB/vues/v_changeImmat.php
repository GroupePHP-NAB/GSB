

  <form method="POST"  action="index.php?uc=modifierImmat&action=nouvelleImmat">

      <div class="corpsForm">

          

          <fieldset>

            <legend>Changer l'immatriculation de <?php echo $nom." ".$prenom ?>

            </legend>

            <div>
            	 Immatriculation précédente :<?php     
                                   	
            	               
                echo $tabImmat[0]." enregistrer pendant le mois ".$tabImmat[1]; ?>                   		
            	<BR/>

            	<label> Nouvelle Immatriculation :</label><input type="text" name="Immat"/><BR/>
            	
            </div>

		
          </fieldset>

      </div>

      <div class="piedForm">

      <p>

        <input id="ok" type="submit" value="Valider" size="20" />

        <input id="annuler" type="reset" value="Effacer" size="20" />

      </p> 

      </div>

        

      </form>