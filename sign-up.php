<html>
    <head>
        <title>Sign-up.</title>
        <link rel="stylesheet" href="style/sign-up.css">
    </head>
    <body>
        <div class="login_box">
        <img src="img/user.svg" class="avatar">
        <div class="title">
        <h1 class="log">Sign-up.</h1>
        <p>Use your Access Account</p>
        </div>
        <form action="include/signup.inc.php">
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
            <a href="#">Forget Password?</a><br>
            <a href="#">Don't have an account?</a>
        </form>
        </div>
    </body>
</html>