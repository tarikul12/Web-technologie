<?php
require("validation.php");
require("../model/userModel.php");
session_start();


if (isset($_POST['update'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $group = $_POST['bloodG'];

    $user = getUser($_POST['who']);

    if (
        isValidName($first_name) &&
        isValidName($last_name) &&
        isValidEmail($email) &&
        isValidPhone($phone, $country) &&
        isValidBloodGroup($group)
    ) {
    } else {
        header('Location: ../view/update-profile.php?email='.$user['email']."&err=invalid");
        exit();
    }

    $updated_data = [
        'firstname' =>  $first_name,
        'lastname' =>  $last_name,
        'email' =>  $email, 
        'password' => $user['password'],
        'bloodG' => $group,
        'dob' => $dob,
        'gender' => $gender,
        'country' => $country,
        'phone' => $phone,
        'role' => $user['role']
    ];
    updateUser($user['email'], $updated_data);
    

    if($_SESSION['logged_user_data'] === $_POST['who']) $_SESSION['logged_user_data'] = $updated_data;

    header('Location: ../view/update-profile.php?email='.$user['email']);


}

?>