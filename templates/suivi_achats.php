<?php $title = "Liste des achats"; ?>

<?php ob_start(); ?>

<h1>Cool, voici la liste des achats !!!</h1>

<?php 

    foreach ($achats as $achat) {

        ?>
    <div class="container">

   

    <form class="row g-3">

    <div class="col-auto">
    <div class="input-group mb-3">
  <span class="input-group-text" id="jour">jour</span>
  <input type="text" class="form-control" placeholder="jour" aria-label="jour" aria-describedby="jour" value="<?=$achat->getDate_achat(); ?>">
</div>

    
  </div>
  <div class="col-auto">
  <span class="input-group-text" id="basic-addon1">facturation</span>
    <input type="text" readonly class="form-control-plaintext" id="facturation" value="<?=$achat->getFacturation()->getId(); ?>">
  </div>
  <div class="col-auto">
  <span class="input-group-text" id="basic-addon1">livraison</span>
    <input type="text" readonly class="form-control-plaintext" id="livraison" value="<?=$achat->getLivraison()->getId(); ?>">
  </div>
  <div class="col-auto">
  <span class="input-group-text" id="basic-addon1">Ref interne</span>
    <input type="text" readonly class="form-control-plaintext" id="ref_interne" value="<?=$achat->getRef_interne() ?>">
  </div>
  <div class="col-auto form-check">
  <input class="form-check-input" type="checkbox" value="" id="recu">
  <label class="form-check-label" for="flexCheckDefault">
    reçu
  </label>
  
</div>

</form>

    </div>

<?php
    }
?>

<?php $content = ob_get_clean(); ?>

<?php require('templates/layout.php'); ?>