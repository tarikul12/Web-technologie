<?php


function addUser($user){
    $data = file_get_contents('../data/users.json');
    $users = json_decode($data, true);
    
    $users[] = $user;
    
    file_put_contents('../data/users.json', json_encode($users, JSON_PRETTY_PRINT));
}
function getUser($email)
{
    $existingdata = file_get_contents("../data/users.json");
    $phpdata = json_decode($existingdata, true);

    for ($i = 0; $i < count($phpdata); $i++) {

        if ($phpdata[$i]["email"] == $email) {
            return $phpdata[$i];
        }
    }
    return false;
}

function getAllUser()
{
    $existingdata = file_get_contents("../data/users.json");
    $phpdata = json_decode($existingdata, true);
    return $phpdata;
}

function updateUser($email, $data)
{
    $existingdata = file_get_contents("../data/users.json");
    $phpdata = json_decode($existingdata, true);
    $user = getUser($email);


    for ($i = 0; $i < count($phpdata); $i++) {

        if ($phpdata[$i]["email"] == $user['email']) {
            $phpdata[$i] = $data;
        }
    }

    file_put_contents('../data/users.json', json_encode($phpdata, JSON_PRETTY_PRINT));

}

function removeUser($email)
{
    $existingdata = file_get_contents("../data/users.json");
    $phpdata = json_decode($existingdata, true);


    for ($i = 0; $i < count($phpdata); $i++) {
        if ($phpdata[$i]["email"] == $email) {

            unset($phpdata[$i]);
        }
    }

    file_put_contents('../data/users.json', json_encode($phpdata, JSON_PRETTY_PRINT));

}

?>