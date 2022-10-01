<?php $title = "Cabinets"; ?>

<?php ob_start(); ?>

<table class="table table-striped"">
  <thead>
    <tr>
      <th scope="col">nom gcl</th>
      <th scope="col">nom juridique</th>
    <th scope="col">siren</th>
    <th scope="col">siret</th>
    <th scope="col">numero_tva</th>
    <th scope="col">adresse</th>
    <th scope="col">code_postal</th>
    <th scope="col">ville</th>
    <th scope="col">tel</th>
    <th scope="col">dossier_dia</th>
    <th scope="col">ou_ad</th>
    <th scope="col">attribut_facturation</th>
    </tr>
  </thead>
  <tbody>

<?php
foreach ($cabinets as $cabinet) {
?>

    
    <tr>
      <th scope="row"><?php echo $cabinet->getNom_gcl(); ?></th>
      <td><?php echo $cabinet->getNom_juridique(); ?></td>
      <td><?php echo $cabinet->getSiret(); ?></td>
      <td><?php echo $cabinet->getSiren(); ?></td>
      <td><?php echo $cabinet->getNumero_tva(); ?></td>
      <td><?php echo $cabinet->getAdresse(); ?></td>
      <td><?php echo $cabinet->getCode_postal(); ?></td>
      <td><?php echo $cabinet->getVille(); ?></td>
      <td><?php echo $cabinet->GetTel(); ?></td>
      <td><?php echo $cabinet->getDossier_dia(); ?></td>
      <td><?php echo $cabinet->getOu_ad(); ?></td>
      <td><?php echo $cabinet->getAttribut_facturation(); ?></td>

      
    </tr>
    
<?php
}
?>

</tbody>
</table>


<?php $content = ob_get_clean(); ?>

<?php require('templates/layout.php'); ?>