<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Stagiaires</title>
</head>
<body>
<ul>
<?php foreach($stagiaires as $s):?>
        <li>
            <?= $s['sexe'] ==='M' ? 'Mr' : 'Mme'?>
            <?= strtoupper($s['nom']) ?>
            <?= ucwords($s['prenom']) ?>
        </li>
        <?php endforeach ?>
    </ul>


</body>
</html>