<?php

function returnname($id){
    include "database.php";
    $sql = "SELECT firstName,lastName,username FROM USERS WHERE ID='$id'";
    $result = $conn->query($sql) ;

    if ($result->num_rows > 0) {
        $values = $result->fetch_assoc();
        $fname = $values["firstName"];
        $lname = $values["lastName"];
        $username = $values["username"];

        return $fname." ".$lname."(".$username.")";

    }

    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

}
?>