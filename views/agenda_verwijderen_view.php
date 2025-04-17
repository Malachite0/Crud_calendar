<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/style.css">

    <title>verwijderen</title>
</head>
<body>
    <h1>Agenda-item verwijderen</h1>
    <a href="agenda.php"><button class="center"><span>home</span></button></a>
    <div class="detail-item">

    <?php
    if ( $aantalRijen > 0) {
        $rij = $resultaten[0];
    ?>
<dl>
    <dt><strong>Id:</strong></dt>
    <dd><?= $rij['ID'] ?></dd>
    <dt><strong>Onderwerp:</strong></dt>
        <dd><?= $rij['Onderwerp'] ?></dd>
    <dt><strong>Inhoud:</strong></dt>
    <dd><?= $rij['Inhoud'] ?></dd>
</dl>
        <p>weet je het zeker?
        <a href="verwijder_verwerk.php?ID=<?=$rij['ID']?>">JA</a></p>
    </div>
<?php } else { ?>
    <p>Geen resultaat gevonden</p>
    <?php } ?>
</body>
</html>