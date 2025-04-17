<?php
require_once 'config.php';

try {
    $query = "SELECT * FROM crud_agenda";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $resultaten = $stmt->fetchAll();

    $aantalRijen = count($resultaten);

    include 'views/agenda_view.php';


} catch (PDOException $e) {
    echo "<p>FOUT!</p>";
    echo "<p>Query: " . $query . "</p>";
    echo "<p>Foutmelding: " . $e->getMessage() . "</p>";
}
?>
