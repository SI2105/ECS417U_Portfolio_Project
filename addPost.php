<?php


include "database.php";

session_start();

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['title'];
    $post = $_POST['post'];
    date_default_timezone_set('Europe/London');
    $time = date("Y-m-d H:i:s");
    $USERID = $_SESSION['userID'];
    $sql = "INSERT INTO POSTS (title, post, time, USERID)
    VALUES ('$title','$post','$time','$USERID')";
    if ($conn->query($sql) === TRUE) {
        header('Location: /ECS417U_Mini_Project/viewBlog.php');
    } 
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
 }
?>