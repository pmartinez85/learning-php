<?php require 'partials/header.php' ?>
<hi>
    <ul>
        <?php foreach ($tasks as  $task) : ?>
            <li>
                <?php if($task->completed) : ?>
                    <span style="text-decoration: line-through;"><?= $task->description ?></span>
                <?php else : ?>
                    <?= $task->description ?>
                <?php endif;?>
            </li>
        <?php endforeach; ?>
    </ul>

</hi>
<?php require 'partials/footer.php' ?>
