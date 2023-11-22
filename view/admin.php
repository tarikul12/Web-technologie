<?php
    session_start();
    if (!isset($_SESSION["logged_user_data"])){
        header('location: login.php');
        exit();
    }
    if($_SESSION['logged_user_data']['role'] != 'admin') {
        header('location: login.php');
        exit();
    }

    require_once("../model/userModel.php");
    $logged_user = getUser($_SESSION['logged_user_data']['email']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
</head>

<body>
<?php require("header.php"); ?>
    <h3 align="center">Admin Dashboard</h3>
    <table align="center">
        <tr>
            <td align="center">

                <fieldset>
                    <a href="user-list.php">Manage User</a> <br><br>
                    <a href="update-profile.php">Update Profile</a>
                </fieldset>

            </td>
        </tr>
    </table>
    <?php require("footer.php"); ?>
    

</body>

</html>