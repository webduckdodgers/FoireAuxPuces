<section class="frame-objects-aleatoires flex-column">
    <h2>Découvrez les objets à vendre</h2>
    <div class="liste-objets">
        <?php
        for ($objet = 0; $objet < 3; $objet++) {
            $intitule = "L'intitule";
            $description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, veritatis earum explicabo dolor vel...";
            $categorie = "A";
            require __DIR__ . '/card_object.inc.php';
        }
        ?>
    </div>
    <a href="page_objets_vente.php" class="button-link">+</a>
</section>