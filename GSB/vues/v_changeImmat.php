

  <form method="POST"  action="index.php?uc=modifierImmat&action=changerImmat">

      <div class="corpsForm">

          

          <fieldset>

            <legend>Changer l'immatriculation de <?php echo $nom." ".$prenom ?>

            </legend>

            <div>
            	<label> Immatriculation(s) précédente(s) :</label> <?php 
            	echo $tabImmat;
            	foreach ($tabImmat as $immat) {
            		echo $immat[0]." pour le mois ".$immat[1]."<BR/>";
            	}?><BR/>

            	<label> Prénom :</label><input type="text" name="Prenom"/><BR/>
            	
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