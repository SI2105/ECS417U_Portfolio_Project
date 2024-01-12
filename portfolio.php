<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/portfolio.css">
        <link rel="stylesheet" href="css/mobile.css"media="screen and (max-width: 768px)"> 
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



        <article id="portfolio">
         
            <h2 class="pageheader">Portfolio</h2>
            
            <section id="project1">

                <h2>
                    Revision Quiz Web App - A-Level CS Project
                </h2>

                <h3>
                    Description:
                </h3>

                <p>An Revision Quiz Web App that allows secondary school pupils to help revise their exam
                    content by providing a fast and intuitive quiz application that allows them 
                    to revise from quizzes made by their teacher. The program has a role-based authentication system
                    that identifies the user by their username and password, and additionally checks what role a given user is.
                    Students can see all the quizzes available and are able to answer them. They can also view their own results.
                    While teachers can edit quizzes and see the results of all the students registered in the system.
                </p>

                <h3>
                    Implementation:
                </h3>

                <p>This project was created as a Web application using the Python based Web
                    framework , Flask. For the UI, HTML and CSS was used along with the CSS framework
                    Bootstrap. Some JavaScript was also used for the graphs in the results section.
                    To store all the data required for the program, a MYSQL data base was implmented, using the Object-Relation-Mapper, SQLAlchemy.
                </p>

                <h3>
                    Images:
                </h3>

                <figure>
                    <img src="images/Project1.jpg" alt="">
                    <figcaption>
                        Screenshot of UI from the project
                    </figcaption>
                </figure>




            </section>
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