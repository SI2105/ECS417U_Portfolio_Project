        <?php
        include "database.php";
        $username = $_POST["username"];
        $password = $_POST["password"];        

        $sql = "SELECT * FROM USERS WHERE username= '$username' AND password= '$password' ";
        $result = $conn->query($sql) ;
    
       
        if($result->num_rows > 0){
       
            $values = $result->fetch_assoc();
            session_start();
            $_SESSION['userID'] = $values["ID"];
            $_SESSION['firstName'] = $values["firstName"];
            $_SESSION['lastName'] = $values["lastName"];
            $_SESSION['username'] = $values["username"];
            if($_SESSION['username']== "SI04"){
                header('Location: /ECS417U_Mini_Project/addEntry.php');
            }

            else{

                header('Location: /ECS417U_Mini_Project/index.php');

            }



        }

        else{
            printf("<article>
            <p>Unsuccesfull Login<br>These details do not match</p>
            </article>");

        }

        $conn->close();



        ?>
