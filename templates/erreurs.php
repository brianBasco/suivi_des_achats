<?php $title = "Erreurs"; ?>

<?php ob_start(); ?>

<?php
        foreach($liste_des_erreurs as $erreur) {
        
           echo '<div class="alert alert-danger" role="alert">
                    '.$erreur.'
                </div>';
          
        }
?>

       
<?php $content = ob_get_clean(); ?>

<?php require('templates/layout.php'); ?>
