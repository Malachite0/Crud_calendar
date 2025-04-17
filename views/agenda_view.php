<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Document</title>
</head>
<body>
<h1>Agenda</h1>
<a href="agenda_toevoegen_verwerk.php" class="btn btn-primary btn-lg mt-4"><button class="center"><span>toevoegen</span></button></a>
<?php
if($aantalRijen > 0) { ?>
    <ul>
        <?php foreach ($resultaten as $rij) { ?>
        <li>
            <strong>Onderwerp:</strong><?= $rij['Onderwerp'] ?><br>
            <strong>Inhoud:</strong><?= $rij['Inhoud'] ?><br>
            <strong>Begin datum:</strong><?= $rij['BeginDatum'] ?><br>
            <strong>Eind datum:</strong><?= $rij['EindDatum'] ?><br>
            <strong>Prioriteid:</strong><?= $rij['Prioriteit'] ?><br>
            <strong>Status:</strong><?= $rij['Status'] ?><br>


            <a href="agenda_detail.php?ID=<?= $rij['ID'] ?>">Details</a><br>
            <strong>Acties:</strong>
            <a href="agenda_bewerken.php?ID=<?= $rij['ID'] ?>">Bewerken</a>
            <a href="agenda_verwijderen.php?ID=<?= $rij['ID'] ?>">Verwijderen</a>
        </li>
        <hr>
        <?php } ?>
    </ul>
<?php } else { ?>
<p>Geen resultaten gevonden</p>
<?php } ?>

</body>
</html>

