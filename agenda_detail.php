<?php

require 'config.php';

$ID = $_GET['ID'];

try {
    $query = "SELECT * FROM crud_agenda WHERE ID = :ID";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':ID', $ID);
    $stmt->execute();

    $resultaten = $stmt->fetchAll();

    $aantalRijen = count($resultaten);

    include 'views/agenda_detail_view.php';


} catch (PDOException $e) {
    echo "<p>FOUT!</p>";
    echo "<p>Query: " . $query . "</p>";
    echo "<p>Foutmelding: " . $e->getMessage() . "</p>";
}
?>
