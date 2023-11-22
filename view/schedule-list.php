<?php
 session_start();
 if (!isset($_SESSION["logged_user_data"])){
     header('location: login.php');
     exit();
 }

require_once("../model/scheduleModel.php");
require_once("../model/userModel.php");
$schedules = getAllSchedules();
$logged_user = getUser($_SESSION['logged_user_data']['email']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User List</title>
</head>

<body>
<?php require("header.php"); ?>

    <center>
        <h2>Schedule List</h2>
        <a href="create-schedule.php"><button>Add New Schedule</button></a>
        <br><br>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>Schedule ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Blood Group</th>
                <th>Gender</th>
                <th>Donate Date</th>
                <th>Manager Email</th>
                <th>Action</th>
            </tr>
            <?php
            $i = 1;
            foreach ($schedules as $schedule) {
                ?>
                <tr>
                    <td>
                        <?= $schedule['id'] ?>
                    </td>
                    <td>
                        <?= $schedule['name'] ?>

                    </td>
                    <td>
                        <?= $schedule['email'] ?>
                    </td>
                    <td>
                        <?= $schedule['phone'] ?>
                    </td>
                    <td>
                        <?= $schedule['bloodG'] ?>
                    </td>
                    <td>
                        <?= $schedule['gender'] ?>
                    </td>
                    <td>
                        <?= $schedule['donate_date'] ?>
                    </td>
                    <td>
                        <?= $schedule['added_by'] ?>
                    </td>
                    <td>
                        <a href="../controller/remove-schedule.php?id=<?=$schedule['id']?>"><button>Delete</button></a>
                    </td>
                </tr>
                <?php
                $i++;
            }

            ?>
        </table>
    </center>
    <?php require("footer.php"); ?>
</body>

</html>