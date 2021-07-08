<?php include_once 'sidebar.php'?>
<html>
    <head>
        <title>Sign-up.</title>
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
    <section>
    <div class="box" style="height:auto; padding-bottom: 30px;">
        <div class="login_box">
        <div class="title">
        <h1 class="log">Sign-up.</h1>
        <p>Use your Access Account</p>
        </div>
        <form action="include/signup.inc.php" method="post">
        <table>
            <div class="sidetext">
                <div class="left">
                <p>Nama Depan</p>
                <input type="text" name="fname" placeholder="Enter First Name">
                </div>
                <div class="right">
                <p>Nama Belakang</p>
                <input type="text" name="lname" placeholder="Enter Last Name">
                </div>
            </div>
            <p>E-mail</p>
            <input type="text" name="email" placeholder="Enter E-mail">
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Enter Password">
            <p>Confirm Password</p>
            <input type="password" name="repwd" placeholder="Confirm Password">
            <input type="submit" name="submit" value="Login">
            <div class="error">
            <?php
                if(isset($_GET["error"])){
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p>Fill in all fields!</p>";
                    }
                    if ($_GET["error"] == "invalidemail") {
                        echo "<p>Invalid Email!</p>";
                    }
                    if ($_GET["error"] == "pwdnotmatch") {
                        echo "<p>Password doesn't match!</p>";
                    }
                    if ($_GET["error"] == "emailtaken") {
                        echo "<p>This email is already registered!</p>";
                    }
                    if ($_GET["error"] == "stmtfailed") {
                        echo "<p>Something went wrong, try agaian!</p>";
                    }
                    if ($_GET["error"] == "none") {
                        echo "<p>You have signed up!</p>";
                    }
                }
            ?>
            </div>
            <a href="log-in.php">I have an account</a>
        </form>
        </div>
        </div>
        </section>
    </body>
</html>

