<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/style.css">

    <title>agenda item teovoegen</title>
</head>
<body>
<h1>Niew Agenda Item Toevoegen</h1>
<a href="agenda.php"><button class="center"><span>home</span></button></a>
<div class="detail-item">


<form action="agenda__verwerk.php" method="POST">

    <label for="onderwerp">Onderwerp: </label>
    <input type="text" id="onderwerp" name="onderwerp" required>
    <br><br>

    <label for="inhoud">Inhoud:</label>
    <textarea id="inhoud" name="inhoud" required></textarea>
    <br><br>

    <label for="begindatum">Begindatum:</label>
    <input type="date" id="begindatum" name="begindatum" required>
    <br><br>

    <label for="einddatum">Einddatum:</label>
    <input type="date" id="einddatum" name="einddatum" required>
    <br><br>

    <label for="prioriteit">Prioriteit:</label>
    <input type="number" id="prioriteit" name="prioriteit" min="1" max="5" required>
    <br><br>

    <label for="status">Status:</label>
    <select id="status" name="status" required>
        <option value="n">niet bezig</option>
        <option value="a">afgerond</option>
        <option value="b">bezig</option>
    </select>
    <br><br>
    <input type="submit" value="Toevoegen">
</div>
</form>
</body>
</html>