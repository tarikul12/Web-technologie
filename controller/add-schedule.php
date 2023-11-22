<?php
require_once("../model/scheduleModel.php");
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $bloodG = $_POST['bloodG'];
    $gender = $_POST['gender'];
    $donate_date = $_POST['donate_date'];
    $addedBy = $_POST['added_by'];

    $schedule = [
        "id" => $id,
        "name"=> $name,
        "email"=> $email,
        "phone"=> $phone,
        "bloodG"=> $bloodG,
        "gender"=> $gender,
        "donate_date"=> $donate_date,
        "added_by"=> $addedBy
    ];

    addSchedule($schedule);
    header("location: ../view/schedule-list.php");

?>