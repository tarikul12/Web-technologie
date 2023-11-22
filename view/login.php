<?php
if (isset($_GET['err'])) {
    echo "<h3 align='center'>Invalid Credentials. Please try again.</h3>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <center>
        <table border="1" cellpadding="20">
            <tr>
                <td>
                    <h1 align="center">Login</h1>
                    <form action="../controller/login-process.php" method="post">
                        <table>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" id="email" name="email"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" id="password" name="password"></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right"><input type="submit" value="Login" name="login"></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    New here?<a href="signup.php"> Signup</a>
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>