<?php 

    require('../model/userModel.php');

    removeUser($_GET['email']);

    header('location: ../view/user-list.php');


?>