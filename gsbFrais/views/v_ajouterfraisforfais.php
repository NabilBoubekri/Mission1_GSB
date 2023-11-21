<div id="contenu">
      <h2>Mes fiches de frais</h2>
      <h3>Mois à sélectionner : </h3>
      <form action="index.php?uc=ajouterfraisbdd&action=ajouterfraisbdd" method="post">
      <div class="corpsForm">
         
      <p>
      <label for="lstMois" accesskey="n">Mois : </label>
        <select  id="lstMois" name="lstMois">
            <option selected value="01">janvier</option>
            <option value="02">février</option>
            <option value="03">mars</option>
            <option value="04">avril</option>
            <option value="05">mai</option>
            <option value="06">juin</option>
            <option value="07">juillet</option>
            <option value="08">aout</option>
            <option value="09">septembre</option>
            <option value="10">octobre</option>
            <option value="11">novembre</option>
            <option value="12">decembre</option>
        </select>
        
        <select id="lstAnnee" name="lstAnnee">
            <?php
            
			foreach ($lesMois as $unMois)
			{
			    $mois = $unMois['mois'];
				$numAnnee =  $unMois['numAnnee'];
				$numMois =  $unMois['numMois'];
				if($mois == $moisASelectionner){
				?>
				<option selected value="<?php echo $numAnnee ?>"><?php echo $numAnnee ?> </option>
				<?php 
				}
				else{ ?>
				<option value="<?php echo $numAnnee ?>"><?php echo $numAnnee ?> </option>
				<?php 
				}
			
			}
           
		   ?>    
            
        </select>
      </p>
      <div class="corpsForm">
            <h2>Visiteur</h2>
                <p>
                    <label for="num" accesskey="n">Numéro: </label>
                    <select id="num" name="numero">
                        <?php
                        foreach ($visiteurs as $unVisiteur)
                        {
                            ?>
                        <option selected value="<?php echo $unVisiteur['id'] ?>"><?php echo  $unVisiteur['nom'] . " ". $unVisiteur['prenom']?> </option>
                            <?php 
                            }
                    
                    ?>    
                    </select>
                </p>
                            
                
                <label for="REP">Repas midi</label>
                <input id="REP" name="REP"></input>
                <br>
                <br>
                <label for="NUI">Nuitées</label>
                <input id="NUI" name="NUI"></input>
                <br>
                <br>
                <label for="ETP">Etape</label>
                <input id="ETP" name="ETP"></input>
                <br>
                <br>
                <label for="KM">KM</label>
                <input id="KM" name="KM"></input>
        </div>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>