<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/style.css">

    <title>agenda item Bijwerken</title>
</head>
<body>

<h1>agenda item bijwerken</h1>
<a href="agenda.php"><button class="center"><span>home</span></button></a>

<?php if ($aantalRijen > 0) {
// Assuming there is only one result for the ID
    $rij = $resultaten[0]; ?>
<div class="detail-item">

<form action="agenda_bewerken_verwerk.php" method="post">

        <input type="hidden" name="ID" value="<?=$rij['ID']?>" required>

        <label for="onderwerp">Onderwerp:</label>
        <input type="text" id="onderwerp" name="onderwerp" value="<?=$rij['Onderwerp']?>" required>
        <br><br>

        <label for="inhoud">Inhoud:</label>
        <textarea id="inhoud" name="inhoud" required><?= $rij['Inhoud'] ?></textarea>
        <br><br>

        <label for="begindatum">Begindatum:</label>
        <input type="date" id="begindatum" name="begindatum" value="<?=$rij['BeginDatum']?>" required>
        <br><br>

        <label for="einddatum">Einddatum:</label>
        <input type="date" id="einddatum" name="einddatum" value="<?=$rij['EindDatum']?>" required>
        <br><br>

        <label for="prioriteit">Prioriteit:</label>
        <input type="number" id="prioriteit" name="prioriteit" min="1" max="5" value="<?=$rij['Prioriteit']?>" required>
        <br><br>

        <label for="status">Status:</label>
        <select id="status" name="status" value="<?=$rij['Status']?>" required>
            <option value="n">niet bezig</option>
            <option value="a">afgerond</option>
            <option value="b">bezig</option>
        </select>
        <br><br>
        <button type="submit">Aanpassen</button>

    </form>
</div>
<?php } else { ?>
    <p>Geen info gevonden voor dit item.</p>
<?php } ?>
</body>
</html>