<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>

<!--        <ul>-->
<!---->
<!--            --><?php //foreach ($noms as $nom) : ?>
<!--           <li>--><?//= $nom?><!--</li>-->
<!--            --><?php //endforeach; ?>
<!--        </ul>-->

        <ul>
            <?php foreach ($person as $feature => $featureValue) : ?>
            <li><strong><?= $feature ?></strong></li>
            <?php endforeach; ?>

        </ul>



    </h1>
</body>
</html>