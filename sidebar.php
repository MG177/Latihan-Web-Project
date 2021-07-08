<?php
    session_start();
?>

<html>
  <head>
 <link rel="stylesheet" href="style/side.css">
  </head>
  <body><div class="area"></div><nav class="main-menu">
            <ul>
                <?php
                if (isset($_SESSION["fname"])) {
                    echo "
                    <li>
                    <a href=\"profile.php\">
                        <i class=\"fa home fa-2x\"><img src=\"img/Ganteng.jpg\" alt=\"profile-picture\" id=\"pp-mini\"></i>
                        <span class=\"nav-text\">".
                        $_SESSION["fname"]
                        ."</span>
                    </a>
                <li>
                    ";
                }
                ?>
                
                <li>
                    <a href="index.php">
                        <i class="fa home fa-2x"><img src="icon/home.png"></i>
                        <span class="nav-text">
                            Home
                        </span>
                    </a>
                <li>
                    <a href="profile.php">
                       <i class="fa Education fa-2x"><img src="icon/education.png"></i>
                        <span class="nav-text">
                            Education
                        </span>
                    </a>
                </li>
                <li>
                    <a href="employment.html">
                       <i class="fa Employment fa-2x"><img src="icon/employment.png"></i>
                        <span class="nav-text">
                            Employment
                        </span>
                    </a>
                </li>
                <li>
                    <a href="skill.html">
                        <i class="fa skill fa-2x"><img src="icon/skill.png"></i>
                        <span class="nav-text">
                            Skills
                        </span>
                    </a>
                </li>
                <li>
                   <a href="contact.html">
                        <i class="fa contact fa-2x"><img src="icon/contact.png"></i>
                        <span class="nav-text">
                            Contact me
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="sign">
                <li>
                   <a href="include/logout.inc.php">
                         <i class="fa out fa-2x"><img src="icon/out.png"></i>
                        <span class="nav-text">
                            Log-out
                        </span>
                    </a>
                </li> 
                <li>
                   <a href="log-in.php">
                         <i class="fa out fa-2x"><img src="icon/out.png"></i>
                        <span class="nav-text">
                            Sign-In
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
  </body>
    </html>