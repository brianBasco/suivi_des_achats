<?php $title = "Achats"; ?>

<?php ob_start(); ?>


<div class="input-group mb-3">
    <span class="input-group-text">Matériel</span>
    <textarea class="form-control" aria-label="Matériel" name="mail" rows="25">

Bonjour,

Pouvez-vous me faire un devis pour :

Matériel :
<?php echo $materiel."\n"; ?>

Adresse de facturation :
SIRET : <?php echo $facturation->getSiret()."\n"; ?>
<?php echo $facturation->getNom_gcl()."\n"; ?>
<?php echo $facturation->getNom_juridique()."\n"; ?>
<?php echo $facturation->getAdresse()."\n"; ?>
<?php echo $facturation->getCode_postal()." "; ?>
<?php echo $facturation->getVille()."\n"; ?>

Adresse de livraison :
<?php echo $livraison->getNom_gcl()."\n"; ?>
<?php echo $livraison->getNom_juridique()."\n"; ?>
<?php echo $livraison->getAdresse()."\n"; ?>
<?php echo $livraison->getCode_postal()." "; ?>
<?php echo $livraison->getVille()."\n"; ?>

(Ref interne : <?php echo $ref_interne.")\n"; ?>

Merci par avance. 

    </textarea>

</div>


<?php $content = ob_get_clean(); ?>

<?php require('templates/layout.php'); ?>

