<?php
include_once("connection.php");
header('Location: pupildoessubject.php');
$stmt = $conn->prepare("INSERT INTO tblpupilstudies (SubjectID,Userid,Classposition,Classgrade,Exammark,Comment)VALUES (:subjectname,:teachername,null,null,null,null)");
    $stmt->bindParam(':SubjectID', $_POST["subjectname"]);
    $stmt->bindParam(':UserID', $_POST["teachername"]);
    $stmt->execute();
    $conn=null;

?>