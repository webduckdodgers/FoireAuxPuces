<!DOCTYPE html>
<html lang="fr">

<?php
$title = "Objets | Grande Brocante d'Outremeuse";
require __DIR__ . "/inc/balise_head.inc.php";
?>

<body>
    <?php require __DIR__ . "/inc/balise_header.inc.php" ?>
    <main>
        <?php require __DIR__ . "/inc/titre_objets.inc.php" ?>
        <?php require __DIR__ . "/inc/formulaire_chercher_des_objets.inc.php" ?>
        <?php require __DIR__ . "/inc/frame_liste_objets_vente_inc.php" ?>
    </main>
    <?php require __DIR__ . "/inc/balise_footer.inc.php" ?>
</body>

</html>