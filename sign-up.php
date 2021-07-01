<html>
    <head>
        <title>Sign-up.</title>
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        <div class="login_box">
        <img src="img/user.svg" class="avatar">
        <div class="title">
        <h1 class="log">Sign-up.</h1>
        <p>Use your Access Account</p>
        </div>
        <form action="include/signup.inc.php" method="post">
        <table>
            <tr>
                <td><p>Nama Depan</p></td>
                <td><p>Nama Belakang</p></td>
            </tr><tr class="namu">
                <td><input type="text" name="fname" placeholder="Enter First Name"></td>
                <td><input type="text" name="lname" placeholder="Enter Last Name"></td>
            </tr>
        </table>
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
            <a href="#">Forget Password?</a><br>
            <a href="#">Don't have an account?</a>
        </form>
        </div>




    </body>
</html>

