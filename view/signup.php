<?php
if (isset($_GET['err'])) {
    echo "<h3 align='center'>Please fill the form properly. Please try again.</h3>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
</head>

<body>
    <h1 align="center">Registration Form</h1>
    <center>
        <table>
            <tr>
                <td align="center">
                    <fieldset>
                        <form method="POST" action="../controller/signup-process.php" enctype="multipart/form-data">
                            <table>
                                <tr>
                                    <td><label for="first_name">First Name:</label></td>
                                    <td><input type="text" id="first_name" name="first_name"></td>
                                </tr>
                                <tr>
                                    <td><label for="last_name">Last Name:</label></td>
                                    <td><input type="text" id="last_name" name="last_name"></td>
                                </tr>
                                <tr>
                                    <td><label for="email">Email Address:</label></td>
                                    <td><input type="email" id="email" name="email">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="password">Password:</label></td>
                                    <td><input type="password" id="password" name="password"></td>
                                </tr>
                                <tr>
                                    <td><label for="bloodG">Blood Group:</label></td>
                                    <td>
                                        <select id="bloodG" name="bloodG">
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="O+">O+</option>
                                            <option value="AB+">AB+</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="dob">Date of Birth:</label></td>
                                    <td><input type="date" id="dob" name="dob" required></td>
                                </tr>
                                <tr>
                                    <td><label>Gender:</label></td>
                                    <td>
                                        <input type="radio" id="male" name="gender" value="male">
                                        <label for="male">Male</label>
                                        <input type="radio" id="female" name="gender" value="female">
                                        <label for="female">Female</label>
                                        <input type="radio" id="other" name="gender" value="other">
                                        <label for="other">Other</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="country">Country:</label></td>
                                    <td>
                                        <select id="country" name="country">
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="India">india</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="US">US</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="phone">Phone Number:</label></td>
                                    <td><input type="tel" id="phone" name="phone"></td>
                                    <!-- pattern="[0-9]{3}-[0-9]{7}" -->
                                </tr>
                                <tr>
                                    <td><label for="profile-picture">Profile Picture:</label></td>
                                    <td><input type="file" id="profile-picture" name="image"></td>

                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="checkbox" id="terms" name="terms">
                                        <label for="terms">Terms and Conditions:</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right" colspan="2">
                                        <input type="submit" value="Submit" name="submit_button">
                                        <input type="reset" value="Reset">
                                    </td>
                                </tr>
                                <tr>
                                <td colspan="2" align="center">
                                    Already have an accout?<a href="login.php"> Login</a>
                                </td>
                            </tr>
                            </table>
                        </form>
                    </fieldset>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>