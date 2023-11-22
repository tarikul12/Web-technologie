<?php  

    require("../model/scheduleModel.php");

    removeSchedule($_GET['id']);

    header('location: ../view/schedule-list.php');

?>