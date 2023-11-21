<h3 class="align-center">Fiche du cumule des frais du mois : </h3>
    <div class="encadre">
  	<table class="listeLegere">
             <tr>
                <th class='nom'> Libelle: </th>   
                <th class='prenom'> Cumule:</th>           
             </tr>
        <?php    foreach ( $montantMois as $unMontant ): ?>
            <tr>
                <td><?=$unMontant['libelle']?></td>
                <td><?=$unMontant['somme']?></td>
           </tr>
           <?php endforeach?>
    </table>
  </div>
