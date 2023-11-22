<?php
require("validation.php");
require("../model/userModel.php");

if (isset($_POST['submit_button'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email=$_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $group = $_POST['bloodG'];

    if(
        isValidName($first_name) &&
        isValidName($last_name) &&
        isValidEmail($email) &&
        isValidPassword($password) &&
        isValidPhone($phone, $country) &&
        isValidBloodGroup($group)
    ){}
    else{ 
        header('location: ../view/signup.php?err=invalid');
        exit();
    }
    
    


    $user[] = [
        'firstname' =>  $first_name,
        'lastname' =>  $last_name,
        'email' =>  $email, 
        'password' => $password,
        'bloodG' => $group,
        'dob' => $dob,
        'gender' => $gender,
        'country' => $country,
        'phone' => $phone,
        'role' => 'donor'
    ];

    addUser($user);
    

    header('Location: ../view/login.php');
} else {
    header('Location: ../view/signup.php');
}
?>


 
