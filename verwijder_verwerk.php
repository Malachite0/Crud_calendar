<?php

require 'config.php';

$ID = $_GET['ID'];
try{
    $query ="DELETE FROM crud_agenda WHERE ID = :ID";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':ID', $ID);
    $stmt->execute();

    if($stmt->rowCount()) {
        $resultaat = "Het item is verwijdert!";
    } else {
        $resultaat = "Er is een fout opgetreden tijdend het verwijderen!";
    }
    header('Location: agenda.php');

} catch (PDOException $e) {
    echo "<p>FOUT!</P>";
    echo "<p>Query: " . $query . "</p>";
    echo "<p>Fourmelding: " . $e->getMessage() . "</p>";
    exit;
}