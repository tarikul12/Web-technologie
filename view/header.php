<fieldset>
    <table align="right">
        <tr>
            <td>
                <b>Today: </b>
                <?= date("l"); ?>
                <td>&nbsp;&nbsp;</td>
            </td>
            <?php
            if (!isset($_SESSION['logged_user_data'])) { ?>
                <td><a href="signin.php"><input type="button" value="Signin" id=""></a></td>
            <?php
            }

            if (isset($_SESSION['logged_user_data'])) {                                                                                                                    ?>
                <td><b>[<?= $logged_user['role'] ?>]</b></td>
                <td>&nbsp;&nbsp;</td>
                <td><?= $logged_user['email'] ?></td>
                <td>&nbsp;&nbsp;</td>
                <td><a href="logout.php"><input type="submit" name="logout" value="Log Out" id=""></a> </td>
            <?php
            }
            ?>
        </tr>
    </table>
</fieldset>