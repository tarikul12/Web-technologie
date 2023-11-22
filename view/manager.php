<?php
session_start();


if (!isset($_SESSION["logged_user_data"])) {
    header('location: login.php');
    exit();
}

if ($_SESSION['logged_user_data']['role'] != 'manager') {
    header('location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
</head>

<body>
    <h3 align="center">Manager Dashboard</h3>
    <table align="center">
        <tr>
            <td align="center">

                <fieldset>
                    <a href="schedule-list.php">Schedule</a> <br><br>
                    <a href="user-list.php">User List</a> <br><br>
                    <a href="update-profile.php">Update Profile</a>
                </fieldset>

            </td>
        </tr>
    </table>
    <?php require("footer.php"); ?>


</body>

</html>