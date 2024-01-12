<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/mobile.css"media="screen and (max-width: 768px)"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Roboto&family=Rubik:wght@700&family=Tilt+Warp&display=swap" rel="stylesheet">
    <script src="js/home.js" defer></script>
    <title>Sakibul Islam Portfolio</title>
    
</head>
<?php include "database.php"?>
<body>
    <div class="container">
        <?php include "header.php"?>

        <article id="home">
            <h2 class="pageheader">
                Welcome to My Portfolio
            </h2>

            <section id="bio">
                <p>My Name is Sakibul Islam, I am a Computer Science student at Queen Mary, University Of London and an Aspiring Software Engineer.</p>
                <p>This portfolio website contains my all Skills, Education and Contact details you may require.</p>
                <p>I also have detailed any projects I have done along with a Blog which I hope you will enjoy.</p>
            </section>
            <figure>
                <img src="images/Mypicture.jpg" alt="">
            </figure>
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