<?php
include "database.php";
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['comment'])){
    $commentinput = $_GET['comment'];
    $userid = $_SESSION['userID'];
    $postid = $_GET["postID"];
    $sql = "INSERT INTO COMMENTS (comment, USERID, POSTID)
    VALUES ('$commentinput','$userid','$postid')";
   if ($conn->query($sql) === TRUE) {
    header('Location: /ECS417U_Mini_Project/viewBlog.php');
     } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }
     $conn->close();
    }
   
?>