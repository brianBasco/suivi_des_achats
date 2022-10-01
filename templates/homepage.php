<?php $title = "Achats"; ?>

<?php ob_start(); ?>


<form action="./?action=mail" method="POST">

<fieldset class="form-group border p-3">
    <legend class="w-auto px-2">Formulaire</legend>

   

        <div class="container">

            <div class="input-group mb-3">
                <select class="form-select" aria-label="Sélectionner cabinet" name="facturation">
                    <option value="-1" selected>Adresse de facturation</option>
                    <?php
                    foreach ($cabinets as $cabinet) {
                      echo "<option value='".$cabinet->getId()."'>".$cabinet->getNom_gcl()."</option>";
                    }
                    ?>
                  </select>
            
            </div>


           
        </div>
        

          <div class="container">

            <div class="input-group mb-3">
                <select class="form-select" aria-label="Sélectionner cabinet" name="livraison">
                    <option value="-1" selected>Adresse de livraison</option>
                    <?php
                    foreach ($cabinets as $cabinet) {
                      echo "<option value='".$cabinet->getId()."'>".$cabinet->getNom_gcl()."</option>";
                    }
                    ?>
                  </select>

            </div>

           

          </div>

          <div class="container">
            <div class="input-group mb-3">
                <span class="input-group-text">Ref interne</span>
                <input type="text" class="form-control" aria-label="Matériel" name="ref_interne" />
              </div>
          </div>


          <div class="container">
            <div class="input-group mb-3">
                <span class="input-group-text">Matériel</span>
                <textarea id="materiel" class="form-control" aria-label="Matériel" name="materiel"></textarea>
              </div>
          </div>

          

      
   
   
    <div class="container">
       
            <button type="submit" class="btn btn-primary">Générer</button>
       
       
    </div>

    


</fieldset>

</form>

<div class="container">


<button id="config_utilisateur" class="btn btn-primary" onclick="ajouterConfigUtil()">Config utilisateur</button>



</div>



<?php $content = ob_get_clean(); ?>

<?php require('templates/layout.php'); ?>