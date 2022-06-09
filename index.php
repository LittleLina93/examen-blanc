<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName ?><?= isset($title) ? " - $title" : '' ?></title>
    <link rel="stylesheet" href="index.css">
</head>
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light"> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</header>
<body> 
<?php require('liste_stagiaires.php');?>

<?php foreach ($stagiaires as $s):/*{
    switch($s["sexe"]) {
        case "M" : echo "Monsieur ";
        break;
        case "F" : echo "Madame ";
        break;
        default:
            echo "Autre ";
        break;
    }*/?>
    <ul>
        <li>
            <?= $s['sexe'].' '. $s['nom'].' '.$s['prenom'].'<br>';?> 
        </li>
    </ul>
<?php endforeach ?>
    
      

</body>
</html>