<?php
    if(!isset($_POST['login'])){
        header('location: ../view/login.php');
        exit();
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $existingdata=file_get_contents("../data/users.json");
    $phpdata=json_decode($existingdata, true);

    foreach($phpdata as $key=>$value){
        if($value["email"] == $email && $value['password'] == $password){
            session_start();
            $_SESSION["logged_user_data"] = $value;
            if($value['role'] == 'admin'){
                header('location: ../view/admin.php');
                exit();
            }
            else if( $value['role'] == 'manager'){
                header('location: ../view/manager.php');
                exit();
            }
        }
    }

    header('location: ../view/login.php?err=invalid');

?>