<?php

require 'config.php';

$resultaat = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $onderwerp = $_POST['onderwerp'];
    $inhoud = $_POST['inhoud'];
    $begindatum = $_POST['begindatum'];
    $einddatum = $_POST['einddatum'];
    $prioriteit = $_POST['prioriteit'];
    $status = $_POST['status'];

    try {
        $query = "INSERT INTO crud_agenda (Onderwerp, Inhoud, BeginDatum, EindDatum, Prioriteit, Status)
                  VALUES (:onderwerp, :inhoud, :beginDatum, :eindDatum, :prioriteit, :status)";

        $stmt = $conn->prepare($query);

        $stmt->execute([
            'onderwerp' => $onderwerp,
            'inhoud' => $inhoud,
            'beginDatum' => $begindatum,
            'eindDatum' => $einddatum,
            'prioriteit' => $prioriteit,
            'status' => $status
        ]);

        if ($stmt->rowCount()) {
            $resultaat = "{$onderwerp} is toegevoegd!";
        } else {
            $resultaat = "er is iets fout gegaan!";
        }
    } catch (PDOException $e) {
        $resultaat = "fout bij het toevoegen: " . $e->getMessage();
    }

} else {
    $resultaat = "formulier is niet correct verstuurd";
}

include './views/agenda_toevoegen_view.php';
