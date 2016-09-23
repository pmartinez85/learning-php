<?php require 'partial/header.php' ?>
//VIDEO 17 DE LA SERIE
//FICAR TOTES LES VISTES SOLS EN UNA, DE MANERA QUE SOLS HI HAGI UNA AMB html
    <?php require 'menu.php' ?>

    <ul>
        <?php foreach ($persons as $person) : ?>
            <li>
                <?= $person->LastName ?>

            </li>
        <?php endforeach;?>
    </ul>

