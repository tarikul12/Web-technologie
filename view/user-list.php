<?php
 session_start();
 if (!isset($_SESSION["logged_user_data"])){
     header('location: login.php');
     exit();
 }


require_once("../model/userModel.php");
$users = getAllUser();
$logged_user = getUser($_SESSION['logged_user_data']['email']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>

<body>
<?php require("header.php"); ?>
    <center>
        <h3>User List</h3>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
            $i = 1;
            foreach ($users as $user) {
                if($user['role']  == 'admin' && $_SESSION['logged_user_data']['role'] != 'admin') continue;
                ?>
                <tr>
                    <td>
                        <?= $i ?>
                    </td>
                    <td>
                        <?= $user['firstname'] . " " . $user['lastname'] ?>
                        <?php if ($user['email'] == $_SESSION['logged_user_data']['email'])
                            echo '<b>(You)</b>'; ?>
                    </td>
                    <td>
                        <?= $user['email'] ?>
                    </td>
                    <td>
                        <a href="update-profile.php?email=<?= $user['email'] ?>"><button>Update</button></a>
                        <?php if ($user['email']!= $_SESSION['logged_user_data']['email'] && $_SESSION['logged_user_data']['role'] == 'admin') { ?> <a href="../controller/remove-user.php?email=<?= $user['email'] ?>"><button>Remove</button></a> <?php } ?>
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