<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/viewBlog.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Rubik:wght@700&family=Tilt+Warp&display=swap" rel="stylesheet">
        <script src="js/home.js" defer></script>
        <title>Sakibul Islam Portfolio</title>
    </head>
<body>
    <div class="container">

        <?php
     
        include "header.php";
        include "getuser.php";?>
        
        <h2 class="pageheader">
            Blog
        </h2>

        <nav class="blognav">
            <form method="get">
                <label for="monthfilter">Filter by Month:</label>
                <select name="monthfilter" id="monthfilter">
                <option value='0' selected = "selected">All</option>
                
                <?php
                
                for($i = 01; $i<=12; $i++){
                    printf("<h1>$i</h1>");
                    $month = date("F",strtotime('24.'.$i.'.2023'));
                    printf("<option value='$i'>$month</option>");
                }
                ?>
                </select>

                <input type="submit" value="Filter"></input>

            </form>
        </nav>
       
        <article id="blog">


            <?php

                include "database.php";

                $isfiltered = false;
                
                if(isset($_GET['monthfilter']) && $_GET['monthfilter'] != "0"){
                    $filter = $_GET['monthfilter'];
                    $isfiltered = true;

                    $sql = "SELECT * FROM POSTS WHERE MONTH(time) = $filter";
                }

                else{
                    $sql = "SELECT * FROM POSTS";
                }
                

               
                $result = $conn->query($sql) ;
                


                if($result->num_rows > 0){

                    while($row = $result->fetch_assoc() ){
                        $posts[] = $row;
                    }

                    for($i = 0; $i <count($posts); $i++ ){
                        for($j = 0; $j <count($posts)-1; $j++){
                            if($posts[$j]["time"] < $posts[$j+1]["time"]){
                                $temp = $posts[$j+1];
                                $posts[$j+1] = $posts[$j];
                                $posts[$j] = $temp;
                            }
                        }
                
                    }

                    

                    for($x = 0; $x <count($posts); $x++ ){
                        
                        $post = $posts[$x];

                        echo("<section class='post'>
                            <h2 class='title'>".$post["title"]."</h2>
                            
                            <p class='postcontent'>".$post["post"]."</p>
                            <p class= 'time'>".$post["time"]."</p>");
                            
                        include "comment.php";
                            
                        echo("</section>");
                        
                    }

                }

                else{
                    if($isfiltered){
                        echo("<p>No Blog Entries for ".date("F",strtotime('24.'.$filter.'.2023'))."</p>");
                    }
                    else{
                        printf("<p>No Blog Entries yet Check back later</p>");
                    }
                    
                }


            ?>
         
        </article>

        <footer>
            <ul>
                <li>Sakibul Islam ©</li> 
                <li><a href="https://www.linkedin.com/in/sakibul-islam-72a283200/" target="_blank" rel="noopener noreferrer"> Linkedin</a></li> 
                <li><a href="https://github.com/SI2105/" target="_blank" rel="noopener noreferrer"> Github</a></li>
                <li><a href="mailto: sakibul-islam@outlook.com" target="_blank" rel="noopener noreferrer"> Email</a></li>
            </ul>
        </footer>

    </div>

    

    
</body>
</html>