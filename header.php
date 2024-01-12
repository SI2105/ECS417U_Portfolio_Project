<header>
            <div id="hamburgermenu">
                <svg viewBox="0 0 100 80" width="40" height="40">
                <rect width="100" height="20" rx = "10"></rect>
                <rect y="30" width="100" height="20" rx = "10"></rect>
                <rect y="60" width="100" height="20" rx = "10"></rect>
              </svg>
            </div>
            <hgroup id="title">
                <h1><a href="index.php#home">Sakibul Islam</a></h1>
            </hgroup>
            <nav>
                <ul id="navoptions">
                    <li><a href="about_me.php#about_me">About Me</a></li>
                    <li><a href="about_me.php#experience">Experience</a></li>
                    <li><a href="skills.php#skills">Skills</a></li>
                    <li><a href="education.php#education">Education</a></li>
                    <li><a href="portfolio.php#portfolio">Portfolio</a></li>
                    <li><a href="viewBlog.php#blog">Blog</a></li>
                    <li><a href="contactme.php#contactme">Contact Me</a></li>
                    <?php 
                    session_start();
                    if(isset($_SESSION['username'])){
                        if($_SESSION['username']== "SI04"){
                            printf("<li><a href=\"addEntry.php\">Add Post</a></li>");
                        }
                        printf("<li><a href=\"logout.php\">Logout</a></li>");

                        
                    }


                    else{

                        printf("<li><a href=\"login.html#login\">Login</a></li>");
                        
                    }
                    ?>
                    
                </ul>
            </nav>            
        </header>