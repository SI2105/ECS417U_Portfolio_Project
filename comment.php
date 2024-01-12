<section class='comments'>
    
    <h2>Comments</h2>
    <?php
    echo '<form class="newcomment" method="get" action="commentprocessing.php"id="'.$post["POSTID"].'">';
    ?>
    <textarea name='comment' cols='60' rows='5' placeholder='Enter your Comment'></textarea>
    <?php
    echo '<input type="hidden" id="postID" name="postID" value="'.$post["POSTID"].'"> </input>';
    ?>
        <input type='submit' value='Send'></input>
    </form>

    <?php

    include "database.php";

    $currentpostid = $post["POSTID"];
    $sql = "SELECT * FROM COMMENTS WHERE POSTID = '$currentpostid' ";
    $result = $conn->query($sql) ;

    if($result->num_rows > 0){
        $comments = null;

        while($row = $result->fetch_assoc() ){
            $comments[] = $row;
        }
        for($i = 0; $i <count($comments); $i++ ){
            for($j = 0; $j <count($comments)-1; $j++){
                
                if($comments[$j]["time"] < $comments[$j+1]["time"]){
                    $temp = $comments[$j+1];
                    $comments[$j+1] = $comments[$j];
                    $comments[$j] = $temp;
                }
            }
    
        }

        $conn->close();

        

        for($z = 0; $z <count($comments); $z++ ){
            
            $comment = $comments[$z];

            
            $name = returnname($comment["USERID"]);

            echo("<section class='comment'>
                <p class= 'user'>".$name."</p>
                <p class='commentcontent'>".$comment["comment"]."</p>
                <p class= 'commenttime'>".$comment["time"]."</p>"
                );


            if($_SESSION["username"] == "SI04"){

                echo('<form class="deleteform" method="get" action="deleteprocessing.php" id="'.$comment["COMMENTID"].'">
                <button type= "submit "class="delete" >&#10060</button>
                <input type="hidden" name="commentID" value="'.$comment["COMMENTID"].'"></input>
                </form>');
            }
                
                
            echo("</section>");
            
        }
    }


    ?>
</section>

