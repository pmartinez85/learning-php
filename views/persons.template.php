<?php require 'partials/header.php' ?>
    <hi>

        <ul>
            <?php /** @var TYPE_NAME $tasks */
            foreach ($tasks as $task) : ?>
                <li>
                    <?= $task->FirstName ?>
                </li>
            <?php endforeach; ?>
        </ul>

    </hi>
<?php require 'partials/footer.php' ?>