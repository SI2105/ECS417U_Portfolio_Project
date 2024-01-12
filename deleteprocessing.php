<?php
include "database.php";
$id = $_GET["commentID"];
$sql = "DELETE FROM COMMENTS WHERE COMMENTID='$id'";

    if ($conn->query($sql) === TRUE) {
      
        header('Location: /ECS417U_Mini_Project/viewBlog.php');
    }

    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>