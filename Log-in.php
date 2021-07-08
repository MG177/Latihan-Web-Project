<?php include_once 'sidebar.php'?>
<html>
    <head>
        <title>Login.</title>
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        <section>
        <div class="box" style="height:auto; padding-bottom: 30px;">
        <div class="title">
        <h1 class="log">Sign-in.</h1>
        <p>Use your Access Account</p>
        </div>
        <form action="include/login.inc.php" method="post">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Username">
            <p>Password</p>
            <input type="text" name="pwd" placeholder="Enter Password">
            <label class="checkboxx">
                <input type="checkbox">
                <span class="checkmark"></span>
                <span style="font-weight: none;">Remember me</span>
            </label>
            <!-- <button type="submit" name="submit">Login</button> -->
            <input type="submit" name="submit" value="Login">
            </form>
            <div class="error">
            <?php
                if(isset($_GET["error"])){
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p>Fill in all fields!</p>";
                    }
                    if ($_GET["error"] == "wronglogin") {
                        echo "<p>Failed to login!</p>";
                    }
                }
            ?>
            </div>
            <a href="#">Forget Password?</a><br>
            <a href="sign-up.php">Don't have an account?</a>
        
        </div>
        </section>
    </body>
</html>