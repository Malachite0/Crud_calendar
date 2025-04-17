<?php

require 'config.php';


$resultaat = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $onderwerp = $_POST['onderwerp'];
    $inhoud = $_POST['inhoud'];
    $begindatum = $_POST['begindatum'];
    $einddatum = $_POST['einddatum'];
    $prioriteit = $_POST['prioriteit'];
    $status = $_POST['status'];
}

     try {
         $query = "UPDATE crud_agenda
         SET onderwerp = :onderwerp, inhoud = :inhoud, begindatum = :begindatum, einddatum = :einddatum, prioriteit = :prioriteit, status = :status
         WHERE ID = :ID";

         $stmt = $conn->prepare($query);

        $stmt->execute([
            "onderwerp" => $onderwerp,
            "inhoud" => $inhoud,
            "begindatum" => $begindatum,
            'einddatum' => $einddatum,
            "prioriteit" => $prioriteit,
            "status" => $status,
            "ID" => $ID
        ]);

        if ($stmt->rowCount()) {
            $resultaat = "$onderwerp is aangepast";
        } else {
            $resultaat = "$onderwerp is niet aangepast";
        }
         header('Location: agenda.php');

     } catch (PDOException $e) {
    $resultaat = "fout bij het toevoegen: " . $e->getMessage();
     }