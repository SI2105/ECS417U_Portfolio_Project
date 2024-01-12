<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/addEntry.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Rubik:wght@700&display=swap" rel="stylesheet">
        <script src="js/home.js" defer></script>
        <title>Sakibul Islam Portfolio</title>
    </head>
<body>
    <div class="container">

        <?php
        include "header.php";
        ?>



        
        <form method="post" action="addPost.php" id="addpost" >
            <fieldset>
                <legend>Add Post</legend>

                <br>
                <input type="text" name="title" id="post_title" placeholder="Title" oninput="resetfields(event)">

                <br>

                <textarea name="post" id="post" cols="30" rows="10" placeholder="Enter Post Here" oninput="resetfields(event)" ></textarea>

                <section id="buttons">
                    <input type="submit" class="submit" value="Post" onclick="checkfields(event)">
                    <input class="reset" type="reset" value="Clear" onclick="clearfields(event)">
                </section>
        
            </fieldset>
        </form>


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