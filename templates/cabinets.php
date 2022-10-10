<?php $title = "Cabinets"; ?>

<?php ob_start(); ?>

<form class="form-floating" action="./?action=cabinets&findByNom=yes" method="POST" >

<fieldset class="border p-2">

<legend class="w-auto" style="float: none; padding: inherit;">Chercher</legend>

<div class="container">
  <div class="row">
    <div class="col-2">
      <input type="text" class="form-control" id="findByNom" placeholder="chercher par nom" name="nom" >
    </div>
    <div class="col-2">
    <button type="submit" class="btn btn-primary">Chercher</button>
    </div>
    
  </div>
 
</div>

</fieldset>
  
</form>

<table class="table table-striped table-sm">
  <thead>
    <tr>
      <th scope="col">nom gcl</th>
      <th scope="col">nom juridique</th>
      <!--
    <th scope="col">siren</th>
    <th scope="col">siret</th>
    <th scope="col">numero_tva</th>
-->
    <th scope="col">adresse</th>
    <th scope="col">code_postal</th>
    <th scope="col">ville</th>
    <!--
    <th scope="col">tel</th>
    <th scope="col">dossier_dia</th>
    <th scope="col">ou_ad</th>
    <th scope="col">attribut_facturation</th>
-->
<th scope="col">action</th>
    </tr>
  </thead>
  <tbody>

<?php
foreach ($cabinets as $cabinet) {
?>

    
    <tr>
      <th scope="row"><?php echo $cabinet->getNom_gcl(); ?></th>
      <td><?php echo $cabinet->getNom_juridique(); ?></td>
      <!--
      <td><?php echo $cabinet->getSiret(); ?></td>
      <td><?php echo $cabinet->getSiren(); ?></td>
      <td><?php echo $cabinet->getNumero_tva(); ?></td>
      -->
      <td><?php echo $cabinet->getAdresse(); ?></td>
      <td><?php echo $cabinet->getCode_postal(); ?></td>
      <td><?php echo $cabinet->getVille(); ?></td>
      <!--
      <td><?php echo $cabinet->GetTel(); ?></td>
      <td><?php echo $cabinet->getDossier_dia(); ?></td>
      <td><?php echo $cabinet->getOu_ad(); ?></td>
      <td><?php echo $cabinet->getAttribut_facturation(); ?></td>
      -->
      <td><a href="./?action=cabinets&read=<?=$cabinet->getId(); ?>" class="btn btn-primary">modifier</a></td>

      
    </tr>
    
<?php
}
?>

</tbody>
</table>


<?php $content = ob_get_clean(); ?>

<?php require('templates/layout.php'); ?>