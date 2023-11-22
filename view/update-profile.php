<?php
session_start();
if (!isset($_SESSION["logged_user_data"])) {
    header('location: login.php');
    exit();
}


require_once("../model/userModel.php");
if (isset($_GET['email'])) {
    $logged_user = getUser($_GET['email']);
} else
    $logged_user = $_SESSION["logged_user_data"];

if (isset($_GET['err'])) {
    echo "<h3 align='center'>Profile update requare valid data.</h3>";
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Profile</title>
</head>

<body>
<?php require("header.php"); ?>

    <h1 align="center">Update Profile</h1>
    <center>
        <table>
            <tr>
                <td align="center">
                    <fieldset>
                        <form method="POST" action="../controller/update-profile-process.php"
                            enctype="multipart/form-data">
                            <input type="hidden" name="who" value="<?= $logged_user['email'] ?>">
                            <table>
                                <tr>
                                    <td><label for="first_name">First Name:</label></td>
                                    <td><input type="text" value="<?= $logged_user['firstname'] ?>" id="first_name"
                                            name="first_name"></td>
                                </tr>
                                <tr>
                                    <td><label for="last_name">Last Name:</label></td>
                                    <td><input type="text" value="<?= $logged_user['lastname'] ?>" id="last_name"
                                            name="last_name"></td>
                                </tr>
                                <tr>
                                    <td><label for="email">Email Address:</label></td>
                                    <td><input type="email" value="<?= $logged_user['email'] ?>" id="email" name="email">
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="bloodG">Blood Group:</label></td>
                                    <td>
                                        <select id="bloodG" name="bloodG">
                                            <option value="A+" <?php if ($logged_user['bloodG'] === 'A+')
                                                echo 'selected' ?>>A+
                                                </option>
                                                <option value="A-" <?php if ($logged_user['bloodG'] === 'A-')
                                                echo 'selected' ?>>A-
                                                </option>
                                                <option value="B+" <?php if ($logged_user['bloodG'] === 'B+')
                                                echo 'selected' ?>>B+
                                                </option>
                                                <option value="O+" <?php if ($logged_user['bloodG'] === 'O+')
                                                echo 'selected' ?>>O+
                                                </option>
                                                <option value="AB+" <?php if ($logged_user['bloodG'] === 'AB+')
                                                echo 'selected' ?>>AB+
                                                </option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><label for="dob">Date of Birth:</label></td>
                                        <td><input type="date" value="<?= $logged_user['dob'] ?>" id="dob" name="dob" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Gender:</label></td>
                                    <td>
                                        <input type="radio" id="male" name="gender" value="male" <?php if ($logged_user['gender'] === 'male')
                                            echo 'checked' ?>>
                                            <label for="male">Male</label>
                                            <input type="radio" id="female" name="gender" value="female" <?php if ($logged_user['gender'] === 'female')
                                            echo 'checked' ?>>
                                            <label for="female">Female</label>
                                            <input type="radio" id="other" name="gender" value="other" <?php if ($logged_user['gender'] === 'other')
                                            echo 'checked' ?>>
                                            <label for="other">Other</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="country">Country:</label></td>
                                        <td>
                                            <select id="country" name="country">

                                                <option value="Bangladesh" <?php if ($logged_user['country'] === 'Bangladesh')
                                            echo 'selected' ?>>Bangladesh</option>
                                                <option value="India" <?php if ($logged_user['country'] === 'India')
                                            echo 'selected' ?>>India</option>
                                                <option value="United Kingdom" <?php if ($logged_user['country'] === 'United Kingdom')
                                            echo 'selected' ?>>United Kingdom</option>
                                                <option value="US" <?php if ($logged_user['country'] === 'US')
                                            echo 'selected' ?>>US
                                                </option>
                                                <option value="Other" <?php if ($logged_user['country'] === 'Other')
                                            echo 'selected' ?>>Other</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="phone">Phone Number:</label></td>
                                        <td><input type="tel" value="<?= $logged_user['phone'] ?>" id="phone" name="phone"></td>
                                    <!-- pattern="[0-9]{3}-[0-9]{7}" -->
                                </tr>
                                <tr>
                                    <td><label for="profile-picture">Profile Picture:</label></td>
                                    <td><input type="file" id="profile-picture" name="image"></td>

                                </tr>

                                <tr>
                                    <td align="right" colspan="2">
                                        <input type="submit" value="update" name="update">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </fieldset>
                </td>
            </tr>
        </table>
    </center>
    <?php require("footer.php"); ?>

</body>

</html>