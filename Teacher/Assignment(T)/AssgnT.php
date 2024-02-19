<?php
    $link = $_POST["link"];
    try{
    require_once "../../dbh.inc.php";
    $query = "INSERT INTO assignments VALUES ('$link');";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    header("Location: AssgnT.html");
    } catch (PDOException $e)
    {
        die("Query failed" . $e->getmessage());
    }