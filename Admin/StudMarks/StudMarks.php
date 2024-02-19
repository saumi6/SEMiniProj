<?php
    try{
    $rollNo=$_POST["studentName"];
    $sem=$_POST["semester"];
    $sub1=$_POST["sub1"];
    $sub2=$_POST["sub2"];
    $sub3=$_POST["sub3"];
    $sub4=$_POST["sub4"];
    $sub5=$_POST["sub5"];
    $semester = "s" . $sem . "mark";
    require_once "../../dbh.inc.php";
    $query = "INSERT INTO $semester VALUES ($rollNo, $sub1, $sub2, $sub3, $sub4, $sub5);";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    header("Location: StudMarks.html");
    } catch (PDOException $e)
    {
        die("Query failed" . $e->getmessage());
    }
?>
