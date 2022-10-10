<?php $title = "Cabinets"; ?>

<?php ob_start(); ?>

<form class="form-floating" action="./?action=cabinets&update=<?php echo $id; ?>"  method="POST" >

<fieldset class="border p-2">

<legend class="w-auto" style="float: none; padding: inherit;">Modifier</legend>


  <div class="mb-3">
    <label for="nom_gcl" class="form-label">Nom Gcl</label>
    <input type="text" class="form-control" id="nom_gcl" value="<?=$cabinet->getNom_gcl(); ?>">
  </div>

  <div class="mb-3">
    <label for="nom_juridique" class="form-label">Nom juridique</label>
    <input type="text" class="form-control" id="nom_juridique" value="<?php echo $cabinet->getNom_juridique(); ?>">
  </div>

  <div class="mb-3">
    <label for="siret" class="form-label">Siret</label>
    <input type="text" class="form-control" id="siret" value="<?php echo $cabinet->getSiret(); ?>">
  </div>

  <div class="mb-3">
    <label for="siren" class="form-label">Siren</label>
    <input type="text" class="form-control" id="siren" value="<?php echo $cabinet->getSiren(); ?>">
  </div>

  <div class="mb-3">
    <label for="numero_tva" class="form-label">Numéro tva</label>
    <input type="text" class="form-control" id="numero_tva" value="<?php echo $cabinet->getNumero_tva(); ?>">
  </div>

  <div class="mb-3">
    <label for="adresse" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="adresse" value="<?php echo $cabinet->getAdresse(); ?>">
  </div>

  <div class="mb-3">
    <label for="code_postal" class="form-label">Code postal</label>
    <input type="text" class="form-control" id="code_postal" value="<?php echo $cabinet->getCode_postal(); ?>">
  </div>

  <div class="mb-3">
    <label for="ville" class="form-label">Ville</label>
    <input type="text" class="form-control" id="ville" value="<?php echo $cabinet->getVille(); ?>">
  </div>

  
  <div class="mb-3">
    <label for="tel" class="form-label">Tel</label>
    <input type="text" class="form-control" id="tel" value="<?php echo $cabinet->getTel(); ?>">
  </div>

   
    <div class="mb-3">
    <label for="dossier_dia" class="form-label">Dossier Dia</label>
    <input type="text" class="form-control" id="dossier_dia" value="<?php echo $cabinet->getDossier_dia(); ?>">
  </div>

    
    <div class="mb-3">
    <label for="ou_ad" class="form-label">OU de l'Active Directory</label>
    <input type="text" class="form-control" id="ou_ad" value="<?php echo $cabinet->getOu_ad(); ?>">
  </div>

    
    <div class="mb-3">
    <label for="attribut_facturation" class="form-label">Attribut de facturation</label>
    <input type="text" class="form-control" id="attribut_facturation" value="<?php echo $cabinet->getAttribut_facturation(); ?>">
  </div>


  
  <button type="submit" class="btn btn-primary">Submit</button>


</fieldset>
  
</form>




<?php $content = ob_get_clean(); ?>

<?php require('templates/layout.php'); ?>