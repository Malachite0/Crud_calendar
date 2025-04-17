<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Agenda Detail</title>
</head>
<body>
<h1>Agenda Detail</h1>
<div class="detail-container">
    <?php if ($aantalRijen > 0) {
        // Assuming there is only one result for the ID
        $rij = $resultaten[0]; ?>
        <div class="detail-item">
            <h2><?= htmlspecialchars($rij['Onderwerp']) ?></h2>
            <p><strong>Inhoud:</strong> <?= htmlspecialchars($rij['Inhoud']) ?></p>
            <p><strong>Begin datum:</strong> <?= htmlspecialchars($rij['BeginDatum']) ?></p>
            <p><strong>Eind datum:</strong> <?= htmlspecialchars($rij['EindDatum']) ?></p>
            <p><strong>Prioriteit:</strong> <?= htmlspecialchars($rij['Prioriteit']) ?></p>
            <p><strong>Status:</strong> <?= htmlspecialchars($rij['Status']) ?></p>

            <h3>Acties</h3>
            <a href="agenda_bewerken.php?ID=<?= $rij['ID'] ?>">Bewerken</a>
            <a href="agenda_verwijderen.php?ID=<?= $rij['ID'] ?>">Verwijderen</a>
            <a href="agenda.php">Terug naar Agenda</a>
        </div>
    <?php } else { ?>
        <p>Geen details gevonden voor dit item.</p>
    <?php } ?>
</div>
</body>
</html>
