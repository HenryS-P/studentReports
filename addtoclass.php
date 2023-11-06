<?php
include_once("connection.php");
header('Location: users.php');
$stmt = $conn->prepare("INSERT INTO tblpupilstudies (SubjectID,Userid,Classposition,Classgrade,Exammark,Comment)VALUES (:subjectname,:teachername,null,null,null,null)");
    $stmt->bindParam(':SubjectID', $_POST["subjectname"]);
    $stmt->bindParam(':UserID', $_POST["teachername"]);
    $stmt->bindParam(':Classposition', $_POST["house"]);
    $stmt->bindParam(':Exammark', $_POST["year"]);
    $stmt->bindParam(':Comment', $_POST["passwd"]);
    $stmt->execute();
    $conn=null;

?>