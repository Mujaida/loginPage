<?php
include "nav.php";
?>
<html lang="en">
<head>
</head>
<body>
    <div class="column">
    <form action="login.php" method="POST">
        <div class="page-lg">
        <center>
            <table>
                <h1>Login</h1>
            <tbody>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name = "uname" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="paswd" 
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="login" class="btn">Login</button></td>
                </tr>
            </tbody>
        </table>
        </form>
        <form action="register.php" method="POST">
        <p>Don't have an account yet? </p>
        <button type="submit" name="register" class="btn">Register Now</button>
        </center>
    </div>
    </form>
    </div>
</body>
</html>