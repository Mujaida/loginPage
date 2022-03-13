<?php
include "nav.php";
?>
<html lang="en">
<head>
</head>
<body>
    <div class="emirates">
    <form action="register1.php" method="POST">
        <div class="page-lg">
        <center>
            <table>
                <h1>Register</h1>
            <tbody>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name = "uname" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name = "email" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="paswd" 
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="cnfpaswd" 
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td>
                </tr>
                <tr>
                <tr>
                    <td>Place</td>
                    <td><input type="text" name = "place" required></td>
                </tr>
                    <td></td>
                    <td><button type="submit" name="register" class="btn">Register</button></td>
                </tr>
            </tbody>
        </table>
        </form>
        <form action="index.php" method="POST">
        <table>
            <tr>
            <td><p>Already have an account? </p></td>
            <td><button type="submit" name="login" class="btn">Login</button></td>
            </tr>
        </table>
        </center>
    </div>
    </form>
    </div>
</body>
</html>